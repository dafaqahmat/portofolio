<x-layouts.app :title="__('Pengalaman') . ' - Dafa\' Ahmat Setyo Nugroho'" :description="__('Pengalaman Kerja Dafa\' Ahmat Setyo Nugroho.')">

    @php
        $locale = app()->getLocale();
        $prefix = $locale === 'id' ? '' : $locale;
        
        $polresImages = [
            ['src' => asset('foto pkl/1.png'), 'alt' => __('Aplikasi Teks ke suara')],
            ['src' => asset('foto pkl/2.jpg'), 'alt' => __('Kegiatan Praktik Kerja Lapangan di Polres Kediri - Foto 1')],
            ['src' => asset('foto pkl/3.jpg'), 'alt' => __('Kegiatan Praktik Kerja Lapangan di Polres Kediri - Foto 2')],
            ['src' => asset('foto pkl/4.jpg'), 'alt' => __('Kegiatan Praktik Kerja Lapangan di Polres Kediri - Foto 3')],
            ['src' => asset('foto pkl/5.jpg'), 'alt' => __('Kegiatan Praktik Kerja Lapangan di Polres Kediri - Foto 4')]
        ];
        $pamsimasImages = [
            ['src' => asset('foto tugas akhir/1.png'), 'alt' => __('Sistem Informasi Manajemen PAMSIMAS - Foto 1')],
            ['src' => asset('foto tugas akhir/2.png'), 'alt' => __('Sistem Informasi Manajemen PAMSIMAS - Foto 2')],
            ['src' => asset('foto tugas akhir/3.png'), 'alt' => __('Sistem Informasi Manajemen PAMSIMAS - Foto 3')],
            ['src' => asset('foto tugas akhir/4.jpg'), 'alt' => __('Penyerahan Aplikasi Sistem Informasi Manajemen PAMSIMAS')],
            ['src' => asset('foto tugas akhir/5.jpg'), 'alt' => __('Foto Pamsimas Desa Tenggerlor')]
        ];
        $msjImages = [
            ['src' => asset('foto magang nasional/1.png'), 'alt' => __('Website Profil PT Multi Spunindo Jaya Tbk - Foto 1')],
            ['src' => asset('foto magang nasional/2.png'), 'alt' => __('Website Profil PT Multi Spunindo Jaya Tbk - Foto 2')],
            ['src' => asset('foto magang nasional/3.png'), 'alt' => __('Website Profil PT Multi Spunindo Jaya Tbk - Foto 3')],
            ['src' => asset('foto magang nasional/4.jpeg'), 'alt' => __('Demo Aplikasi')],
            ['src' => asset('foto magang nasional/5.jpeg'), 'alt' => __('Foto Bersama Batch 3 dan para Mentor')]
        ];
    @endphp

    <section id="{{ __('pengalaman') }}" class="reveal space-y-10">
        <div class="space-y-3 max-w-xl">
            <h2 class="text-2xl md:text-3xl font-bold text-bright tracking-tight">{{ __('Pengalaman Kerja') }}</h2>
            <p class="text-dim leading-relaxed">
                {{ __('Implementasi riil pengembangan sistem, pemeliharaan infrastruktur, dan magang profesional.') }}
            </p>
        </div>

        <div class="flex flex-col gap-6">

            <article class="bento-card group p-6 md:p-10">
                <div class="spotlight"></div>
                <div class="relative z-20 flex flex-col md:flex-row gap-6 md:gap-8 items-start">
                    <div
                        class="w-16 h-16 md:w-20 md:h-20 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 overflow-hidden">
                        <img src="{{ asset('logo/polres-kediri.png') }}" alt="Polres Kediri Logo"
                            class="w-full h-full object-contain p-2">
                    </div>
                    <div class="space-y-3 w-full">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
                            <h3 class="text-xl md:text-2xl font-semibold text-bright">Polres Kediri</h3>
                            <span
                                class="text-xs font-mono text-emerald-400 bg-emerald-400/10 px-3 py-1 rounded-full border border-emerald-400/20 w-fit md:flex-shrink-0">Jun
                                2024 - Ags 2024</span>
                        </div>
                        <p class="text-sm text-dim font-medium uppercase tracking-wider">
                            {{ __('Praktik Kerja Lapangan (PKL)') }}</p>
                        <p class="text-dim text-sm leading-relaxed">
                            {{ __('Dalam kegiatan PKL di Polres Kediri, saya berkontribusi dalam pengembangan aplikasi Text-to-Speech yang digunakan sebagai sistem pengumuman internal. Selain itu, saya bertugas melakukan pemeliharaan jaringan fisik dasar, seperti crimping kabel LAN dan memastikan konektivitas jaringan pada berbagai perangkat, termasuk menghubungkan CCTV ke dalam jaringan lokal, serta mendata berbagai kebutuhan operasional di Polres Kediri menggunakan Microsoft Office.') }}
                        </p>
                        <div class="photo-strip">
                            @foreach($polresImages as $img)
                                <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" data-images='@json($polresImages)'
                                    data-index="{{ $loop->index }}" loading="lazy" class="cursor-pointer photo-thumb">
                            @endforeach
                        </div>
                    </div>
                </div>
            </article>

            <article class="bento-card group p-6 md:p-10">
                <div class="spotlight"></div>
                <div class="relative z-20 flex flex-col md:flex-row gap-6 md:gap-8 items-start">
                    <div
                        class="w-16 h-16 md:w-20 md:h-20 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 overflow-hidden">
                        <img src="{{ asset('logo/pamsimas.png') }}" alt="PAMSIMAS Logo"
                            class="w-full h-full object-contain p-2">
                    </div>
                    <div class="space-y-3 w-full">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
                            <h3 class="text-xl md:text-2xl font-semibold text-bright">PAMSIMAS Desa Tenggerlor</h3>
                            <span
                                class="text-xs font-mono text-blue-400 bg-blue-400/10 px-3 py-1 rounded-full border border-blue-400/20 w-fit md:flex-shrink-0">Jun
                                2025</span>
                        </div>
                        <p class="text-sm text-dim font-medium uppercase tracking-wider">{{ __('Tugas Akhir') }}</p>
                        <p class="text-dim text-sm leading-relaxed">
                            {{ __('Membangun sistem informasi manajemen PAMSIMAS dengan fitur kalkulasi tagihan air otomatis berdasarkan input manual pembacaan meteran oleh petugas lapangan. Sistem ini dilengkapi dengan panel admin dinamis untuk mengatur variabel biaya seperti tarif bertingkat, denda, dan beban biaya tetap. Selain itu, saya mengembangkan fitur pengaduan pelanggan dengan fasilitas unggah file yang pesannya terintegrasi langsung dengan WhatsApp petugas. Saya juga mengimplementasikan otomatisasi sistem menggunakan Cronjob untuk memperbarui status data secara mandiri dan mengirimkan notifikasi peringatan keterlambatan pembayaran kepada pelanggan melalui WhatsApp.') }}
                        </p>
                        <div class="photo-strip">
                            @foreach($pamsimasImages as $img)
                                <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}"
                                    data-images='@json($pamsimasImages)' data-index="{{ $loop->index }}" loading="lazy"
                                    class="cursor-pointer photo-thumb">
                            @endforeach
                        </div>
                    </div>
                </div>
            </article>

            <article class="bento-card group p-6 md:p-10">
                <div class="spotlight"></div>
                <div class="relative z-20 flex flex-col md:flex-row gap-6 md:gap-8 items-start">
                    <div
                        class="w-16 h-16 md:w-20 md:h-20 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 overflow-hidden">
                        <img src="{{ asset('logo/spunindo.png') }}" alt="PT Multi Spunindo Jaya Tbk Logo"
                            class="w-full h-full object-contain p-2">
                    </div>
                    <div class="space-y-3 w-full">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
                            <h3 class="text-xl md:text-2xl font-semibold text-bright">PT Multi Spunindo Jaya Tbk
                            </h3>
                            <span
                                class="text-xs font-mono text-orange-400 bg-orange-400/10 px-3 py-1 rounded-full border border-orange-400/20 w-fit md:flex-shrink-0">Des
                                2025 - Jun 2026</span>
                        </div>
                        <p class="text-sm text-dim font-medium uppercase tracking-wider">{{ __('Magang Nasional') }}
                        </p>
                        <p class="text-dim text-sm leading-relaxed">
                            {{ __('Bertanggung jawab membangun ulang (rebuild) website profil perusahaan dari platform WordPress menjadi aplikasi berbasis Laravel multilingual dengan dukungan tiga bahasa (Indonesia, Inggris, dan Jepang). Pekerjaan ini mencakup penerapan praktik SEO dasar pada tingkat kode dan penyusunan panduan teknis bagi tim pengelola mengenai cara mengintegrasikan Google Analytics serta mendaftarkan domain melalui Google Search Console. Selain itu, saya berkontribusi dalam menambahkan fitur pada aplikasi katering internal perusahaan sesuai arahan mentor, serta bertugas melakukan proses upload dan pembaruan (update) master data pada sistem SAP perusahaan yang meliputi data material, BOM, dan vendor.') }}
                        </p>
                        <div class="photo-strip">
                            @foreach($msjImages as $img)
                                <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" data-images='@json($msjImages)'
                                    data-index="{{ $loop->index }}" loading="lazy" class="cursor-pointer photo-thumb">
                            @endforeach
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </section>

</x-layouts.app>
