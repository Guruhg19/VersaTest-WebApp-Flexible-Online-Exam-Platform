# VersaTest App – Flexible Online Exam Platform

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=flat&logo=laravel)
![MySQL](https://img.shields.io/badge/MySQL-Database-informational?style=flat&logo=mysql)
![Spatie](https://img.shields.io/badge/Spatie-Roles%20%26%20Permissions-blue?style=flat&logo=laravel)
![Breeze](https://img.shields.io/badge/Breeze-Starter%20Kit-lightgrey?style=flat&logo=laravel)

## Deskripsi
**VersaTest App (Versatile Test)** adalah platform ujian online fleksibel. Aplikasi ini dirancang untuk mendukung pelaksanaan ujian berbasis komputer (CBT) tidak hanya untuk institusi pendidikan, tetapi juga perusahaan dan lembaga lainnya.

Aplikasi ini dibangun menggunakan Laravel 12, Laravel Breeze, Spatie untuk manajemen peran pengguna, dan MySQL sebagai basis data. Fokus utama dari project ini adalah pada efisiensi pengelolaan data ujian dan pengalaman pengguna yang mudah digunakan.

## Fitur Utama
- Role manajemen: Admin, Teacher, dan Student.
- Pengelolaan data soal, ujian, dan peserta.
- Ujian berbasis waktu.
- Statistik hasil ujian.
- Sistem login dan registrasi menggunakan Laravel Breeze.

## Repository
[VersaTest Web App - GitHub](https://github.com/Guruhg19/VersaTest-WebApp-Flexible-Online-Exam-Platform.git)

## Cara Menjalankan Proyek

1. **Clone Repository**
```bash
git clone https://github.com/Guruhg19/VersaTest-WebApp-Flexible-Online-Exam-Platform.git
cd VersaTest-WebApp-Flexible-Online-Exam-Platform
```

2. **Install Dependencies**
```bash
composer install
npm install && npm run dev
```

3. **Copy File .env dan Generate Key**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Atur Konfigurasi Database**
Edit file `.env` dan sesuaikan:
```
DB_DATABASE=versatest
DB_USERNAME=root
DB_PASSWORD=
```

5. **Migrasi & Seeder Database**
```bash
php artisan migrate --seed
```

6. **Jalankan Server Laravel**
```bash
php artisan serve
```

Akses aplikasi melalui [http://localhost:8000](http://localhost:8000)

---

Project ini dapat menjadi bagian dari portfolio web developer yang ingin menunjukkan kemampuan dalam membangun sistem CBT yang scalable dan versatile.

---

**🌟 Dibuat dengan semangat belajar (emot apii)**

