# Actions

Kita mungkin akan mengalami kekacauan besar jika membuat controller jadi gumpalan kode? Ya itu benar. Tapi coba kita lupakan tentang responsibilities sesaat. Membangun struktur kode secara teknis adalah tindakan yang buruk dalam aplikasi bisnis, itu sebabnya saya tidak suka repositori dan layanan digunakan bersama-sama.

Namun bagaimana jika kita menentukan tanggung jawab berdasarkan fitur, bukan hal teknis? Sekarang, kami memiliki class Action yang bersih dan dapat digunakan kembali. Dengan class Action tentu kita akan mendapat beberapa manfaat.

-   Single responsibility. Setiap Action hanya menangani satu hal, seperti membuat tugas.
-   Self-contained. Suatu Action dapat menyelesaikan tugas dari awal hingga akhir.
-   Nesting. Suatu Action dapat memanggil Action lainnya. Jika membuat todo adalah tugas yang rumit, mungkin ada baiknya untuk mengekstrak logic-nya.
-   Queueable. Bukan secara default, tetapi dengan bantuan paket laravel-queueable-action Spatie.
-   Ini yang paling penting: Action Anda menggambarkan kisah pengguna Anda. Jadi mereka mendekatkan kode Anda ke bahasa bisnis.

Dengan begitu jika ada anggota baru yang ingin bergabung, dia tidak perlu menggali lebih dalam pada controller, model, ataupun service. Itu bersih dan mudah,
