Portal Berita
Deskripsi
News App adalah aplikasi web untuk menampilkan berita terkini.

Prasyarat
IDE Visual Studio Code
Node.js Versi 20.12.1
Composer versi 2.3.3
PHP versi 8.1.10
PostgreSQL versi 16
Laravel versi 10
NPM versi 10.8.2

Instalasi
Clone Repository
Clone repository ini ke direktori lokal Anda:

git clone git clone https://github.com/taanafana16/portalberita-talenthub14.git

cd portalberita-talenthub14
Instal Dependensi
Instal dependensi PHP menggunakan Composer:

composer install
Instal dependensi Node.js menggunakan npm:

npm install
Konfigurasi Environment
Salin file .env.example ke .env dan sesuaikan konfigurasi environment Anda:

cp .env.example .env
Konfigurasi Postgresql
pastikan anda telah membuat database di postgresq. Masuk ke file .env dan sesuaikan konfigurasi database Anda:

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=database_name_postgresql
DB_USERNAME=database_user_postgresql
DB_PASSWORD=database_password_postgresql
Generate Key Laravel
Buat key baru project laravel:

php artisan key:generate
Konfigurasi file static
buat penyimpanan gambar portalberita:

php artisan storage:link
Migrasi inisial laravel
menjalankan semua migrasi awal project laravel:

php artisan migrate
Insert data awal
memasukan data awal ke project laravel:

php artisan db:seed
Build Assets
Build aset menggunakan Vite:

npm run build
Jalankan Server
Jalankan server pengembangan Laravel::

php artisan serve