<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactPageController extends Controller
{
    public function index($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        app()->setLocale(in_array($locale, ['id', 'en', 'ar'], true) ? $locale : 'id');

        return view('pages.contact');
    }

    public function send(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:25', 'regex:/^\+?[0-9\s()\-]{8,24}$/'],
            'description' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        $token = config('services.fonnte.token');
        if (! $token) {
            Log::error('Fonnte token is not configured.');

            return back()->withErrors(['form' => __('Layanan kontak sedang tidak tersedia. Silakan coba lagi nanti.')])->withInput();
        }

        $message = implode("\n", [
            '*Pesan baru dari website portfolio*',
            '',
            '*Nama:* ' . $validated['name'],
            '*Nomor WhatsApp:* ' . $validated['phone'],
            '*Pesan:*',
            $validated['description'],
        ]);

        try {
            $response = Http::asForm()
                ->withHeaders(['Authorization' => $token])
                ->timeout(15)
                ->post(config('services.fonnte.url'), [
                    'target' => config('services.fonnte.target'),
                    'message' => $message,
                ]);

            if ($response->failed() || $response->json('status') === false) {
                Log::error('Fonnte rejected contact message.', [
                    'status' => $response->status(),
                    'response' => $response->json(),
                ]);

                return back()->withErrors(['form' => __('Pesan gagal dikirim. Silakan coba lagi.')])->withInput();
            }
        } catch (\Throwable $exception) {
            Log::error('Fonnte contact request failed.', [
                'message' => $exception->getMessage(),
            ]);

            return back()->withErrors(['form' => __('Pesan gagal dikirim. Silakan coba lagi.')])->withInput();
        }

        return back()->with('success', __('Pesan berhasil dikirim. Terima kasih sudah menghubungi saya.'));
    }
}
