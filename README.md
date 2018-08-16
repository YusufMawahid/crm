Clone
Hal pertama yang harus di lakukan adalah melakukan clone ke repositori target. Saya asumsikan disini sudah terinstall Git di mesin lokal, dan mempunyai akses (minimal Read) terhadap repositori target.

Di sini, saya menggunakan terminal untuk menjalankan perintah Git Clone.

1. git clone https://github.com/YusufMawahid/crm.git

Install Depedency
Depedensi adalah sekumpulan library yang dibutuhkan oleh aplikasi laravel kita, termasuk framework Laravel itu sendiri. List depedensi dapat dilihat pada berkas composer.json . Untuk menginstall semua depedensi, gunakan perintah "composer install" dan composer akan melakukan penelusuran depedensi apa saja yang dibutuhkan aplikasi, lalu mengunduhnya kedalam folder vendor . Sekali lagi, saya asumsikan disini sudah terinstall composer di mesin masing masing.

Setelah composer install selesai, kemudian kita butuh membuat file .env di folder aplikasi kita. Namun, biasanya sudah ada file sampelnya. Kita cukup menyalin file itu saja (atau mengikuti README masing masing project).

cp .env.example .env
Kemudian isikan semua pengaturan yang perlu kamu masukkan, biasanya yang penting adalah pengaturan koneksi database.

Tidak kalah penting, jika dalam sampel .env tadi masih belum memiliki APP_KEY bisa menyebabkan error.
Solusinya, cukup menjalankan perintah ini di terminal

php artisan key:generate

Langkah selanjutnya adalah melakukan migrate & seed dengan menjalankan perintah berikut ini

php artisan migrate --seed

Setelah semua sudah berhasil, langkah selanjutnya jalankan local server dengan perintah

php artisan serve
Done. Selamat mencoba 😁👏
