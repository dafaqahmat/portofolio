<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title_id' => 'Smart Agri Desa',
                'title_en' => 'Smart Agri Village',
                'title_ar' => 'قرية الزراعة الذكية',
                'slug_id' => 'smart-agri-desa',
                'slug_en' => 'smart-agri-village',
                'slug_ar' => 'smart-agri-village-ar',
                'description_id' => 'Aplikasi web pintar berbasis role (Admin & Petani) untuk mendigitalisasi tata kelola sumber daya air irigasi dan penjadwalan tanam di lingkup desa. Fitur utama meliputi booking jadwal air dengan peta interaktif, monitoring harga pasar, jadwal tanam dengan estimasi panen otomatis, dan dashboard global untuk perangkat desa. Sistem mencegah bentrok jadwal air antar petani dan memberikan insight proyeksi panen.',
                'description_en' => 'Smart role-based web application (Admin & Farmer) to digitize irrigation water resource management and planting schedules in village scope. Key features include water schedule booking with interactive maps, market price monitoring, planting schedules with automatic harvest estimation, and global dashboard for village officials. The system prevents water schedule conflicts between farmers and provides harvest projection insights.',
                'description_ar' => 'تطبيق ويب ذكي قائم على الأدوار (المسؤول والمزارع) لرقمنة إدارة موارد مياه الري وجداول الزراعة على مستوى القرية. تشمل الميزات الرئيسية حجز جداول المياه مع خرائط تفاعلية، ومراقبة أسعار السوق، وجداول الزراعة مع تقدير تلقائي للحصاد، ولوحة معلومات عالمية لمسؤولي القرية. يمنع النظام تضارب جداول المياه بين المزارعين ويقدم رؤى حول توقعات الحصاد.',
                'tech_stack' => ['Vue.js 3', 'Vite', 'Leaflet.js', 'Express.js', 'Prisma', 'MySQL', 'JWT'],
                'link_repo' => 'https://github.com/dafaqahmat/-SmartAgri',
                'category' => 'web',
                'order' => 1,
                'is_published' => true,
                'is_featured' => true,
            ],
            [
                'title_id' => 'Pamsimas - Sistem Air Bersih Desa',
                'title_en' => 'Pamsimas - Village Water Management',
                'title_ar' => 'بامسيماس - إدارة مياه القرية',
                'slug_id' => 'pamsimas-sistem-air-bersih-desa',
                'slug_en' => 'pamsimas-village-water-management',
                'slug_ar' => 'pamsimas-village-water-management-ar',
                'description_id' => 'Sistem terpadu untuk tata kelola administrasi, pencatatan meteran air, dan pembayaran tagihan pelanggan Pamsimas. Terdiri dari Web Dashboard (Laravel) untuk Admin dan Mobile App (Kotlin) untuk Petugas & Pelanggan. Fitur mencakup pencatatan meter dengan foto bukti, integrasi printer thermal Bluetooth, notifikasi WhatsApp otomatis, sistem denda otomatis dengan Cronjob, dan laporan keuangan real-time.',
                'description_en' => 'Integrated system for Pamsimas administration management, water meter recording, and customer billing. Consists of Web Dashboard (Laravel) for Admin and Mobile App (Kotlin) for Officers & Customers. Features include meter recording with photo proof, Bluetooth thermal printer integration, automatic WhatsApp notifications, automatic penalty system with Cronjob, and real-time financial reports.',
                'description_ar' => 'نظام متكامل لإدارة إدارة بامسيماس، وتسجيل عدادات المياه، وفوترة العملاء. يتكون من لوحة معلومات ويب (Laravel) للمسؤول وتطبيق جوال (Kotlin) للموظفين والعملاء. تشمل الميزات تسجيل العداد مع دليل الصور، وتكامل طابعة حرارية عبر Bluetooth، وإشعارات WhatsApp التلقائية، ونظام غرامات تلقائي مع Cronjob، وتقارير مالية في الوقت الفعلي.',
                'tech_stack' => ['Laravel', 'Kotlin', 'MySQL', 'WhatsApp API', 'Bluetooth ESC/POS', 'Cronjob'],
                'link_repo' => 'https://github.com/dafaqahmat/pamsimas-app',
                'category' => 'web',
                'order' => 2,
                'is_published' => true,
                'is_featured' => true,
            ],
            [
                'title_id' => 'Sistem Pengumuman Text-to-Speech Polres',
                'title_en' => 'Police Text-to-Speech Announcement System',
                'title_ar' => 'نظام إعلان تحويل النص إلى كلام للشرطة',
                'slug_id' => 'sistem-pengumuman-text-to-speech-polres',
                'slug_en' => 'police-text-to-speech-announcement-system',
                'slug_ar' => 'police-text-to-speech-announcement-system-ar',
                'description_id' => 'Aplikasi web untuk sistem pengumuman internal otomatis di Polres Kediri menggunakan teknologi Text-to-Speech. Fitur meliputi otomatisasi audio dengan bel pembuka dan penutup, TTS pintar dengan prioritas suara Microsoft Ardi Online (bahasa Indonesia), manajemen template CRUD dengan localStorage, dan kompensasi jaringan dengan delay pintar untuk transisi mulus.',
                'description_en' => 'Web application for automatic internal announcement system at Kediri Police using Text-to-Speech technology. Features include audio automation with opening and closing bells, smart TTS with Microsoft Ardi Online voice priority (Indonesian), CRUD template management with localStorage, and network compensation with smart delay for smooth transitions.',
                'description_ar' => 'تطبيق ويب لنظام إعلان داخلي تلقائي في شرطة كديري باستخدام تقنية تحويل النص إلى كلام. تشمل الميزات أتمتة الصوت مع أجراس الفتح والإغلاق، وتحويل النص إلى كلام ذكي مع أولوية صوت Microsoft Ardi Online (الإندونيسية)، وإدارة قوالب CRUD مع localStorage، وتعويض الشبكة مع تأخير ذكي للانتقالات السلسة.',
                'tech_stack' => ['HTML5', 'CSS3', 'Vanilla JavaScript', 'Web Speech API', 'SweetAlert2'],
                'link_repo' => 'https://github.com/dafaqahmat/Text-To-Speech-Polres',
                'category' => 'web',
                'order' => 3,
                'is_published' => true,
                'is_featured' => true,
            ],
            [
                'title_id' => 'Sistem Informasi Perpustakaan Desa',
                'title_en' => 'Village Library Information System',
                'title_ar' => 'نظام معلومات مكتبة القرية',
                'slug_id' => 'sistem-informasi-perpustakaan-desa',
                'slug_en' => 'village-library-information-system',
                'slug_ar' => 'village-library-information-system-ar',
                'description_id' => 'Aplikasi web Laravel 11 untuk manajemen perpustakaan desa dengan fitur gamification dan CRM. Fitur utama: manajemen anggota dengan cetak ID Card/QR Code, manajemen buku real-time, sistem poin loyalty (reward & punishment), leaderboard interaktif, sirkulasi peminjaman dengan scan QR dan tanda tangan digital, absensi kehadiran, laporan export Word dengan kop surat otomatis, dan dashboard analitik dengan Chart.js.',
                'description_en' => 'Laravel 11 web application for village library management with gamification and CRM features. Key features: member management with ID Card/QR Code printing, real-time book management, loyalty points system (reward & punishment), interactive leaderboard, loan circulation with QR scan and digital signature, attendance tracking, Word export reports with automatic letterhead, and analytics dashboard with Chart.js.',
                'description_ar' => 'تطبيق ويب Laravel 11 لإدارة مكتبة القرية مع ميزات التلعيب وإدارة علاقات العملاء. الميزات الرئيسية: إدارة الأعضاء مع طباعة بطاقة الهوية/رمز QR، وإدارة الكتب في الوقت الفعلي، ونظام نقاط الولاء (المكافآت والعقوبات)، ولوحة المتصدرين التفاعلية، ودورة الإعارة مع مسح QR والتوقيع الرقمي، وتتبع الحضور، وتقارير تصدير Word مع ترويسة تلقائية، ولوحة معلومات تحليلية مع Chart.js.',
                'tech_stack' => ['Laravel 11', 'PHP 8.2', 'MySQL', 'Bootstrap 5', 'html5-qrcode', 'SweetAlert2', 'Chart.js'],
                'link_repo' => 'https://github.com/dafaqahmat/perpustakaan-desa',
                'category' => 'web',
                'order' => 4,
                'is_published' => true,
                'is_featured' => false,
            ],
            [
                'title_id' => 'Kasir SAT SET - Aplikasi Kasir Flutter',
                'title_en' => 'SAT SET Cashier - Flutter POS App',
                'title_ar' => 'كاشير سات سيت - تطبيق نقاط البيع فلاتر',
                'slug_id' => 'kasir-sat-set-aplikasi-kasir-flutter',
                'slug_en' => 'sat-set-cashier-flutter-pos-app',
                'slug_ar' => 'sat-set-cashier-flutter-pos-app-ar',
                'description_id' => 'Aplikasi kasir (Point of Sale) berbasis Flutter untuk kebutuhan transaksi penjualan. Dibangun dengan Dart dan framework Flutter untuk cross-platform (Android & iOS). Fitur mencakup manajemen produk, transaksi penjualan, laporan penjualan, dan manajemen stok.',
                'description_en' => 'Flutter-based Point of Sale application for sales transaction needs. Built with Dart and Flutter framework for cross-platform (Android & iOS). Features include product management, sales transactions, sales reports, and stock management.',
                'description_ar' => 'تطبيق نقاط البيع المبني على فلاتر لاحتياجات معاملات المبيعات. تم بناؤه باستخدام Dart وإطار فلاتر للمنصات المتعددة (Android و iOS). تشمل الميزات إدارة المنتجات، ومعاملات المبيعات، وتقارير المبيعات، وإدارة المخزون.',
                'tech_stack' => ['Flutter', 'Dart', 'Mobile Development'],
                'link_repo' => 'https://github.com/dafaqahmat/kasir_sat_set',
                'category' => 'mobile',
                'order' => 5,
                'is_published' => true,
                'is_featured' => false,
            ],
            [
                'title_id' => 'CBT Exam - Sistem Ujian Online',
                'title_en' => 'CBT Exam - Online Examination System',
                'title_ar' => 'نظام الامتحانات عبر الإنترنت',
                'slug_id' => 'cbt-exam-sistem-ujian-online',
                'slug_en' => 'cbt-exam-online-examination-system',
                'slug_ar' => 'cbt-exam-online-examination-system-ar',
                'description_id' => 'Sistem Computer Based Test (CBT) untuk pelaksanaan ujian online. Dibangun dengan TypeScript untuk aplikasi web modern dan responsif. Mendukung berbagai jenis soal, manajemen ujian, monitoring real-time, dan hasil otomatis.',
                'description_en' => 'Computer Based Test (CBT) system for online examination implementation. Built with TypeScript for modern and responsive web application. Supports various question types, exam management, real-time monitoring, and automatic results.',
                'description_ar' => 'نظام الاختبار القائم على الحاسوب (CBT) لتنفيذ الامتحانات عبر الإنترنت. تم بناؤه باستخدام TypeScript لتطبيق ويب حديث ومتجاوب. يدعم أنواع الأسئلة المختلفة، وإدارة الامتحانات، والمراقبة في الوقت الفعلي، والنتائج التلقائية.',
                'tech_stack' => ['TypeScript', 'Web Development'],
                'link_repo' => 'https://github.com/dafaqahmat/cbt-exam',
                'category' => 'web',
                'order' => 6,
                'is_published' => true,
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $projectData) {
            Project::updateOrCreate(
                ['link_repo' => $projectData['link_repo']],
                $projectData
            );
        }
    }
}
