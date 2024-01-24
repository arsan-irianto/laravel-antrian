<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Aplikasi Antrian with Laravel

Ini adalah aplikasi antrian berbasis web yang dibuat dengan menggunakan framework laravel versi 10. 
Silahkan ikuti langkah-langkah di bawah setelah and melakukan clone repository untuk menjalankan demo aplikasi:

- Jalankan command composer install
- Buat Database baru di environtment lokal anda
- Sesuaikan koneksi dengan database MySQL anda pada file .env
- Jalankan command php artisan migrate:fresh --seed
- Jalankan command php artisan serve
- Setelah muncul info Server running, buka di browser anda dan masukkan url seperti 
  informasi url yang muncul di console anda, contoh : http://localhost:8000
- Url Dashboard Antrian http://localhost:8000.
- Url Dashboard Admin Antrian http://localhost:8000/login.
- Credential dashboard Admin 
  ```
    user : admin@mail.com
    password : admin
  ```
   