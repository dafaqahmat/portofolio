<x-layouts.app :title="__('Kontak') . ' - Dafa\' Ahmat Setyo Nugroho'" :description="__('Hubungi Dafa\' Ahmat Setyo Nugroho untuk kolaborasi atau pertanyaan.')">

    <section id="{{ __('kontak') }}" class="reveal space-y-6 max-w-4xl mx-auto w-full">
        <div class="space-y-3">
            <h2 class="text-2xl md:text-3xl font-bold text-bright tracking-tight">{{ __('Hubungi Saya') }}</h2>
            <p class="text-dim leading-relaxed">
                {{ __('Isi form berikut dan pesan akan langsung dikirim ke WhatsApp saya.') }}
            </p>
        </div>

        @if(session('success'))
            <div class="rounded-xl border border-emerald-400/30 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-300" role="status">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->has('form'))
            <div class="rounded-xl border border-red-400/30 bg-red-400/10 px-4 py-3 text-sm text-red-300" role="alert">
                {{ $errors->first('form') }}
            </div>
        @endif

        <form id="contact-form" method="POST" action="{{ url()->current() }}" class="bento-card p-5 md:p-6 space-y-5">
            @csrf

            <div class="space-y-2">
                <label for="name" class="text-sm font-medium text-bright">{{ __('Nama') }}</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="100"
                    autocomplete="name"
                    class="w-full rounded-lg border border-white/10 bg-white/5 px-3.5 py-2.5 text-sm text-bright placeholder:text-white/30 focus:border-white/30 focus:outline-none focus:ring-2 focus:ring-white/10"
                    placeholder="{{ __('Nama lengkap') }}">
                @error('name') <p class="text-sm text-red-300">{{ $message }}</p> @enderror
            </div>

            <div class="space-y-2">
                <label for="phone" class="text-sm font-medium text-bright">{{ __('Nomor WhatsApp') }}</label>
                <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" required maxlength="25"
                    autocomplete="tel" inputmode="tel"
                    class="w-full rounded-lg border border-white/10 bg-white/5 px-3.5 py-2.5 text-sm text-bright placeholder:text-white/30 focus:border-white/30 focus:outline-none focus:ring-2 focus:ring-white/10"
                    placeholder="081234567890">
                @error('phone') <p class="text-sm text-red-300">{{ $message }}</p> @enderror
            </div>

            <div class="space-y-2">
                <label for="description" class="text-sm font-medium text-bright">{{ __('Deskripsi Pesan') }}</label>
                <textarea id="description" name="description" rows="4" required minlength="10" maxlength="2000"
                    class="w-full rounded-lg border border-white/10 bg-white/5 px-3.5 py-2.5 text-sm text-bright placeholder:text-white/30 focus:border-white/30 focus:outline-none focus:ring-2 focus:ring-white/10"
                    placeholder="{{ __('Tuliskan pesan atau kebutuhan Anda...') }}">{{ old('description') }}</textarea>
                @error('description') <p class="text-sm text-red-300">{{ $message }}</p> @enderror
            </div>

            <button id="contact-submit" type="submit"
                class="inline-flex w-full sm:w-auto items-center justify-center gap-2 rounded-lg bg-white px-6 py-3 text-sm font-semibold text-black transition-colors hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-white/60 focus:ring-offset-2 focus:ring-offset-[#0E0E11] disabled:cursor-not-allowed disabled:opacity-60">
                <svg id="contact-submit-spinner" class="hidden h-4 w-4 animate-spin" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg>
                <span id="contact-submit-label">{{ __('Kirim Pesan') }}</span>
            </button>
        </form>
    </section>

<script>
    document.getElementById('contact-form')?.addEventListener('submit', function () {
        const button = document.getElementById('contact-submit');
        const spinner = document.getElementById('contact-submit-spinner');
        const label = document.getElementById('contact-submit-label');

        button.disabled = true;
        spinner.classList.remove('hidden');
        label.textContent = @json(__('Mengirim...'));
    });
</script>

</x-layouts.app>
