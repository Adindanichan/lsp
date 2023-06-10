#Deskripsi Singkat
Aplikasi asesmen kompetisi lembaga sertifikasi berbasis web untuk salah satu jurusan di SMK 2 Indramayu yaitu jurusan Rekayasa Perangkat Lunak atau biasa disingkat RPL.

#Spesifikasi dan Kebutuhan
Code Editor (Visual Studio Code, Sublime Text)
XAMPP
MySQL
Laptop / Komputer
Pencil Evolus
HTML
CSS
PHP
Bootstrap 
Framework Laravel

#Install dan Import Database

Untuk menginstall sebuah proyek Laravel dan mengimpor database, ikuti langkah-langkah berikut:

Langkah 1: Persiapan

1. Pastikan komputer Anda telah memenuhi persyaratan sistem untuk menjalankan Laravel.
   - PHP versi 7.4 atau yang lebih baru.
   - Composer telah terinstal.
   - Database server seperti MySQL, PostgreSQL, atau SQLite.
   
2. Pastikan Anda memiliki proyek Laravel yang ingin Anda instal. Jika Anda belum memiliki proyek, Anda dapat membuatnya dengan menjalankan perintah berikut di terminal:
   ```
   composer create-project --prefer-dist laravel/laravel nama-proyek-anda
   ```
   Ganti "nama-proyek-anda" dengan nama yang Anda inginkan untuk proyek Laravel Anda.

3. Pastikan Anda memiliki file database yang ingin Anda impor. File tersebut mungkin berupa file SQL atau file dump dari database.

Langkah 2: Instalasi

1. Buka terminal dan arahkan ke direktori proyek Laravel Anda dengan menggunakan perintah `cd`.

2. Jalankan perintah `composer install` untuk menginstal semua dependensi proyek Laravel.

3. Salin file `.env.example` menjadi `.env` dengan menjalankan perintah:
   ```
   cp .env.example .env
   ```
   Pastikan file `.env` telah dibuat.

4. Generate kunci aplikasi dengan menjalankan perintah:
   ```
   php artisan key:generate
   ```
   Kunci aplikasi baru akan ditambahkan ke file `.env`.

Langkah 3: Konfigurasi Database

1. Buka file `.env` dan ubah pengaturan database sesuai dengan konfigurasi Anda.
   ```
   DB_CONNECTION=mysql
   DB_HOST=nama_host_database
   DB_PORT=port_database
   DB_DATABASE=nama_database
   DB_USERNAME=username_database
   DB_PASSWORD=password_database
   ```
   Ganti "nama_host_database", "port_database", "nama_database", "username_database", dan "password_database" sesuai dengan detail koneksi database Anda.

2. Jalankan perintah migrasi untuk membuat tabel yang diperlukan dalam database:
   ```
   php artisan migrate
   ```

Langkah 4: Import Database

1. Jika Anda memiliki file SQL, buatlah database kosong di server database Anda, lalu jalankan perintah berikut untuk mengimpor file SQL ke database:
   ```
   mysql -u username_database -p nama_database < path_ke_file_sql
   ```
   Ganti "username_database" dengan nama pengguna database Anda, "nama_database" dengan nama database yang telah Anda buat, dan "path_ke_file_sql" dengan jalur lengkap ke file SQL.

2. Jika Anda memiliki file dump dari database, pastikan Anda telah membuat database kosong di server database Anda, lalu jalankan perintah berikut untuk mengimpor file dump:
   ```
   mysql -u username_database -p nama_database < path_ke_file_dump
   ```
   Ganti "username_database" dengan nama pengguna database Anda, "nama_database" dengan nama database yang telah Anda buat, dan "path_ke_file_dump" dengan jalur lengkap ke file dump.

Setelah langkah-langkah di atas selesai, proyek Laravel Anda sekarang sudah terinstal dan database telah diimpor. Anda dapat menjalankan proyek Laravel dengan menggunakan perintah `php artisan serve` di terminal dan mengaksesnya melalui browser dengan alamat `http://localhost:

#Info Credential
1. Asesor
Email  lspasesor@gmail.com
Pw
lspasesor1234
2. Asesi : 
Email
lspasesi@gmail.com
Pw
lspasesi1234
3. Admin
Email
lspadmin@gmail.com
Pw
lspadmin1234
4. Manajer Sertifikat
Email
lspms@gmail.com
Pw 
lspms1234

