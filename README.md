# Tugas Web Pertemuan 9 - Setup Laravel

Proyek ini merupakan tugas mata kuliah Pemrograman Web yang berfokus pada langkah awal inisialisasi, konfigurasi, dan penyiapan (*setup*) *framework* PHP **Laravel**. Proyek ini menyajikan struktur aplikasi dasar Laravel lengkap dengan konfigurasi lingkungan (*environment*), routing, controller, serta tampilan antarmuka (*view*).

---

## 🛠️ Teknologi & Tools

Proyek ini dibangun menggunakan teknologi dan pustaka berikut:

- **[PHP](https://www.php.net/)** (v8.1 atau lebih baru)
- **[Laravel Framework](https://laravel.com/)** (v10.x / v11.x)
- **[Composer](https://getcomposer.org/)** - Dependency Manager untuk PHP
- **[MySQL / MariaDB](https://www.mysql.com/)** - Database Relasional
- **[Blade Engine](https://laravel.com/docs/master/blade)** - Template engine bawaan Laravel
- **[Bootstrap / Tailwind CSS](https://tailwindcss.com/)** *(opsional/sesuai setup)* - Styling UI

---

## ✨ Fitur Utama

- **Inisialisasi Project Laravel**: Struktur standar proyek Laravel yang siap dikembangkan.
- **Konfigurasi Environment**: Pengaturan koneksi database dan environment key melalui `.env`.
- **Routing & Controller**: Penanganan rute URL utama dan logika aplikasi sederhana.
- **Desain Blade Template**: Tampilan antarmuka yang bersih dan responsif berbasis Blade.

---

## 📸 Screenshots

*(Unggah gambar screenshot aplikasi Anda ke folder `public/img/` atau repositori GitHub, lalu sesuaikan path gambar di bawah ini)*

| Halaman Utama / Landing Page | Halaman / Fitur Lainnya |
| :---: | :---: |
| ![Screenshot Home](public/img/screenshot-home.png) | ![Screenshot Detail](public/img/screenshot-detail.png) |

---

## 📁 Struktur Folder Utama

Berikut adalah gambaran ringkas struktur folder utama pada proyek ini:

```text
TugasWeb-Pertemuan9-SetupLaravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/   # Logic controller aplikasi
│   │   └── Middleware/    # Middleware HTTP
│   └── Models/            # Model Eloquent ORM
├── bootstrap/             # Script inisialisasi & autoloader
├── config/                # Berkas konfigurasi aplikasi
├── database/
│   ├── migrations/        # Skema tabel database
│   └── seeders/           # Data dummy awal
├── public/                # File publik (index.php, CSS, JS, Gambar)
├── resources/
│   ├── views/             # File template Blade (.blade.php)
│   ├── css/               # Asset CSS
│   └── js/                # Asset JavaScript
├── routes/
│   └── web.php            # Definisi rute web utama
├── .env.example           # Template variabel lingkungan
├── composer.json          # Dependensi PHP & package Laravel
└── README.md              # Dokumentasi proyek
