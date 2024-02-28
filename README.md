# Email-Marketing-Software

Pada project ini saya akan melakukan penerapan dari yang saya pelajari pada buku "Domain Driven Design with Laravel", Martin Joo

> `referensi`: [Buku DDD with Laravel](https://domain-driven-design-laravel.com/) <br> `note`: [Catatan materi](/catatan/01%20-%20Konsep%20Dasar:%20Domain-Driven%20Design.md)

## Overview

Pada intinya, aplikasi pemasaran email adalah perangkat lunak yang menyimpan pelanggan Anda, dan Anda dapat mengirim email kepada mereka. Namun ia juga dilengkapi dengan serangkaian fitur yang lebih kompleks, seperti:

-   Mengelola subscribers.
-   Menandai mereka. Tag berguna untuk memfilter subscribers saat ingin mengirim email.
-   Mengirim email siaran (atau satu kali). Anda menulis konten, mengatur filter, dan menekan tombol Kirim. Membuat urutan. Urutan adalah kumpulan email yang dikirimkan ke subscribers setelah penundaan tertentu. Misalnya, Anda menulis empat email, dan Anda ingin mengirim email tersebut dalam empat minggu. Anda dapat membuat urutan yang melakukan hal itu secara otomatis. Dan hal hebat tentang sequence adalah mereka juga menangani subscribers baru. Jadi jika Anda membuat rangkaian ini pada bulan Februari dan seseorang berlangganan pada bulan Mei, mereka akan tetap ditambahkan ke dalamnya dan mendapatkan satu email per minggu.
-   Menambahkan subscribers ke urutan berdasarkan kriteria tertentu. Kami juga dapat membuat filter yang berbeda. Misalnya, kami ingin mengecualikan subscribers yang membeli produk tertentu atau memiliki tag tertentu.
-   Membuat formulir berlangganan di mana orang dapat memasukkan alamat email mereka. Anda dapat membuat formulir HTML dengan masukan email yang dapat disematkan ke situs Anda. Jika seseorang mengirimkan formulir ini, mereka akan ditambahkan ke daftar email Anda.
-   Email pelacakan terbuka, dan tautan diklik.
-   Menghasilkan laporan dari metrik ini.

## Tech Stack

-   Laravel
