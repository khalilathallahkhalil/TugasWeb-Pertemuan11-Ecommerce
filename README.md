# Tugas Web Pertemuan 11 - E-Commerce System

Proyek ini merupakan kelanjutan dari materi Pemrograman Web yang berfokus pada pengembangan aplikasi **E-Commerce** berbasis **Laravel**. 

Aplikasi ini dirancang untuk mensimulasikan sistem toko online, mencakup pengelolaan katalog produk (CRUD Produk), kategori produk, keranjang belanja (*shopping cart*), hingga penanganan alur transaksi dasar (*checkout*) dan manajemen inventoris.

---

## 🛠️ Teknologi & Tools

Proyek ini dibangun menggunakan teknologi dan pustaka berikut:

- **[PHP](https://www.php.net/)** (v8.1 atau lebih baru)
- **[Laravel Framework](https://laravel.com/)** (v10.x / v11.x)
- **[Composer](https://getcomposer.org/)** - Dependency Manager untuk PHP
- **[MySQL / MariaDB](https://www.mysql.com/)** - Database Relasional
- **[Eloquent ORM](https://laravel.com/docs/eloquent)** - Object-Relational Mapping & Relasi Tabel (One-to-Many / Many-to-Many)
- **[Blade Engine](https://laravel.com/docs/blade)** - Template engine untuk tampilan antarmuka
- **[Bootstrap / Tailwind CSS](https://getbootstrap.com/)** - Styling UI responsif untuk e-commerce

---

## ✨ Fitur Utama

- **Katalog Produk**: Menampilkan daftar produk dengan harga, deskripsi, stok, dan gambar pendukung.
- **Manajemen Kategori**: Pengelompokan produk berdasarkan kategori tertentu.
- **Keranjang Belanja (Shopping Cart)**: Fitur untuk menambahkan, memperbarui jumlah, dan menghapus item produk sebelum dibeli.
- **Manajemen Produk (CRUD Admin)**: Pengelolaan data produk (tambah produk baru, edit stok/harga, hapus produk).
- **Upload File / Gambar**: Penanganan penyimpanan file gambar produk ke dalam sistem/storage.
- **Simulasi Checkout**: Alur transaksi pemesanan produk sederhananya.

---

## 📸 Screenshots

*(Unggah gambar screenshot aplikasi Anda ke folder `public/img/` atau repositori GitHub, lalu sesuaikan path gambar di bawah ini)*

| Katalog Produk / Home | Keranjang Belanja / Detail Produk |
| :---: | :---: |
| ![Screenshot Catalog](public/img/screenshot-catalog.png) | ![Screenshot Cart](public/img/screenshot-cart.png) |

---

## 📁 Struktur Folder Utama

Berikut adalah gambaran ringkas struktur folder utama pada proyek ini:

```text
TugasWeb-Pertemuan11-Ecommerce/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ProductController.php  # Controller katalog & CRUD produk
│   │   │   ├── CartController.php     # Controller kelola keranjang belanja
│   │   │   └── OrderController.php    # Controller alur checkout/pesanan
│   │   └── Middleware/
│   └── Models/
│       ├── Product.php                # Model Eloquent Produk
│       ├── Category.php               # Model Eloquent Kategori
│       └── Order.php                  # Model Eloquent Transaksi/Pesanan
├── database/
│   ├── migrations/                    # Skema tabel products, categories, orders
│   └── seeders/                       # Data dummy sampel produk & kategori
├── public/
│   └── storage/                       # Symlink folder gambar produk
├── resources/
│   └── views/
│       ├── products/                  # Template Blade produk (index, show, create, edit)
│       └── cart/                      # Template Blade keranjang belanja
├── routes/
│   └── web.php                        # Definisi rute aplikasi E-Commerce
├── .env.example                       # Template variabel lingkungan
├── composer.json                      # Dependensi PHP & package Laravel
└── README.md                          # Dokumentasi proyek
