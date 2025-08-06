# Laravel Dummy

# Deskripsi

Proyek dummy laravel dengan autentikasi dan modul CRUD sederhana (album musik).

# Langkah Instalasi

1. Clone repositori nya
2. Lalu lakukan `composer install`
3. Sleanjutnya copy `.env.example` ke `.env` lalu sesuaikan konfigurasi database
4. Jalankan `php artisan key:generate`
5. Kemudian jalankan migrasi: `php artisan migrate`
6. Jalankan seeder: `php artisan db:seed`
7. Yang terakhir jalankan server: `php artisan serve`

# Struktur Folder

-   `app/Models/Product.php` – Model
-   `app/Http/Controllers/ProductController.php` – Controller
-   `resources/views/products/` – Blade views
-   `routes/web.php` – Routing

# Akun Sampel

-   Email: `adie6809@gmail.com`
-   Password: `12345678`
