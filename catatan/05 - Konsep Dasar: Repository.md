# Repository

Setelah belajar mengenai data kita dapat beralih ke basis data. Mungkin anda pernah mempertanyakannya, dimana sebaiknya anda manaruh query? Karena pada cara lain anda dapat meletakan query di dalam repository, itu terlihat seperti konsep yang baik, tapi apakah terdapat masalah di dalamnya?

-   Biasanya setiap model memiliki repository, pada dasarnya ini hanyalah proses pemindahan query dari model ke repository. Setelah beberapa bulan repository mungkin bisa mencapai ribuan baris, dan ini tidak ada bedanya dengan menggunakan model.
-   Setiap kali anda ingin melakukan akses atau query ke basis data anda harus melalui repository, bahkan query yang besifat single-use sekalipun. Karena itulah resikonya menggunakan repositry, anda bisa membuat banyak query dalam repo yang bahkan hanya digunakan sekali dalam seluruh aplikasi.
-   Tapi jika anda mecoba memindahkan query tersebut keluar repository, itu hanya akan menimbulkan unconsistent dalam struktur, itu bukan solusi yang optimal.

Salah satu solusi yang bisa mungkin anda tidak harus membuat repository untuk setiap model yang ada, bayangkan anda bekerja untuk perusahaan besar yang memiliki 200 lebih model, anda mungkin bisa memangkas seluruh repository yang mungkin akan anda buat dan membuat IssueTrackerRepository.

Jika anda sudah familiar dengan DDD kemungkinan anda pernah mendengar hal ini: _`Pola repositori mengabstraksi penyimpanan data dan memungkinkan Anda mengganti database Anda tanpa mengubah kode bisnis Anda`_ Itu benar, Namun dalam banyak sekali kasus tidak pernah disuruh untuk mengubah Database ataupun mengubah Bahasa Programman dalam project. Bukan berarti repository tidak membantu dalam banyak situasi, tapi faktanya Laravel memiliki solusi yang lebih baik dengan Costume Query Builder.

[<-- Konsep Dasar: Repository](./04%20-%20Konsep%20Dasar:%20Data%20Transfer%20Object.md)

[--> Konsep Dasar: Service](./06%20-%20Konsep%20Dasar:%20Services.md)
