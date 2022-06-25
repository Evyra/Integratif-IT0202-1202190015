<h1>PEMROGRAMAN INTEGRATIF</h1>
<h2>EVYRA RIZKI SAFITRI - 1202190015</h2>

<h2>TAHAP 1</H2>
<h3>INSTALASI LARAVEL</H3>
1. Langkah pertama instalasi laravel adalah dengan memjalankan <b>command prompt</b> pada PC masing masing dengan tekan <b>windows+R</b>. Lalu akan muncul tampilan seperti berikut. Ketikkan <b>cmd</b> lalu tekan <b>enter</b> untuk menjalankannya
  <img width="284" alt="1" src="https://user-images.githubusercontent.com/93085602/172755956-4e3e50a8-73e3-4230-83cc-9b9f399f1535.PNG">

2. Sebelum menginstall Laravel, pastikan sudah menginstal composer terlebih dahulu pada link berikut https://getcomposer.org/download/ Lalu unduh composer-setup.exe seperti pada gambar berikut. Lalu jalankan instalasi composer pada PC anda.
  <img width="956" alt="Screenshot (453)" src="https://user-images.githubusercontent.com/93085602/172756867-b2f1b98d-3a52-4829-a754-df9dab83f5ce.png">
  <img width="954" alt="Screenshot (452)" src="https://user-images.githubusercontent.com/93085602/172756877-ec1401af-d751-4963-84f9-7d24ebafb457.png">

3. Cek kembali pada Command Prompt apakah composer berhasil terinstall dengan baik.
  <img width="675" alt="0" src="https://user-images.githubusercontent.com/93085602/172757009-584c0010-fe31-4f59-90df-dbcfea9a5d07.PNG">

4. Tahap selanjutnya adalah masuk ke direktori <b>/xampp/htdocs</b> untuk melanjutkan instalasi Laravel.
  <img width="280" alt="2" src="https://user-images.githubusercontent.com/93085602/172757120-b0a2ff8d-1a2d-4a98-b46d-7e67d8c27448.PNG">

5. Membuat request untuk mengambil (serta menginstall) file Laravel pada folder <b>tubes_pi</b> untuk meletakkan file Laravel.
  <img width="470" alt="3" src="https://user-images.githubusercontent.com/93085602/172757233-3afacba5-bd5c-4c7a-817b-db10aab319a8.PNG">

6. Setelah itu masuklah ke direktori tubes_pi lalu jalankan code seperti pada gambar, untuk mengetahui IP laravel yang sudah terinstall
  <img width="495" alt="5" src="https://user-images.githubusercontent.com/93085602/172757620-f11d7f97-500b-4787-a0ac-01c04556d6f2.PNG">

7. Buka IP tersebut dan akan secara otomatis masuk ke laman LARAVEL
![Screenshot (454)](https://user-images.githubusercontent.com/93085602/172757779-4a9c8f33-8712-4757-8a5f-2f96c7a834df.png)

<h3>SELESAI</h3>

<h2>TAHAP 2</H2>
1. Jalankan apache dan mysql pada XAMPP 
  <img width="503" alt="1" src="https://user-images.githubusercontent.com/93085602/175757437-6d0d9090-721f-4dbf-8107-9f3747845dd1.PNG">

2. Membuat database baru pada phpmyadmin
  <img width="373" alt="2" src="https://user-images.githubusercontent.com/93085602/175757551-9c41d237-b7e1-4b34-91bb-62efebed9b9a.PNG">

3. Mengubah DB_DATABASE PADA <b>.env</b> sesuai dengan settingan anda
  <img width="960" alt="1 1" src="https://user-images.githubusercontent.com/93085602/175757581-a2722edb-9cd0-4999-a2f4-cf9f5a3302f7.PNG">

4. Membuat file RssController.php dan NewsController.php 
<br>`php artisan make:controller RssController`
<br>`php artisan make:controller NewsController`

5. Menjalankan migration dan seeding
<br>`php artisan migrate:fresh  
<br>`php artisan migrate:seed` 
  <img width="396" alt="3" src="https://user-images.githubusercontent.com/93085602/175757767-42d924fc-7238-449e-a251-c1b6f6c7faf4.PNG">
  <img width="276" alt="4" src="https://user-images.githubusercontent.com/93085602/175757768-80232c17-525f-484a-9707-8cb0b604a1d8.PNG">

6. Edit file NewsController.php
  <img width="960" alt="2 1" src="https://user-images.githubusercontent.com/93085602/175757790-32b77b41-ab4d-4f3f-9e83-c087eb1d5c59.PNG">

7. Menambahkan Route pada web.php
  <img width="960" alt="2 3" src="https://user-images.githubusercontent.com/93085602/175757810-3263ab14-b01d-4691-8d95-9d55461c7a46.PNG">

8. Tambahkan link RSS yang akan dipakai. Link yang saya pakai disini adalah Korean Times, CNN, & KBS
  <img width="960" alt="2 2" src="https://user-images.githubusercontent.com/93085602/175757852-051cd50b-c25f-4e40-934a-024a6e7d7c75.PNG">

9. Cek pada phpmyadmin untuk melihat apakah link RSS sudah tersimpan pada database
  <img width="960" alt="1 2" src="https://user-images.githubusercontent.com/93085602/175757903-ce873d4d-7642-4a80-a1a2-392a8ede4d05.PNG">

10. Jalankan perintah berikut, sebelum membuka IP RSS yang telah kita buat
<br>`php artisan migrate:fresh`
<br>`php artisan migrate:seed`
<br>`php artisan serve`

11. Lalu bukalah IP nya
  <img width="960" alt="6" src="https://user-images.githubusercontent.com/93085602/175757938-3c70dddd-f16f-4e1c-9925-bf02a17a4c1c.PNG">
  
  <img width="960" alt="7" src="https://user-images.githubusercontent.com/93085602/175757943-7ae9ae4b-5be7-4658-8789-de8ad328bcac.PNG">

  <img width="960" alt="8" src="https://user-images.githubusercontent.com/93085602/175757946-14323f9c-0409-46ab-b6f9-06fab90c1d14.PNG">

<h3>SELESAI</h3>

