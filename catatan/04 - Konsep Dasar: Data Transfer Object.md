# DTOs (Data Transfer Objects)

Data Transfer Objects juga berupakan konsep sederhana yang sangat penting. Secara simpel ini adalah konsep pembuatan class untuk menahan suatu data, saat data sedang ditransfer antar komponent.

Mengungkit pembahasan pada [Bekerja dengan Data](./02%20-%20Bekerja%20dengan%20Data.md), Saya tidak ingin melakukan pemeliharaan dan debug secara besar besaran pada array assocative. DTO dapat menyelesaikan masalah ini dengan mengatur berbagai data yang tidak terstruktur milik anda.

Saya berharap anda memikirkan hal yang sama, membuat class baru hanya akan menambah masalah baru. Maksudnya, dalam setiap alokasi data antar komponent kita sudah banyak mendapati class yang kita perhitungkan seperti class Request, class Resource, dan menambah class Data hanya akan menambah prioritas lain, itu buruk. Itu sebabnya kita membutuhkan solusi yang elegan.

Kita dapat menggunakan [laravel-data](https://spatie.be/docs/laravel-data/v4/introduction) dari Spatie. Dengan ini request dan resource dapat dibundle dalam satu tempat sebagai DTOs.

Sampai sini mungkin anda bertanya, apa bedanya VO (Value Object) dengan DTOs (Data Transfer Objects).

-   DTOs memiliki ID karena DTOs adalah representasi dari model
-   VO tidak memiliki ID, dia merepresentasikan value bukan entitas.

Dari perbedaan ini kita dapat menggabungkan kedua pendekatan ini menajadi hal yang mungkin lebih baik dalam penerapan di project aplikasi anda.

[<-- Konsep Dasar: Value Object](./03%20-%20Konsep%20Dasar:%20Value%20Object.md)

[--> Konsep Dasar: Repository](./05%20-%20Konsep%20Dasar:%20Repository.md)
