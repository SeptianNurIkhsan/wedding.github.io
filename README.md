
<div align="center">
	
<h1>Software Requirements Specification </h1>
<h1>for</h1>
<h1>Website Undangan Digital</h1>
<h2>Version 1.0 approved</h2>
<h2>Prepared by</h2>
<p>22091397047 – Ridhwan Fachrul Arief</p>
<p>22091397048 – Fauzan Hedar Abit</p>
<p>22091397049 – Septian Nur Ikhsan<p>
</div>
 
<br>
<hr>

<h2>Table of Contents</h2>

[Bab 1. Pendahuluan](#Bab-1-Pendahuluan)

- [1.1 Tujuan Penulisan Dokumen](#11-Tujuan-Penulisan-Dokumen)
- [1.2 Audien yang Dituju dan Pembaca yang Disarankan](#12-Audien-yang-Dituju-dan-Pembaca-yang-Disarankan)
- [1.3 Batasan Produk](#13-Batasan-Produk)
- [1.4 Definisi dan Istilah](#14-Definisi-dan-Istilah)
- [1.5 Referensi](#15-Referensi)

[Bab 2. Deskripsi Keseluruhan](#Bab-2Deskripsi-Keseluruhan)

- [2.1 Deskripsi Produk	2](#21-Deskripsi-Produk)
- [2.2	Fungsi Produk	2<](#22-Fungsi-Produk)
- [2.3	Penggolongan Karakteristik Pengguna	2](#23-Penggolongan-Karakteristik-Pengguna)
- [2.4	Lingkungan Operasi	2](#14-Definisi-dan-Istilah)
- [2.5	Batasan Desain dan Implementasi	2](#15-Referensi)
- [2.6	Dokumentasi Pengguna	3](#15-Referensi)
  
[Bab 3. Kebutuhan Antarmuka Eksternal](#Bab-1-Pendahuluan)

- [3.1	User Interfaces	4](#11-Tujuan-Penulisan-Dokumen)
- [1.2 Audien yang Dituju dan Pembaca yang Disarankan](#12-Audien-yang-Dituju-dan-Pembaca-yang-Disarankan)
- [3.2	Hardware Interface	4](#13-Batasan-Produk)
- [3.3	Software Interface	4](#14-Definisi-dan-Istilah)
- [3.4	Communication Interface	4](#15-Referensi)

[Bab 4. Functional Requirement	5](#Bab-1-Pendahuluan)

- [4.1	Use Case Diagram	5](#11-Tujuan-Penulisan-Dokumen)
- [4.2	Nama Use Case 1	5](#12-Audien-yang-Dituju-dan-Pembaca-yang-Disarankan)
- [4.3	Nama Use Case 2	5](#13-Batasan-Produk)
- [4.4	Flowchart Diagram	6](#14-Definisi-dan-Istilah)

[Bab 5. Non Functional Requirements](#Bab-1-Pendahuluan)
[Bab 6. Penjelasan codingan HTML,CSS dan JavaScript](#Bab-1-Pendahuluan)
- [6.1	HTML](#11-Tujuan-Penulisan-Dokumen)
- [6.2	CSS](#12-Audien-yang-Dituju-dan-Pembaca-yang-Disarankan)
- [6.3	JavaScript](#13-Batasan-Produk)

<hr>
<div align="center">
	
 # Bab 1. Pendahuluan
 </div>
 
## 1.1 Tujuan Penulisan Dokumen
Dokumen ini menjelaskan tentang spesifikasi persyaratan perangkat lunak untuk website
undangan digital. Dokumen ini ditujukan untuk pengguna dan pengembang. Pengguna dan pembaca diasumsikan memiliki pengetahuan tentang dasar-dasar website. Pemahaman HTML (Hypertext Markup Language) dan Flowchart diagram juga diperlukan bagi pengguna. Dokumen ini diharapkan dapat menjadi langkah awal untuk mendesain website.



## 1.2 Audien yang Dituju dan Pembaca yang Disarankan
Dokumen ini ditujukan untuk semua kalangan . Audien yang akan dituju dalam konteks platform website ini adalah Masyarakat yang berniat untuk membuat undangan pernikahan menggunakan produk usahanya berupa produk buatan asli mahasiswa Universitas Negeri Surabaya.

## 1.3 Batasan Produk
Platform website undangan digital adalah situs web yang dirancang khusus untuk memudahkan masyarakat untuk mendistribusi undangan sehingga undangan tersebut dapat menyebar dengan cepat
- Tujuan dari platform ini adalah:
  - Ramah Lingkungan: Mengurangi penggunaan kertas untuk undangan fisik membantu mengurangi dampak negatif terhadap lingkungan.
  - Hemat Biaya: Undangan digital umumnya lebih ekonomis daripada mencetak undangan fisik, terutama jika Anda memiliki daftar tamu yang besar. Anda dapat mengalokasikan anggaran yang lebih besar untuk aspek-	 
                  aspek lain dalam pernikahan Anda.
  - Kemudahan Distribusi:Undangan digital dapat dengan mudah dikirimkan melalui email, pesan teks, atau media sosial. Anda juga dapat dengan cepat mengirim perubahan terbaru jika ada perubahan rencana terkait pernikahan Anda.
  - Interaktif dan Kreatif: Undangan digital memungkinkan Anda untuk menambahkan elemen-elemen interaktif seperti video, galeri foto, dan tautan langsung ke peta atau situs web pernikahan Anda. Ini memberikan fleksibilitas lebih besar untuk mengekspresikan diri dan mengkomunikasikan informasi penting.
  - Mudah Dikelola: Anda dapat dengan mudah melacak konfirmasi kehadiran, mengumpulkan RSVP, dan memantau tanggapan tamu melalui platform undangan digital.


## 1.4 Definisi dan Istilah

- SRS	:	Software Requirements Specification, atau 
	   Spesifikasi Kebutuhan Perangkat Lunak (SKPL)

- IEEE	:	Institute of Electrical and Electronics Engineering
		Standar internasional untuk pengembangan dan perancangan produk.

- Platform	:	Sebuah wadah digital yang banyak dipakai manusia untuk berbagai macam keperluan.

- Website	:	Kumpulan halaman web yang saling terhubung dan dapat diakses melalui internet.

## 1.5 Referensi
<div align="center">
	
# Bab 2.Deskripsi Keseluruhan
</div>

## 2.1 Deskripsi Produk 
Platform website undangan digital  adalah situs website yang dirancang  untuk memungkinkan mahasiswa dapat menjual produk mereka. Platform website ini memfasilitasi transaksi jual beli antar mahasiswa khususnya mahasiswa Universitas Negeri Surabaya. Mahasiswa yang ingin menjual produk mereka dapat menambahkan produk mereka ke dalam pemilihan menu jual produk, mahasiswa dapat menambahkan nama produk,foto serta menetapkan harga untuk dijual. Sebaliknya mahasiswa yang ingin membeli produk maka mahasiswa tersebut dapat memilih menu beli untuk melihat berbagai macam produk yang dijual oleh sesama mahasiswa Universitas Negeri Surabaya. 


## 2.2 Fungsi Produk 
Fungsi utama produk adalah memberikan fasilitas dan kemudahan bagi masyarakat.Dapat menyebar luas serta hemat biaya merupakan manfaat website ini.Website ini harus memberikan tampilan yang menarik sehingga pembaca tertarik untuk membukanya.Admin juga dapat memasukkan video atau foto sehingga pembaca dapat mengenali sang pengundang. 

## 2.3 Penggolongan Karakteristik Pengguna
Tabel 1 Karakteristik Pengguna
| Kategori Pengguna | Tugas | Hak Akses ke aplikasi |Kemampuan yang harus dimiliki |
| -------- | -------- | -------- | -------- |
| Tamu Undangan, | Melihat Undangan| Melihat lihat gambar|Tamu yang telah diundang oleh pembuat acara  | 
|  | Melihat peta | Memutar/Mematikan musi| mengisi data | 
|  | Melakukan konfirmasi kehadiran | Memutar/Mematikan Video|  |
| Pembuat Acara | Memilih tempat pernikahan | Melihat lihat gambar|Mengisi data  | 
|  |  Mengisi data tempat | Melihat konfirmasi kehadiran|  |
| Admin |membuat website |Memberikan akses kepada pembuat acara untuk menyimpan data kehadiran |Menyediakan kebutuhan fungsional|
|  |memasukkan data yang diminta oleh pembuat acara |menyimpan gambar dan merubah image |menyediakan fasilitas|


## 2.4 Lingkungan Operasi 
Website undangan pernikahan ini dapat diakses melalui berbagai sistem operasi di bawah ini.


| Spesifikasi |Jenis| 
| -------- | -------- | 
| Sistem Operasi | minimal Microsoft Windows 10, Mac OS catalina, Android 5.0 ke atas, IOS 11 ke atas| 
|  | Menggunakan browser 9.0 atau chrome dengan versi 4.0| 
| Jaringan | Terhubung dengan jaringan internet| 
| Perangkat Keras | Laptop, Smartphone| 
| API | Google Maps API| 


## 2.5 Batasan Desain dan Implementasi 
Website undangan pernikahan ini tidak bergantung pada komponen perangkat lunak lain yang perlu diinstal oleh pengguna. Namun, beberapa komponen berikut akan digunakan dalam pengembangan dan manajemen website
Bahasa Pemrograman: Website ini dikembangkan menggunakan bahasa pemrograman seperti HTML dan CSS.
Browser Web: Aplikasi ini bisa diakses melalui berbagai browser web populer seperti Google Chrome, Mozilla Firefox, Apple Safari, dan Microsoft Edge.

## 2.6 Dokumentasi Pengguna
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%201.png)
Pada tampilan awal ini terdiri nama mempelai,navbar dan juga tentang kami.Pada tampilan Navbar berisi tentang Foto kedua mempelai,Ungkapan,Maps,Galeri,Cerita kami dan juga terdapat fitur untuk memastikan musik.Pada tampilan ini anda harus menekan tombol lihat undangan jika ingin kehalaman utama.Setelah anda menekan tombol "Lihat Undangan" maka anda dapat menggeser cursor kehalaman bawah untuk melihat isi lebih lanjut.  
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%202.png)
Pada tampilan ini terdapat ayat suci alqur an beserta artinya yang bercerita tentang pernikahan
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%203.png)
Pada tampilan ini berisi gambar dan Biodata tentang kedua mempelai 
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%204.png)
Pada tampilan ini berisi terdapat satu tombol "cerita kami" yang berisi awal pertemuan mereka
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%205.png)
Setelah anda menekan tombol "Cerita Kami" anda akan menuju pada page ini yang berisi Ungkapan Perasaan,awal pertemuan dan Momen bahagia.
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%206.png)
Pada tampilan ini berisi galeri.Para tamu undangan dapat melihat gambar gambar yang berisikan kedua mempelai
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%207.png)
Tampilan ini akan menampilakn sebuah maps tempat acara .terdapat tanggal dan juga tempat acara berlangsung. 
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%208.png)
Pada tampilan iniberisikan tentang video kedua mempelai prewedding
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%209.png)
Pada tampilan ini berisi tentang Moment yang berbahagia
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%2010.png)
Pada tampilan ini berisi tentang konfirmasi kehadiran.terdapat tombol Konfirmasi kehadiran yang harus diisi oleh para tamu undangan
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%2011.png)
Pada tampilan ini anda diminta untuk memasukkan nama dan juga keterangan hadir atau tidak.Setelah anda mengonfirmasi kehadiran anda.anda dapat mengirimkannya dengan cara mengklik tombol berwarna biru.
![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/web%2012.png)
Pada tampilan ini berisi tentang ucapan dan doa dari para tamu undangan .Anda bisa menulis nama,Alamat dan ucapan yang anda inginkan pada kolom yang tersedia.

<div align="center">
	
# Bab 3.Kebutuhan Antarmuka Eksternal

</div>

## 3.1 User Interfaces 
1. Tombol "Lihat Undangan" harus berada pada halaman awal website.
2. Halaman baru bisa discroll ketika pengguna sudah menekan tombol "Lihat Undangan".
3. Terdapat foto dan video dari mempelai sehingga pengguna dapat melihatnya.
4. Website memberikan denah lokasi agar mempermudah pengguna yang akan hadir.
5. RSVP atau konfirmasi kehadiran akan memberitahu pihak penyelenggara terkait siapa saja yang hadir.
6. Penggunaan warna yang nyaman untuk mata dan disesuaikan dengan tema pernikahan.
7. Navbar atau navigasi harus tersedia dan sesuai dengan kebutuhan.
8. Semua tombol harus memberikan umpan balik ke pengguna setiap ditekan.
9. Terdapat bagian "Tentang kami" yang memberikan informasi kepada pengguna tentang siapa saja yang terlibat dalam pembuatan website.

## 3.2 Hardware Interface
Pembuatan website dikhususkan kepada seluruh tamu undangan . Untuk menjangkau website ini tidak dibutuhkan spesifikasi yg tinggi dikarenakan pada umumnya penerima yang akan menerima surat undangan ini  sudah memiliki perangkat dengan hardware yang lebih dari cukup untuk menjangkau atau membuka website ini.

## 3.3 Software Interface
Antarmuka  perangkat lunak dari undangan pernikahan digital berisi kan kedua nama mempelai,tanggal pernikahan dan juga tombol "lihat Undangan" untuk masuk kedalam halaman utama.Pada halaman utama sendiri terdapat nama mempelai,foto kedua mempelai,tanggal pernikahan,tempat pernikahan,galeri,video prewedding,cerita yang mempertemukan mereka,konfirmasi kehadiran ,ucapan dan doa.Semuanya ditampilkan dengan menarik agar para tamu undangan tertarik untuk datang pada acara pernikahan tersebut.Antarmuka perangkat lunak ini berfungsi sebagai cover dari halaman utama.

## 3.4 Communication Interface
1. Website harus berintegrasi dengan Google Sheets untuk menyimpan data kehadiran.
2. Website harus mendukung API Google Maps agar mendukung denah lokasi.
3. Website berkomunikasi menggunakan protokol HTTPS dari layanan GitHub.

<div align="center">
	
# Bab.4 Functional Requirement
</div>

1. Pengguna harus dapat membuka undangan.
2. Semua tombol harus dapat berfungsi dan menampilkan yang ingin dilihat pengguna.
3. Website harus mampu menerima dan menyimpan jawaban pengguna.
4. Notifikasi harus ditampilkan setelah pengguna mengisi jawaban.
5. Backsound harus aktif ketika pengguna sudah membuka undangan.


## 4.1 Use Case 

![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/USE%20CASE.jpg)
<p>Deskripsi Use Case<p>
Dalam Use case diagram diatas menjelaskan 
-User : Dapat membuka link, melihat undangan, melihat jadwal acara, melihat maps, melihat galeri, memutar video, konfirmasi kehadiran.

-Admin : Mengunggah jadwal, Mengunggah Maps, Melihat status konfirmasi kehadiran.

## 4.2 ERD
(![alt text](https://github.com/SeptianNurIkhsan/wedding.github.io/blob/main/flowchart.jpg)

Untuk penjelasan pada flowchart yang akan dilakukan adalah pertama tama pastinya terdapat start kemudian anda akan diminta untuk menekan link yang akan mengarahkan kepada website kami. Di Dalam website ini terdapat cover dan juga link untuk melihat undangan .jika anda ingin melihat undangan maka anda bisa menekan link “lihat undangan”kemudian anda akan diarahkan ke undangan yang berisi nama alamat acara tersebut serta tanggal acara.setelah anda melihat denah acara anda dapat melihat galeri galeri acara tersebut.kemudian anda bisa konfirmasi kehadiran anda melalui website tersebut.Selesai.

<div align="center">
	
# Bab 5.Non Functional Requirements
</div>
 
Non-functional requirements (NFRs) dalam konteks website undangan pernikahan merujuk pada persyaratan yang tidak terkait langsung dengan fungsi utama atau perilaku perangkat lunak, tetapi memengaruhi kualitas, kinerja, dan pengalaman pengguna dari website tersebut

| ID | Parameter | Kebutuhan |
| -------- | -------- | -------- |
| 1 | Kinerja | Website harus merespons dengan cepat dan memuat halaman dalam waktu yang wajar,termasuk konten dan gambar.Website harus mampu menanganilalu lintas yang meningkat saat tamu undangan mengakses atau merespons undangan. | 
| 2 | Keamanan |  Website harus mematuhi standar privasi data dan melindungi informasi pribadi tamu undangan.| 
| 3 | Ketersediaan|  Website harus tersedia sepanjang waktu dengan sedikit atau tanpa waktu jeda. Ini penting agar tamu undangan dapat mengakses informasi pernikahan kapan pun mereka mau.| 
| 4 | Kompatibilitas dan Responsif |  Website harus berfungsi dengan baik di berbagai jenis peramban web yang berbeda, seperti Chrome, Firefox, Safari, dan Internet Explorer.|
| 5 | Desain Estetika | Website harus dirancang dengan baik dan memiliki estetika yang sesuai dengan tema pernikahan untuk memberikan pengalaman yang menarik bagi pengguna..|
| 6 | Ketepatan Waktu:a | Informasi yang ditampilkan di website, seperti tanggal dan lokasi pernikahan, harus selalu tepat dan mutakhir.|

<div align="center">
	
# Bab 6.Penjelasan HTML,CSS dan Java Script
</div>

## 6.1 HTML

<H3>Index.Html</H3>

1. Pertama tama  adalah mendeklarasikan &lt;!DOCTYPE html &gt; . &lt;!DOCTYPE html &gt; Ini memberi tahu peramban web tentang jenis dokumen yang akan di-render dan versi HTML yang digunakan dalam halaman tersebut.
2. Kemudian memasukkan &lt;html lang="en"&gt;.&lt;html lang="en"&gt; adalah tag HTML yang digunakan untuk menentukan bahasa yang digunakan dalam dokumen HTML. Dalam kasus ini, "en" mengacu pada bahasa Inggris (English).
3. Lalu, &lt;head&gt; adalah elemen dalam dokumen HTML yang berada di bagian atas dokumen dan berisi informasi meta-informasi dan elemen-elemen lain yang mendefinisikan berbagai aspek dari halaman web
4. &lt;meta charset="UTF-8"&gt; adalah elemen HTML yang digunakan untuk mendefinisikan karakter encoding (pengodean karakter) yang digunakan dalam halaman web. Karakter encoding adalah cara bagaimana karakter, huruf, simbol, dan tanda
5. &lt;meta name="viewport" content="width=device-width" ,initial-scale="1"&gt; ini digunakan untuk mengatur viewport (tampilan) halaman web di perangkat seluler
6. Kemudian,&lt;link rel="stylesheet" href="style.css"&gt;digunakan untuk menghubungkan atau merujuk ke berkas stylesheet (CSS) eksternal yang akan digunakan untuk mengatur tampilan dan gaya halaman web
7. &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /&gt; ni digunakan untuk menghubungkan berkas stylesheet CSS untuk mengatur penggunaan berkas ikon font awesome
8. &lt;link rel="preconnect" href="https://fonts.googleapis.com&gt; ini digunakan untuk memberi tahu browser untuk melakukan persiapan koneksi untuk ,emgambil font dari layanan google
9. Lalu kita memasukkan &lt;body&gt; sebagai tempat inti dalam dokumen HTML . elemen &lt;body&gt; berisi semua konten yang akan ditampilkan dalam halaman web, termasuk teks, gambar, tautan, video, dan elemen-elemen lainnya.
10. Lalu memasukkan &lt;nav id="navbarleft"&gt;  digunakan untuk membuat navigasi dalam halaman web. dengan nilai "navbarleft" yang dapat digunkan untuk engidentifikasi dan merujuk elemen ini melalui css dan javascript.
11. &lt;ul&gt; digunakan untuk membuat daftar dengan tanda bulet (bulleted list) atau yang sering disebut sebagai "unordered list."
12. &lt;ul&gt; digunakan untuk mengelompokkan beberapa item atau elemen-elemen yang tidak memiliki urutan
13. &lt;a href="#akad"&gt;&lt;i class="fa-regular fa-envelope"&gt;&lt;/i>&lt;/a&gt; kemudian kita memasukan elemen anchor untuk membuat link menuju section akad dengan memasukkan ikon "fa-regular fa-envelope" begitu juga jika kita ingin menuju section atau halaman yang kita inginkan maka kita dapat merubah "#akad" menjadi section yang kita inginkan
14.  &lt;li onclick="musik()"&gt; adalah element list yang memiliki atribut "onclick"  Ini menunjukkan bahwa saat elemen tersebut diklik (onclick), sebuah fungsi JavaScript yang disebut "musik()"
15. &lt;nav id="toggle"&gt; memasukkan navigasi dengan nama "toggle" sebagai identifikasi untuk merubah tampilan pada css
16. &lt;section id="akad"&gt; &lt;div class="akadnikah"&gt; Kemudian memasukkan elemen "section" dengan nama akad yang didalamnya terdapat elemen "div" yang memiliki atribut class dengan nama akadnikah.
17. didalam &lt;div class="akadnikah"&gt; terdapat   &lt;h1&gt;Kaesang & Erina&lt;/h1&gt; sebagai isi kemudian,&lt;a class="lihat" href="#home" onclick="enableScroll()&gt;"Lihat Undangan" terdapat elemen "anchor" untuk membuat link dengan atribut "class"dengan nama  "lihat undangan".onclick="enableScroll()": Ini adalah atribut onclick, yang digunakan untuk menentukan kode JavaScript yang akan dijalankan
18. &lt;section  style="display:none;"&gt; kemudian memasukkan element "section" yang memiliki atribut "style" yang diatur "display:none" ini bertujuan untuk menyembunyikan atau tidak menampilkan elemen tersebut pada halaman web.
19. &lt;audio id="musik" controls autoplay&gt; Memasukkan elemen audio dengan atribut "id" kemudian memanggil file mp3 yang sudah kita satukan dalam file yang sama.
20. &lt;source src="beautiful.mp3" type="audio/mpeg"&gt; memasukkan elemen "source" dengan atribut src untuk memanggil file audio yang sudah kita siapkan . Kemudian memasukkan atribut "type" dengan jenis"audio/mpeg"
21. &lt;section id="ungkapan"&gt; kemudian memasukkan elemen "section" dengan atribut "id" dengan nilai "Ungkapan"
22. &lt;p&gt;Dan diantara tanda-tanda &lt;b&gt;(Kebesaran)&lt;/b&gt;- Nya&lt;/p&gt; elemen "p" digunakan untuk menulis paragraf kemudian elemen"b" untuk merubah teks menjadi bold"
23. &lt;section id="mempelai"&gt; adalah elemen "section" dengan atribut "id" dengan nilai"mempelai" yang berisi semua tentang mepelai pria dan wanita.
24. &lt;span&gt; digunakan untuk mengelompokkan atau memformat bagian teks atau konten dalam dokumen HTML
25. &lt;section id="cerita"&gt;adalah elemen "section" dengan atribut "id" dengan nilai"Cerita"
26. &lt;a class="button" href="Cerita.html"g &gt; Cerita kami &lt;/a &gt;
 &lt;H3 &gt;Index.Kehadiran</H3 &gt; menggunakan elemen "anchor" yang digunakan untuk membuat link yang mengarah kepada "cerita.html"
27.   &gt;img class="active" src="foto-prewed-1.jpg" alt="1"&gt; digunakan untuk menampilkan gambar. kemudian memiliki atribut"class" dengan nilai "active" kemudian atribut"src" digunakan untuk  menentukan sumber gambar yang akan ditampilkan oleh elemen gambar.
28.  &gt;img onmouseover="galeri(1)" src="foto-prewed-1.jpg" alt="1"&gt; "img" Ini merupakan elemen image  dalam HTML yang digunakan untuk menampilkan gambar . Kemudian atribut "onmouseover" digunakan untuk membuat gambar yang disentuh oleh kursor mengalami pergerakan.
29.  &lt;section id="agenda"&gt elemen "section" dengan atribut id dengan nilai agenda sebagai pembungkus terluar dari elemen elemen yang ada didalamnya
30.  &lt;div class="desc"&gt; adalah elemen yang terdapat didalam elemen "section agenda" yang berisi jadwal dan juga tempat acara
31.    &lt;iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.071323981621!2d110.39959227461209!3d-7.782262677216929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c29f13d139%3A0x38cd9f2273ec106e!2sPendopo%20Agung%20Royal%20Ambarrukmo!5e0!3m2!1sid!2sid!4v1696898494664!5m2!1sid!2sid"  width="500"  height="200"  style="border: 0;"  allowfullscreen=""  loading="lazy" 
referrerpolicy="no-referrer-when-downgrade"> &lt;/iframe&gt; "Iframe" digunakan untuk 
menampilkan halaman web atau konten lain di dalam halaman web saat ini. Didalam kasus ini menampilkan goggle maps dengan tinggi 200 pixel dan lebar 500pixel. kemudian menghilangkan border "i frame" "loading=lazy" berarti elemen ini hanya akan dimuat saat tampilan pengguna mendekati elemen tersebut, membantu menghemat waktu dan sumber daya jika elemen ini berada di luar jangkauan tampilan awal.
32.   &lt;section id="video"&gt; membuat elemen "section" dengan nilai "video" yang didalamnya terdapat &lt;video width="900" height="600" controls &gt; &lt;ssource src="Video.mp4" type="video/mp4" /&gt;.Menampilkan file"Video.mp4" dengan tinggi 600 dan lebar 900.
33. &lt;section id="momen"&gt; membuat section momen yang berisi kata kata tentang momen yang berbahagia
34. &lt;section id="kehadiran"&gt; berisikan section yang memiliki nilai "kehadiran"
35. &lt;a class="button" href="kehadiran.html"&gt;<i class="fa-solid fa-list-check" style="color: #f5f5f5"&gt;&lt;/i&gt; Konfirmasi Kehadiran&lt;/a&gt; kemudian membuat link agar terhubung dengan"kehadiran.html" dengan menekan icon yang berwarna putih.
36. &lt;form action="Contoh 1.html"&gt; merupkan elemen yang memiliki atribut "action yang mengarahkan formulir  ke halaman "contoh 1.html".
37. &lt;input placeholder="Nama Lengkap" type="text" /&gt;  memasukkan elemen input yang berfungsi untuk memasukkan text."Placeholder" merupakan atribut yang berfungsi menampilkan text Nama lengkap dalam kotak input ."type=text" berfungsi untuk menentukan jenit input yang akan diterima dalam elemen input.
38.  &lt;script&gt; adalah elemen yang menunjukkan bahwa elemen nya adalah java script
39.  &lt;const rootElement = document.querySelector(":root");&gt; kemudian memilih elemen dengan sebutan "root" sehingga kita dapat mengakses dan memanipulasi properti css yang didefinisikan dengan elemen root.
40.  function disableScroll() membuat fungsi "disableScroll" yang berfungsi mematikam "scrolling halaman .didalam fingsi ini terdapat { &lt;const scrollTop = window.pageYOffset || document.documentElement.scrollTop; &gt; baris ini bertujuan untuk mendapatkan posisi guliran vertikal (scroll top) saat ini. Ini mencoba mengambil nilai dari "window.pageYOffset"
      &lt;  const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;&gt;Baris ini bertujuan untuk mendapatkan posisi guliran horizontal (scroll left) saat ini. Ini mengikuti pola yang sama dengan baris sebelumnya, mencoba mengambil nilai dari window.pageXOffset dan jika tidak tersedia, maka akan mencoba mengambil document.documentElement.scrollLeft.
41.window.onscroll = function ()   kemudian memasukkan fungsi yang mengatur perilaku guliran.event handler ini mencoba mengatur posisi guliran kembali ke nilai scrollTop dan scrollLeft { window.scrollTo(scrollTop, scrollLeft);     }
         roolElement.style.scrollBehavior = 'auto'; Ini mencoba mengatur gaya CSS yang disebut scrollBehavior pada elemen dengan sebutan roolElement
42. function enableScroll () fungsi ini berfungsi untuk mengaktifkan kembali perilaku guliran pada web{
         window.onscroll = function () Baris ini mencoba menghapus fungsi yang sebelumnya telah ditugaskan ke window.onscroll{}
         roolElement.style.scrollBehavior = 'smooth';adalah baris kode JavaScript yang mengatur perilaku guliran halaman web dengan menggunakan CSS scrollBehavior. Ini mengubah perilaku standar guliran halaman web menjadi lebih halus dengan efek animasi.

43. &lt;script src="index.js"&gt; ini merupakan script yang menghubungkan page index.html dengan Index.js.


<h3>Kehadiran.html</h3>
<p>1. Mendeklarasikan &lt;!DOCTYPE html&gt;: menandakan bahwa dokumen adalah dokumen HTML.</p>
<p>2. &lt;html lang="en"&gt;: Menandakan bahwa bahasa dokumen adalah bahasa Inggris.</p>
<p>3. &lt;head&gt;: Bagian kepala dari dokumen HTML yang berisi informasi meta dan judul.
   a. &lt;meta charset="UTF-8"&gt;: Menentukan bahwa dokumen menggunakan karakter set UTF-8, yang mencakup hampir semua karakter dari semua skrip yang saat ini ditulis dan yang pernah ada.
   b. &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;: Menentukan bagaimana konten akan muncul pada perangkat berbasis web dan mobile.
   c. &lt;title&gt;Formulir Kehadiran&lt;/title&gt;: Menentukan judul halaman web.
   d. &lt;link rel="stylesheet" href="cerita.css"&gt;t: Menghubungkan halaman dengan file stylesheet "cerita.css" untuk mengatur tata letak dan gaya.</p>
<p>4. &lt;body&gt;: Bagian tubuh dokumen HTML yang berisi konten yang akan ditampilkan di halaman web.</p>
<p>5. &lt;div class="container"&gt;: Membuat div dengan kelas "container" untuk mengelompokkan elemen-elemen terkait bersama.</p>
<p>6. &lt;h2&gt;Formulir Kehadiran&lt;/h2&gt;: Menampilkan judul "Formulir Kehadiran" di halaman web.</p>
<p>7. &lt;form action="Konfirmasi Kehadiran.html" method="post"&gt;: Membuat formulir yang akan mengirimkan data ke halaman "Konfirmasi Kehadiran.html" menggunakan metode HTTP POST.
<p>8. &lt;div class="form-group"&gt;: Membuat div dengan kelas "form-group" untuk mengelompokkan elemen formulir bersama.
   a. &lt;label for="nama"&gt;Nama:&lt;/label&gt;: Label untuk input nama.
   b.&lt;input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required&gt;: Input teks yang memungkinkan pengguna memasukkan nama mereka, dengan atribut required yang menandakan bahwa bidang ini harus diisi sebelum formulir dikirim.</p>
<p>9. &lt;div class="form-group"&gt;: Membuat div dengan kelas "form-group" untuk mengelompokkan elemen formulir bersama.
   a. &lt;label&gt;Pilih Kehadiran:&lt;/label&gt;: Label untuk pilihan kehadiran.
   b. &lt;label class="radio-label"&gt;&lt;input type="radio" name="kehadiran" value="hadir"&gt;Hadir&lt;/label&gt;: Opsi pertama untuk memilih kehadiran, dengan nilai "hadir".
   c. &lt;label class="radio-label"&gt;&lt;input type="radio" name="kehadiran" value="tidak_hadir"&gt;Tidak Hadir&lt;/label&gt;: Opsi kedua untuk memilih ketidakhadiran, dengan nilai "tidak_hadir".</p>
<p>10. &lt;button&gt; Kirim Sekarang &lt;/button&gt;: Tombol untuk mengirim formulir.</p>

<h3>Konfirmasi Kehadiran.html</h3>

<p>1. &lt;!DOCTYPE html&gt;: Menandakan bahwa dokumen adalah dokumen HTML.</p>
<p>2. &lt;html lang="en"&gt;: Menandakan bahwa bahasa dokumen adalah bahasa Inggris.</p>
<p>3. &lt;head&gt;: Bagian kepala dari dokumen HTML yang berisi informasi meta dan judul.</p>
   a. &lt;meta charset="UTF-8"&gt;: Menentukan bahwa dokumen menggunakan karakter set UTF-8.
   b. &lt;meta name="viewport" content="width=&lt;device-width&gt;, initial-scale=1.0"&gt;: Terdapat kesalahan pada pengaturan viewport, karena harusnya &lt;device-width&gt; diganti dengan device-width tanpa tanda kurung sudut. Ini adalah konfigurasi viewport yang umum digunakan untuk mengatur tampilan halaman web di perangkat berbasis web dan mobile.
   c. &lt;title&gt;Konfirmasi&lt;/title&gt;: Menentukan judul halaman web.
   d. &lt;link rel="stylesheet" href="makasih-1.css"&gt;: Menghubungkan halaman dengan file stylesheet "makasih-1.css" untuk mengatur tata letak dan gaya.</p>
<p>4. &lt;body&gt;: Bagian tubuh dokumen HTML yang berisi konten yang akan ditampilkan di halaman web.</p>
<p>5. &lt;section id="terimakasih"&gt;: Membuat sebuah bagian dengan ID "terimakasih" untuk mengelompokkan konten terkait bersama.
   a. &lt;div class="imbal"&gt;: Membuat div dengan kelas "imbal" untuk mengelompokkan pesan ucapan terima kasih bersama.
   b. &lt;h1&gt;&lt;b&gt;Terima Kasih&lt;/b&gt;&lt;/h1&gt;: Menampilkan judul besar "Terima Kasih" dengan teks yang dicetak tebal (bold).
   c. Beberapa paragraf &lt;p&gt; yang berisi pesan ucapan terima kasih yang ditampilkan kepada pengguna. Pesan ini berisi penghargaan dan rasa terima kasih atas kontribusi dan dukungan pengguna.</p>
<p>6. &lt;a class="tekan" href="index.html"&gt;Kembali&lt;/a&gt;: Membuat tautan (link) dengan teks "Kembali" yang mengarahkan pengguna kembali ke halaman "index.html" ketika diklik.</p>

<h3>Cerita.html</h3>

<p>1. &lt;!DOCTYPE html&gt; : Ini adalah deklarasi tipe dokumen HTML yang mendefinisikan jenis dokumen HTML yang digunakan.</p>
<p>2. &lt;html lang="en"&gt; : Ini adalah elemen utama yang mengawali dokumen HTML. lang="en" menunjukkan bahwa bahasa yang digunakan dalam dokumen ini adalah bahasa Inggris.</p>
<p>3. &lt;head&gt; : Ini adalah elemen kepala dari dokumen HTML yang berisi metadata, seperti karakter set, judul halaman, dan tautan ke berkas eksternal.</p>
<p>4. &lt;meta charset="UTF-8"&gt; : Ini mengatur karakter set dokumen sebagai UTF-8, yang digunakan untuk mendukung karakter internasional.</p>
<p>5. &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt; : Ini mengatur tampilan halaman agar sesuai dengan lebar perangkat dan tingkat perbesaran awalnya.</p>
<p>6. &lt;title&gt;Cerita&lt;/title&gt; : Ini menetapkan judul halaman web yang akan ditampilkan di tab peramban pengguna.</p>
<p>7. &lt;link rel="stylesheet" href="cerita.css"&gt; : Ini menghubungkan halaman dengan berkas CSS eksternal "cerita.css" yang akan digunakan untuk mengatur tampilan halaman.</p>
<p>8. &lt;link rel="preconnect" href="https://fonts.googleapis.com"&gt; dan &lt;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin&gt; : Ini menunjukkan persiapan untuk menghubungkan ke server Google Fonts.</p>
<p>9. &lt;link href=https://fonts.googleapis.com/css2?family=Sacramento&display=swap rel="stylesheet"&gt; : Ini menghubungkan halaman dengan berkas font dari Google Fonts bernama "Sacramento".</p>
<p>10. &lt;link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@400;500;900&display=swap" rel="stylesheet"&gt; : Ini menghubungkan halaman dengan dua jenis font dari Google Fonts, "Sacramento" dan "Work Sans" dengan berat tertentu.</p>
<p>11. &lt;style&gt; : Ini adalah elemen yang dapat digunakan untuk menuliskan aturan CSS langsung di dalam halaman HTML. Namun, dalam kode yang Anda berikan, elemen ini tidak memiliki aturan CSS apa pun. </p>
<p>12. &lt;body&gt; : Ini adalah elemen yang menampung semua elemen yang akan ditampilkan di halaman web, seperti teks, gambar, dan elemen lainnya. </p>
<p>13. &lt;div id="slideshow"&gt; : Ini adalah elemen div dengan atribut id "slideshow" yang digunakan untuk membuat wadah utama untuk elemen-elemen dalam slide show. </p>
<p>14. &lt;div class="slide-wrapper"&gt; : Ini adalah elemen div dengan class "slide-wrapper" yang digunakan sebagai wadah untuk mengelompokkan elemen-elemen slide. </p>
<p>15. &lt;div class="slide"&gt; : Ini adalah elemen div dengan class "slide" yang digunakan untuk menggambarkan slide pertama dalam slide show. </p>
<p>16. &lt;div class="teks"&gt; : Ini adalah elemen div dengan class "teks" yang mengelompokkan teks dalam slide. </p>
<p>17. &lt;h1&gt;Pertemuan&lt;/h1&gt; : Ini adalah elemen judul (h1) yang menampilkan teks "Pertemuan".</p>
<p>18. &lt;p&gt;...: Ini adalah elemen paragraf (p) yang berisi cerita tentang pertemuan Kaesang dan Erina.</p>

<H3>Info.html</H3>

<p>1. &lt;!DOCTYPE html&gt; : Deklarasi tipe dokumen HTML yang menunjukkan bahwa ini adalah dokumen HTML.</p>
<p>2. &lt;html lang="en"&gt; : Elemen awal yang menandakan awal dari dokumen HTML. lang="en" menunjukkan bahwa bahasa yang digunakan dalam dokumen adalah bahasa Inggris. </p>
<p>3. &lt;head&gt; : Bagian kepala dari dokumen HTML yang berisi metadata dan tautan ke berkas eksternal. </p>
<p>4. &lt;meta charset="UTF-8"&gt; : Menentukan karakter set dokumen sebagai UTF-8, yang mendukung karakter internasional. </p>
<p>5. &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt; : Mengatur tampilan halaman agar sesuai dengan lebar perangkat dan tingkat perbesaran awalnya. </p>
<p>6. &lt;link rel="stylesheet" href="tentang.css" /&gt; : Menghubungkan halaman dengan berkas CSS eksternal bernama "tentang.css" untuk mengatur tampilan halaman. </p>
<p>7. &lt;title&gt;Tentang Kami&lt;/title&gt; : Menetapkan judul halaman web yang akan ditampilkan di tab peramban pengguna. </p>
<p>8. &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"&gt; : Menghubungkan halaman dengan berkas CSS dari Font Awesome untuk ikon. </p>
<p>9. &lt;body&gt;: Elemen yang menampung semua elemen yang akan ditampilkan di halaman web. </p>
<p>10. &lt;section id="navbar"&gt;: Bagian dari halaman yang memiliki atribut id "navbar", biasanya digunakan untuk membuat menu navigasi. </p>
<p>11. &lt;h1> Tentang Kami &lt;/h1&gt; : Teks judul di dalam bagian "navbar".</p>
<p>12. &lt;section id="team"&gt; : Bagian yang memiliki atribut id "team", digunakan untuk mengelompokkan informasi tentang tim. </p>
<p>13. &lt;div class="image"&gt; : Elemen div dengan class "image" yang berisi gambar latar belakang. </p>
<p>14. &lt;img src="bgtentangkami.jpg"&gt; : Gambar latar belakang. </p>
<p>15. &lt;div class="kata"&gt; : Elemen div dengan class "kata" yang berisi paragraf-paragraf yang menjelaskan tentang tim. </p>
<p>16. &lt;section id="ayam"&gt; : Bagian dengan atribut id "ayam" yang digunakan untuk membuat judul "OUR TEAM".</p>
<p>17. &lt;section id="our"&gt; : Bagian dengan atribut id "our" yang digunakan untuk mengelompokkan informasi tentang anggota tim. </p>
<p>18. Setiap anggota tim memiliki elemen &lt;div class="person"&gt; yang berisi informasi mereka</p>
<p>19. Gambar profil (dalam elemen &lt;img&gt;). </p>
<p>20. Nama anggota tim (dalam elemen &lt;span&gt;). </p>
<p>21. Informasi kontak seperti Instagram, nomor telepon, dan alamat email (dalam elemen &lt;span&gt;). </p>
<p>22. Kutipan atau moto pribadi (dalam elemen &lt;p&gt;). </p>
<p>23. &lt;script src="index.js"&gt; : Ini menghubungkan halaman dengan berkas JavaScript eksternal bernama "index.js". Berkas ini mungkin digunakan untuk menambahkan perilaku interaktif ke dalam halaman web. </p>

# 6.2 CSS

<h3>style.css</h3>

1. body { merupakan selector CSS yang merujuk kedalam "body" ddidalam body terdapat font-family: "Work Sans", sans-serif;: Ini mengatur jenis font yang akan digunakan untuk teks"font-size: 1.2rem;": Ini mengatur ukuran font yang akan digunakan dalam elemen "min-height: 100vh;" Ini mengatur tinggi minimum elemen "margin: 0"Ini menghapus margin luar (spasi) pada elemen "padding: 0;" Ini menghapus padding (spasi internal) pada elemen "ox-sizing: border-box;:"Ini mengatur model kotak (box model) elemen
2. .cover { merupakan selector CSS yang merujuk kedalam class"cover" didalam class"cover terdapat "background: url(bg-2.jpg) no-repeat center center fixed;" Ini mengatur gambar latar belakang dengan URL "bg-2.jpg". Gambar ini akan diulang (no-repeat) dan ditempatkan di tengah (center center) elemen."-webkit-background-size: cover;"digunakan untuk mengatur ukuran gambar latar belakang untuk browser berbasis WebKit menjadi menutupi seluruh area elemen dengan latar belakang."-moz-background-size: cover;" Ini adalah properti yang serupa dengan yang sebelumnya, tetapi ditujukan untuk browser Mozilla (seperti Firefox)."-o-background-size: cover;" Ini adalah properti yang serupa dengan yang sebelumnya, tetapi ditujukan untuk browser Opera.
3. .cover { merupakan selector CSS yang merujuk kedalam class"cover" didalam class"cover terdapat "min-height: 100vh;" Properti ini mengatur tinggi minimum elemen menjadi 100vh "color: seashell;"Properti ini mengatur warna teks dalam elemen ".cover" menjadi "seashell"padding: 0;" Properti ini menghapus spasi internal (padding) pada elemen."text-align: center;" Properti ini mengatur teks dalam elemen " display: flex;:" Properti ini mengubah tata letak elemen "justify-content: center;": Ini adalah properti CSS yang digunakan dalam tata letak flex untuk mengatur pemusatannya secara horizontal."line-height: 1rem;:" Properti ini mengatur jarak antara baris
4. .cover h1 { merupakan selector CSS yang merujuk kedalam   tekt "h1" yang terdapat dalam class "cover" didalam h1 terdapat "font-family: "Sacramento", cursive;:"roperti ini mengatur jenis font yang akan digunakan untuk teks dalam elemen "font-size: 100px;: "Properti ini mengatur ukuran font untuk teks dalam elemen
5. "* { padding: 0; margin: 0; } adalah aturan yang mengatur penghapusan padding (spasi internal) dan margin (spasi eksternal) default dari semua elemen di dalam halaman web.
6. body::before { ni adalah pemilihan pseudo-elemen .didalam "body" terdapat "min-height: 100vh;:" Properti ini mengatur tinggi minimum dari pseudo-elemen ::before menjadi 100vh "background-size: cover;:" Properti ini mengatur ukuran gambar latar belakang background-position: center;: Properti ini mengatur posisi gambar latar belakang agar selalu terletak di tengah position: fixed;: Properti ini mengatur pseudo-elemen ::before agar memiliki posisi tetap ,top: 0;: Properti ini mengatur pseudo-elemen ::before agar terletak di bagian atas (tinggi 0) dari tampilan jendela browser.
7. #navbarleft {merupakan selector CSS yang merujuk kedalam class"navbarleft".didalam navbar left terdapat width: 100px;Properti ini mengatur lebar elemen "navbarleft" menjadi 100 piksel.,position: fixed;: Properti ini mengatur elemen "navbarleft" menjadi elemen dengan posisi tetap (fixed),background-color: #717171;: Properti ini mengatur warna latar belakang elemen "navbarleft" menjadi abu-abu ,top: 50%;: Properti ini mengatur posisi atas elemen "navbarleft" agar berada di tengah vertikal halaman (50% dari atas).padding: 20px;: Properti ini mengatur spasi internal (padding) elemen "navbarleft" sebanyak 20 piksel,width: fit-content;: Properti ini mengatur lebar elemen "navbarleft" agar sesuai dengan kontennya. Ini akan membuat lebar elemen menyesuaikan dengan teks atau elemen-elemen di dalamnya,border-radius: 25px;: Properti ini mengatur sudut elemen "navbarleft" sehingga memiliki radius sudut sebesar 25 piksel. Ini memberikan elemen tampilan dengan sudut yang melengkung.z-index: 1000;: Properti ini mengatur indeks-z (z-index) elemen "navbarleft" menjadi 1000.
8. #navbarleft ul {merupakan selector CSS yang merujuk kedalam elemen "ul" yang terdapat dalam class"navbarleft didalam navbar left  ul terdapat height: 10em;: Properti ini mengatur tinggi elemen "ul" menjadi 10 em ,display: flex;: Properti ini mengatur tata letak elemen menjadi flexsibel,justify-content: space-around;: Properti ini mengatur pemusatannya secara horizontal dengan memberikan spasi sekitar elemen-elemen dalam elemen,flex-direction: column;: Properti ini mengatur arah elemen-elemen dalam elemen menjadi columntext-align: center;: ,Properti ini mengatur pemusatannya secara horizontal (teks) untuk teks dalam elemen
9. #navbarleft ul li {merupakan selector CSS yang merujuk kedalam elemen "li" yang ada didalam "ul" yang terdapat dalam class"navbarleft didalam navbar left  ul terdapat list-style: none;: Properti ini menghilangkan gaya daftar default dari elemen-elemen, color:  #f7f1f1; merupakan atribut untuk merubah warna menjadi putih.
10. #toggle { merupakan selector CSS yang merujuk kedalam class"toggle" didalam kelas "toggle" terdapat width: 100%;: Properti ini mengatur lebar elemen "toggle" menjadi 100%, sehingga elemen ini akan mengisi seluruh lebar viewport ,position: fixed;: Properti ini mengatur elemen "toggle" sebagai elemen dengan posisi tetap (fixed),background-color: #717171;: Properti ini mengatur warna latar belakang elemen "toggle" menjadi abu-abu,top: 0%;: Properti ini mengatur posisi atas elemen "toggle" agar berada di bagian atas (0%) tampilan jendela browser,padding: 10px;: Properti ini mengatur spasi internal (padding) elemen "toggle" sebanyak 10 piksel.
11. #toggle a { merupakan selector CSS yang merujuk kedalam  a didalam class"toggle". didalam kelas "toggle" terdapat padding: 0;: Properti ini menghilangkan spasi internal (padding) ,margin: 0;: Properti ini menghilangkan spasi eksternal (margin) default dari elemen-elemen (a),color: white;: Properti ini mengatur warna teks menjadi putih,background-color: dimgrey;: Properti ini mengatur warna latar belakang  menjadi abu abu tua,overflow: hidden;: Properti ini mengatur elemen-elemen "a" agar tidak melewati batas elemen,border-radius: 3vh;: Properti ini mengatur radius sudut,padding: 8px;: Properti ini mengatur spasi internal (padding)sebanyak 8 piksel
12. #toggle a:hover { background-color: white;color: #717171;selector ini mengarahkan kedalam class"toggle".dimana jika kursor mengarahkan kedalam elemen "a" maka, background akan berubah menjadi putih dan tulisan menjadi abu abu
13. #toggle ul li { merupakan selector CSS yang merujuk kedalam elemen "li" yang ada pada elemen "ul" didalam class"toggle".Didalam class tersebut terdapat right: 100%;,yang membuat elemen"li" menjadi kekanan.display: flex;: Properti ini mengatur tata letak menjadi flexsibel.justify-content: center;: Properti ini mengatur elemen-elemen menjadi ketengah.
14. #akad { merupakan selector CSS yang merujuk kedalam eleemn "akad".didalam class"akad"terdapat background-image: url(Akad11.jpg);: Properti ini mengatur gambar latar belakang elemen "akad" menjadi "Akad11.jpg"background-size: cover;: Properti ini mengatur ukuran gambar latar belakang agar selalu menutupi seluruh area,height: 100vh;: Properti ini mengatur tinggi elemen "akad" menjadi 100vh,text-align: center;: Properti ini mengatur pemusatan teks dalam elemen "akad" secara horizontal,flex-direction: column;: Properti ini mengatur arah elemen-elemen dalam elemen "akad" menjadi vertikal (kolom).justify-content: center;: Properti ini mengatur pemusatannya secara vertikal dengan menggeser elemen-elemen dalam elemen "akad" ke tengah vertikal.align-items: center;: Properti ini mengatur pemusatannya secara horizontal dengan menggeser elemen-elemen dalam elemen "akad" ke tengah.font-family: "Sacramento", cursive;: Properti ini mengatur jenis font teks dalam elemen "akad" menjadi "Sacramento" color: #ded2d2;: Properti ini mengatur warna teks dalam elemen "akad" menjadi abu-abu tua.
15. #akad .ke { Selector ini mengatur tampilan untuk elemen dengan class "ke" yang ada pada elemen"akad".didalam class"akad"terdapat font-size: 150px;: Properti ini mengatur ukuran font untuk teks dalam elemen-elemen dengan kelas "ke." Ukuran fontnya adalah 150 piksel,transform: translateY(-50%);: Properti ini menggunakan transformasi CSS untuk menggeser elemen-elemen dengan kelas "ke" ke atas (translateY) sejauh 50% dari tinggi elemen aslinya.line-height: 2rem;: Properti ini mengatur tinggi baris (line height) untuk teks dalam elemen-elemen dengan kelas "ke." Ukuran barisnya adalah 2rem
16. .akadnikah {  selector ini mengatur tampilan untuk elemen dengan kelas "akadnikah" didalam akad nikah terdapat transform: translateY(20%); digunakan untuk menggeser elemen secara vertikal dengan cara mengubah nilai transformasi Y (Y-axis) sebesar 20% dari tinggi elemen aslinya.
17. 


}
17. j
10. #mempelai .mempelaiPria: Selector ini mengatur tampilan untuk elemen dengan kelas .mempelaiPria yang berada dalam kontainer dengan id #mempelai.background-image: url(foto-mempelai-pria.jpg); mengatur gambar latar belakang untuk elemen ini menggunakan gambar dengan nama file foto-mempelai-pria.jpg. background-size: cover; mengatur gambar latar belakang agar menutupi seluruh area elemen, sehingga ukuran gambar akan disesuaikan dengan ukuran elemen.
width: 500px; mengatur lebar elemen menjadi 500 piksel.
min-height: 80%; mengatur tinggi minimum elemen sebesar 80% dari tinggi elemen yang mengandungnya.
display: flex; mengubah elemen menjadi elemen flexbox yang dapat digunakan untuk mengatur tata letak elemen-elemen anak secara lebih fleksibel.
flex-direction: column; mengatur arah tata letak elemen-elemen anak ke dalam kolom.
justify-content: end; mengatur elemen-elemen anak untuk ditempatkan di akhir elemen utama, sehingga mereka akan berada di bagian bawah elemen
border-radius: 0 125px 0 0; mengatur sudut elemen dengan radius berbeda untuk masing-masing sisi. Di sini, sisi kanan atas dan kiri atas elemen memiliki radius sudut sebesar 125 piksel.
position: absolute; mengatur elemen agar memiliki posisi absolute, sehingga elemen ini ditempatkan relatif terhadap elemen yang memiliki posisi non-static. Dalam hal ini, elemen ini ditempatkan relatif terhadap elemen dengan id #mempelai.
left: 0; mengatur elemen agar terletak di sisi kiri elemen yang memiliki id #mempelai.
background-color: #f7f1f1; mengatur warna latar belakang elemen.
color: #0a0a0a; mengatur warna teks.
opacity: 65%; mengatur tingkat keburaman elemen, dengan nilai 65%. Ini membuat elemen sedikit transparan.
text-align: center; mengatur teks dalam elemen agar berada di tengah.
position: relative; mengatur elemen agar memiliki posisi relatif terhadap elemen yang memiliki id #mempelai.
padding: 20px; memberikan ruang polos sebesar 20 piksel di sekitar elemen.
border-radius: 0 125px 0 0; mengatur sudut elemen dengan radius berbeda untuk masing-masing sisi, yang sama seperti elemen .mempelaiPria. Ini membantu menciptakan efek visual yang seragam antara kedua
11. #mempelai .mempelaiWanita: Selector ini mengatur tampilan untuk elemen dengan kelas .mempelaiWanita yang berada dalam kontainer dengan id #mempelai.
background-image: url(foto-mempelai-wanita.jpg); mengatur gambar latar belakang untuk elemen ini menggunakan gambar dengan nama file foto-mempelai-wanita.jpg.
background-size: cover; mengatur gambar latar belakang agar menutupi seluruh area elemen, sehingga ukuran gambar akan disesuaikan dengan ukuran elemen.
width: 500px; mengatur lebar elemen menjadi 500 piksel.
min-height: 80%; mengatur tinggi minimum elemen sebesar 80% dari tinggi elemen yang mengandungnya.
display: flex; mengubah elemen menjadi elemen flexbox yang dapat digunakan untuk mengatur tata letak elemen-elemen anak secara lebih fleksibel.
flex-direction: column; mengatur arah tata letak elemen-elemen anak ke dalam kolom.
justify-content: end; mengatur elemen-elemen anak untuk ditempatkan di akhir elemen utama, sehingga mereka akan berada di bagian bawah elemen
mempelaiWanita.
border-radius: 125px 0 0 0; mengatur sudut elemen dengan radius berbeda untuk masing-masing sisi. Di sini, sisi kiri atas elemen memiliki radius sudut sebesar 125 piksel.
position: absolute; mengatur elemen agar memiliki posisi absolute, sehingga elemen ini ditempatkan relatif terhadap elemen yang memiliki posisi non-static. Dalam hal ini, elemen ini ditempatkan relatif terhadap elemen dengan id #mempelai.
right: 0; mengatur elemen agar terletak di sisi kanan elemen yang memiliki id #mempelai
background-color: #f7f1f1; mengatur warna latar belakang elemen.
color: #0a0a0a; mengatur warna teks.
opacity: 65%; mengatur tingkat keburaman elemen, dengan nilai 65%. Ini membuat elemen sedikit transparan.
text-align: center; mengatur teks dalam elemen agar berada di tengah.
12. #cerita: Ini mengatur tampilan elemen-elemen yang memiliki id #cerita, mungkin digunakan untuk halaman atau bagian cerita dalam sebuah website.
font-family: "Work Sans", sans-serif; mengatur jenis font yang digunakan untuk teks dalam elemen ini.
background-image: url(bgceritaa.jpg); mengatur gambar latar belakang elemen ini dengan gambar yang disebut "bgceritaa.jpg".
background-size: cover; mengatur agar gambar latar belakang menutupi seluruh area elemen.
Ini mengatur tampilan elemen-elemen yang memiliki kelas .button, yang mungkin digunakan untuk menampilkan tombol-tombol atau tautan pada halaman cerita.
background-color: #717171; mengatur warna latar belakang elemen dengan kode warna "#717171".
border: none; menghilangkan garis tepi (border) dari elemen.
color: whitesmoke; mengatur warna teks menjadi putih.
padding: 20px 34px; mengatur jarak antara teks dan tepi elemen.
text-align: center; mengatur teks dalam elemen agar berada di tengah.
text-decoration: none; menghilangkan dekorasi teks seperti garis bawah dari tautan.
display: inline-block; mengatur elemen sebagai elemen inline-block.
font-size: 30px; mengatur ukuran teks.
font-weight: bold; mengatur ketebalan teks menjadi tebal (bold).
margin: 4px 2px; mengatur margin di sekitar elemen.
13. #galeri: Ini mengatur tampilan elemen-elemen yang memiliki id #galeri, mungkin digunakan untuk halaman atau bagian galeri dalam sebuah website.
background-image: url(bgceritaa.jpg); mengatur gambar latar belakang elemen ini dengan gambar yang disebut "bgceritaa.jpg".
background-size: cover; mengatur agar gambar latar belakang menutupi seluruh area elemen.
display: flex; mengubah elemen ini menjadi elemen flexbox yang memungkinkan pengaturan tata letak elemen anak secara fleksibel.
flex-direction: column; mengatur arah tata letak elemen-elemen anak ke dalam kolom.
justify-content: space-between; mengatur elemen-elemen anak agar ditempatkan secara merata di antara elemen lain. Ini dapat menghasilkan tata letak vertikal yang merata untuk elemen-elemen anak.
.besar: .besar mengatur tampilan elemen-elemen besar dalam galeri gambar.
align-items: center; mengatur elemen-elemen anak untuk ditempatkan di tengah secara vertikal dalam elemen .besar.
width: 100%; mengatur lebar elemen agar seluruh lebar tersedia digunakan.
height: 68%; mengatur tinggi elemen sebesar 68% dari tinggi elemen yang mengandungnya.
besar img: .besar img mengatur tampilan gambar yang ada di dalam elemen dengan kelas .besar.
height: 600px; mengatur tinggi gambar menjadi 600 piksel.
width: 800px; mengatur lebar gambar menjadi 800 piksel.
besar img.active: .besar img.active mengatur tampilan gambar yang memiliki kelas .active dalam elemen dengan kelas .besar.
display: block; mengatur gambar dengan kelas .active agar terlihat (muncul).
.kecil: .kecil mengatur tampilan elemen-elemen kecil dalam galeri gambar.
align-items: center; mengatur elemen-elemen anak untuk ditempatkan di tengah secara vertikal dalam elemen .kecil.
width: 100%; mengatur lebar elemen agar seluruh lebar tersedia digunakan.
kecil img: .kecil img mengatur tampilan gambar yang ada di dalam elemen dengan kelas .kecil.
width: 200px; mengatur lebar gambar menjadi 200 piksel.
kecil img:hover: .kecil img:hover mengatur tampilan gambar ketika kursor mouse berada di atas gambar (saat sorotan).
width: 250px; m
14. #agenda: Ini mengatur tampilan elemen yang memiliki id #agenda, mungkin digunakan untuk halaman atau bagian agenda acara dalam sebuah website.
height: 100vh; mengatur tinggi elemen agar selalu mengisi tinggi viewport (tinggi layar) secara penuh.
background-image: url(denah.jpg); mengatur gambar latar belakang elemen ini dengan gambar yang disebut "denah.jpg".
.acara: Ini mengatur tampilan elemen-elemen yang memiliki kelas .acara, yang mungkin digunakan untuk menampilkan informasi tentang acara dalam halaman agenda.
flex: 1; mengatur elemen-elemen dengan kelas .acara agar memenuhi sebagian besar ruang yang tersedia dalam elemen yang memiliki id #agenda.
display: flex; mengubah elemen-elemen ini menjadi elemen flexbox yang memungkinkan pengaturan tata letak elemen anak secara fleksibel.
desc: .desc mengatur tampilan elemen-elemen dengan kelas .desc, yang mungkin digunakan untuk deskripsi atau informasi dalam halaman atau bagian tertentu dari situs web.
background-color: rgba(0, 0, 0, 0.5); mengatur warna latar belakang elemen dengan efek transparansi. Warna latar belakang adalah warna hitam (RGB 0, 0, 0) dengan tingkat keburaman sebesar 0.5. Ini menciptakan latar belakang hitam yang agak transparan.
.denah: .denah mengatur tampilan elemen-elemen dengan kelas .denah, yang mungkin digunakan untuk menampilkan peta atau denah dalam halaman atau bagian tertentu dari situs web.
display: flex; mengubah elemen-elemen ini menjadi elemen flexbox yang memungkinkan pengaturan tata letak elemen anak secara fleksibel.
maps: .maps mengatur tampilan elemen-elemen dengan kelas .maps, yang mungkin digunakan untuk menampilkan peta atau denah dalam halaman web.
.acara p: .acara p mengatur tampilan elemen-elemen p (paragraf) yang berada dalam elemen-elemen dengan kelas .acara. Ini mengubah gaya teks paragraf dalam konteks elemen acara.
15. Styling inputs, selects, dan textareas: Bagian ini mengatur tampilan elemen-elemen input dengan tipe "text," elemen-elemen select, dan elemen-elemen textarea dalam halaman web.
width: 100%; mengatur lebar elemen agar mengisi seluruh lebar yang tersedia.



   
<h3>makasih.css</h3>

1. "#terimakasih {" merupakan selector CSS yang merujuk kedalam id "Terimakasih" didalam id ini terdapat "background-image: url(bgkayu.jpg);" yang mengatur background menjadi foto tersebut. "background-size: cover;" digunakan untuk memilih ukuran background."justify-content: center;"berguna untuk membuat text menjadi ke tengah " display: flex;" digunakan untuk membuat dispalay menjadi flex " height: 100vh;" berarti memiliki tinggi 100 vh.
2. ".imbal {" merupakan selctor css yang merujuk pada class "imbal" terdapat "margin-top: 1em;" yang membuat jarak dengan tepi atas 1em "
background-color: azure;"kemudian background color digunakan untuk memilih warna background "opacity: 65%;"dengan opacity 65% "text-align: center;" membuat text menjadi ketengah."transform: translateY(15%);membuat text yang semula di tengah menjadi lebih condong terhadap sumbu y." border-radius: 12%;" membuat pinggiran item menjadi lebih halus.
3. ".imbal h1 {" merupakan selector CSS yang merujuk kedalam   tekt "h1" yang terdapat dalam class "imbal"."font-size: 44px;" memiliki ukuran 44 px .'font-family:sans-serif"digunakan untuk memiilih jenis font yang kita mau
4." .tekan { "merupakan selector CSS yang merujuk kedalam class "Tekan" didalam selector ini terdapat " background-color:azure;" digunakan untuk mengatur warna background" "opacity: 70%;" diguanakan untuk mengatur tingkat opacity. "border: none;" digunakan untuk mengatur border .border=none berarti emnghilangkan border. "padding: 15px 20px;" memiliki padding 15 px dan 20px."text-decoration: none;"digunakan untuk menghilangkan baris pada bawah "text.cursor: pointer;"memberikan petunjuk visual kepada pengguna bahwa elemen tersebuut adalah suatu tautan "   text-align: center;" membuat text menjadi ketengah ."margin-top: 6em;"membuat text menjadi memiliki jarak ke atas sebesar 6 em.

<H3>tentang.css</H3>
<p>1. #navbar: Ini adalah selector CSS yang mengarah pada elemen dengan ID "navbar" dalam dokumen HTML Anda. Ini adalah bagian dari tampilan header atau menu. </p>
<p>2. background-color: dimgrey; : Mengatur warna latar belakang menjadi abu-abu gelap (dimgrey). </p>
<p>3. display: flex; : Mengubah tampilan elemen menjadi tampilan fleksibel sehingga elemen-elemen anaknya dapat diatur dalam satu baris atau satu kolom, tergantung pada konfigurasi. </p>
<p>4. justify-content: center; : Menengahkan konten elemen dalam elemen dengan ID "navbar" secara horizontal. </p>
<p>5. font-size: 2em; : Mengatur ukuran font menjadi 2 kali ukuran font default. </p>
<p>6. color: white; : Mengatur warna teks menjadi putih. </p>
<p>7. font-family: Mengatur jenis font yang akan digunakan. Dalam hal ini, beberapa jenis font cadangan telah ditentukan jika jenis font utama tidak tersedia pada perangkat pengguna. </p>
<p>8. #team: Ini adalah selector CSS yang mengarah pada elemen dengan ID "team". </p>
<p>9. display: flex; : Mengatur tampilan elemen menjadi tampilan fleksibel. </p>
<p>10. height: 80vh; : Mengatur tinggi elemen menjadi 80% dari tinggi viewport (vh adalah satuan tinggi dalam viewport). </p>
<p>11. width: 100%; : Mengatur lebar elemen menjadi 100% dari lebar parentnya (mungkin lebar tampilan layar). </p>
<p>12. .image: Ini adalah selector CSS yang mengarah pada elemen dengan class "image" dalam elemen dengan ID "team".</p>
<p>13. display: flex; : Mengatur tampilan elemen menjadi tampilan fleksibel. </p>
<p>14. width: 50%; : Mengatur lebar elemen menjadi 50% dari lebar parentnya. </p>
<p>15. height: 65%; : Mengatur tinggi elemen menjadi 65% dari tinggi parentnya. </p>
<p>16. margin-top: 4em; : Memberikan margin atas sejauh 4em. </p>
<p>17. justify-content: center; : Menengahkan konten elemen secara horizontal. </p>
<p>18. align-items: center; : Menengahkan konten elemen secara vertikal. </p>
<p>19. .image img: Ini adalah selector CSS yang mengarah pada elemen gambar dalam elemen dengan class "image".</p>
<p>20. height: 100%; : Mengatur tinggi gambar menjadi 100% dari tinggi parentnya. </p>
<p>21. width: auto; : Mengatur lebar gambar agar dihitung otomatis untuk menjaga aspek rasio gambar. </p>
<p>22. .kata: Ini adalah selector CSS yang mengarah pada elemen dengan class "kata" dalam elemen dengan ID "team". </p>
<p>23. margin-top: 4em; : Memberikan margin atas sejauh 4em. </p>
<p>24. display: flex; : Mengatur tampilan elemen menjadi tampilan fleksibel. </p>
<p>25. flex-direction: column; : Mengatur elemen untuk ditampilkan dalam satu kolom. </p>
<p>26. #our: Ini adalah selector CSS yang mengarah pada elemen dengan ID "our". </p>
<p>27. height: 70%; : Mengatur tinggi elemen menjadi 70% dari tinggi viewport. </p>
<p>28. background-color: dimgrey; : Mengatur warna latar belakang menjadi abu-abu gelap. </p>
<p>29. width: 100%; : Mengatur lebar elemen menjadi 100% dari lebar parentnya. </p>
<p>30. display: flex; : Mengatur tampilan elemen menjadi tampilan fleksibel. </p>
<p>31. justify-content: center; : Menengahkan konten elemen secara horizontal. </p>
<p>32. #ayam h1: Ini adalah selector CSS yang mengarah pada elemen &lt;h1&gt; dalam elemen dengan ID "ayam". </p>
<p>33. display: flex; : Mengatur tampilan elemen dalam satu baris fleksibel. </p>
<p>34. justify-content: center; : Menengahkan konten elemen secara horizontal. </p>
<p>35. margin: 0; : Menghilangkan margin pada elemen ini. </p>
<p>36. font-size: 3em; : Mengatur ukuran font menjadi 3 kali ukuran font default. </p>
<p>37. color: white; : Mengatur warna teks menjadi putih. </p>
<p>.38. kata p: Ini adalah selector CSS yang mengarah pada elemen paragraf (p) dalam elemen dengan class "kata". </p>
<p>39. margin: 0; : Menghilangkan margin pada elemen-elemen paragraf. </p>
<p>40. .person: Ini adalah selector CSS yang mengarah pada elemen dengan class "person" yang mungkin menggambarkan anggota tim. </p>
<p>41. display: flex; : Mengatur tampilan elemen menjadi tampilan fleksibel. </p>
<p>42. flex-direction: column; : Mengatur elemen agar ditampilkan dalam satu kolom. </p>
<p>43. justify-content: center; : Menengahkan konten elemen secara horizontal dan vertikal. </p>
<p>44. align-items: center; : Menengahkan konten elemen secara vertikal. </p>
<p>45. margin-top: 3em; : Memberikan margin atas sejauh 3em. </p>
<p>46. padding: 3em; : Memberikan padding sejauh 3em. </p>
<p>47. color: white; : Mengatur warna teks menjadi putih. </p>
<p>48. .person img: Ini adalah selector CSS yang mengarah pada elemen gambar (img) dalam elemen dengan class "person". </p>
<p>49. height: 30vh; : Mengatur tinggi gambar menjadi 30% dari tinggi viewport. </p>
<p>50. width: auto; : Mengatur lebar gambar agar dihitung otomatis untuk menjaga aspek rasio gambar. </p>
<p>51. border-radius: 12px; : Memberikan sudut bulat pada gambar. </p>
<p>52. span: Ini adalah selector CSS yang mengarah pada elemen-elemen span dalam halaman anda. </p>
<p>53. margin: 2px; : Memberikan margin sejauh 2px. </p>
<p>54. .overlay: Ini adalah selector CSS yang mengarah pada elemen-elemen dengan class "overlay". </p>
<p>55. display: flex; : Mengatur tampilan elemen menjadi tampilan fleksibel. </p>
<p>56. flex-direction: column; : Mengatur elemen agar ditampilkan dalam satu kolom. </p>
<p>57. justify-content: start; : Mengatur konten elemen dimulai dari bagian atas. </p>
<p>58. align-items: center; : Menengahkan konten elemen secara vertikal. </p>
<p>59. height: 30vh; : Mengatur tinggi elemen menjadi 30% dari tinggi viewport. </p>
<p>60. overflow: hidden; : Menghilangkan bagian konten yang melebihi batas elemen. </p>
<p>61. .overlay span: Ini adalah selector CSS yang mengarah pada elemen-elemen span dalam elemen-elemen dengan class "overlay". </p>
<p>62. opacity: 0; : Mengatur opasitas elemen-elemen span menjadi 0, sehingga sembunyi. </p>
<p>63. transition: opacity 0.5s, transform 0.5s; : Mengatur transisi efek perubahan opasitas dan transformasi (perpindahan) dengan durasi 0.5 detik. </p>
<p>64. background-color: rgba(0,0,0, 0.5); : Memberikan latar belakang berwarna hitam dengan tingkat transparansi 50%. </p>
<p>65. font-size: 2em; : Mengatur ukuran font menjadi 2 kali ukuran font default. </p>
<p>66. width: 100%; : Mengatur lebar elemen menjadi 100% dari lebar parentnya. </p>
<p>67. display: flex; : Mengatur tampilan elemen menjadi tampilan fleksibel. </p>
<p>68. justify-content: center; : Menengahkan konten elemen secara horizontal. </p>
<p>69. color: white; : Mengatur warna teks menjadi putih. </p>
<p>70. .overlay span.active: Ini adalah selector CSS yang mengarah pada elemen-elemen span yang memiliki class "active" dalam elemen-elemen dengan class "overlay". </p>
<p>71. transform: translateY(-100%); : Menggeser elemen ke atas sejauh 100% dari tingginya sehingga elemen muncul (efek fade in). </p>
<p>72. opacity: 1; : Mengatur opasitas elemen menjadi 1 (sepenuhnya terlihat). </p>


<h3>cerita.css</h3>

<p>1. font-family: "Work Sans", sans-serif; font-size: 1.2rem; Mengatur jenis font, ukuran font, dan beberapa properti lain untuk elemen-elemen dalam body. min-height: 100vh; mengatur tinggi minimum halaman (viewport height) agar selalu mengisi tinggi layar. margin dan padding diatur ke nol untuk menghilangkan margin dan padding default.</p>
<p>2. #slideshow Mengatur tampilan elemen dengan id "slideshow" yang mungkin merupakan wadah untuk slide show. overflow: hidden; akan memastikan bahwa konten yang melebihi batas wadah tidak terlihat. height: 100vh; width: 100%; Mengatur tinggi dan lebar elemen "slideshow" ke tinggi viewport (100vh) dan lebar 100%.margin: 0 auto; mengatur elemen tengah di tengah halaman. .slide Mengatur tampilan elemen dengan kelas "slide" yang mungkin merupakan setiap slide dalam slide show. float: left; mengatur agar elemen-elemen slide berada dalam satu baris horizontal. height: 100vh; width: calc(100% / 3); Mengatur tinggi elemen slide menjadi 100vh (tinggi viewport) dan lebar menjadi 1/3 dari lebar viewport (tinggi viewport dibagi 3). display: flex;, justify-content: center;, dan align-items: center; digunakan untuk membuat konten dalam slide berada di tengah (horisontal dan vertikal). Mengatur tampilan elemen dengan kelas "slide-wrapper" yang mungkin berisi semua slide dalam slide show. width: calc(100% * 3); mengatur lebar elemen menjadi 3 kali lebar viewport, sehingga semua slide tergabung dalam satu "wrapper". animation: slide 15s ease infinite; mengatur animasi yang disebut "slide" dengan durasi 15 detik dan diulang terus menerus (infinite). Mengatur tampilan slide individual dengan kelas "slide" menggunakan pseudo-class :nth-child untuk mengidentifikasi urutan slide. Setiap slide memiliki gambar latar belakang dan warna teks. z-index mengatur kedalaman tumpukan (z-index) elemen, yang digunakan untuk mengontrol tumpukan elemen yang tumpang tindih.</p>
<p>3. background-size: cover; digunakan untuk memastikan bahwa gambar latar belakang mengisi seluruh area slide dengan proporsi yang benar.background-image: url(bg-6.jpg); Menetapkan latar belakang dengan gambar.</p>
<p>4. .container Mengatur tampilan kontainer 
min-width: 400px; mengatur lebar minimum kontainer.
margin: 0; padding: 20px; background-color: #fff; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); justify-content: center; align-items: center; opacity: 80%; Mengatur margin, padding, warna latar belakang, sudut bulat (border-radius), dan bayangan (box-shadow).
h2 text-align: center; Mengatur tampilan judul h2 agar berada di tengah (center).</p>
.form-group margin-bottom: 20px; padding: 0px 24px; Mengatur tampilan grup elemen formulir, termasuk margin bawah dan padding.
<p>5. (label) display: block; margin-bottom: 2px; Mengatur tampilan label formulir, termasuk menampilkan sebagai blok dan margin bawah.
input[type="text"] Mengatur tampilan input teks dalam formulir.
width: 100%; Lebar input diatur 100% sehingga mengisi seluruh lebar kontainer.
padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; Padding, margin bawah, dan properti lainnya juga ditetapkan.</p>
<p>6. label.radio-label adalah sebuah selector CSS yang digunakan untuk mengatur tampilan label yang terkait dengan elemen radio.
display: inline-block; mengubah tampilan label tersebut agar tampil sebagai elemen berblok secara horizontal. Dengan kata lain, label-label radio ini akan ditampilkan dalam satu baris horizontal yang sama.
input[type="radio"] adalah selector CSS yang digunakan untuk mengatur tampilan elemen radio.
margin-right: 5px; mengatur margin sebelah kanan (jarak antara elemen radio dan elemen berikutnya) sebesar 5 piksel. Ini digunakan untuk memberikan sedikit ruang antara elemen radio dan elemen.</p>
<p>7. button digunakan untuk mengatur tampilan semua elemen tombol (button) pada halaman.
background-color: #303031; mengatur warna latar belakang tombol
color: #fff; mengatur warna teks di dalam tombol
padding: 10px 20px; mengatur jarak antara teks dan tepi tombol. Padding sebelah atas dan bawah adalah 10 piksel, sementara padding sebelah kiri dan kanan adalah 20 piksel. Ini memberikan elemen tombol ukuran yang sesuai.
border: none; menghilangkan semua border (garis tepi) dari tombol. Sehingga, tombol tidak memiliki garis tepi.
border-radius: 4px; mengatur sudut bulat pada tombol dengan radius 4 piksel. Ini memberikan sudut tombol yang sedikit membulat.
cursor: pointer; mengubah ikon kursor mouse saat berada di atas tombol menjadi tanda panah (pointer), menunjukkan bahwa tombol ini dapat diklik.
display: flex; mengubah elemen tombol menjadi elemen fleksibel (flex element) yang memungkinkan pengaturan lebih lanjut dengan tata letak fleksibel.
justify-content: right; tampaknya ada kesalahan dalam aturan ini. Seharusnya "right" adalah salah satu nilai dari "justify-content" yang digunakan untuk mengatur perataan elemen-elemen dalam sebuah kontainer fleksibel. Namun, "right" biasanya tidak digunakan. Anda mungkin ingin menggantinya dengan "center" atau "flex-end" jika tujuannya adalah perataan ke tengah atau ke kanan.
align-items: center; yang mengatur elemen atau kelas ".button" untuk memiliki perataan elemen anak ke tengah secara vertikal dalam kontainer flex.</p>

























## 6.3 Java Script
<H3>slideIndex.js</H3>
<p>1. let slideIndex = 1; : Ini adalah deklarasi variabel slideIndex yang digunakan untuk melacak slide mana yang sedang ditampilkan. Nilai awalnya diatur ke 1, yang berarti slide pertama akan ditampilkan saat halaman dimuat.</p>
<p>2. showSlides(slideIndex); : Ketika halaman dimuat, ini memanggil fungsi showSlides() dengan nilai slideIndex awal (yaitu 1) untuk menampilkan slide pertama.</p>
<p>3. Fungsi plusSlides(n): Ini adalah fungsi yang digunakan untuk mengganti slide dengan mengklik tombol "Next" atau "Previous" pada slider. Parameter n adalah jumlah slide yang akan ditambahkan atau dikurangkan dari slideIndex.</p>
<p>4. Fungsi currentSlide(n): Ini adalah fungsi yang digunakan untuk mengganti slide dengan mengklik thumbnail (titik kecil) yang mewakili slide tertentu. Parameter n adalah nomor slide yang dipilih.</p>
<p>5. Fungsi showSlides(n): Ini adalah fungsi utama yang mengatur tampilan slide berdasarkan nilai n.</p>
<p>6. Variabel i digunakan untuk iterasi.</p>
<p>7. Variabel slides adalah kumpulan elemen dengan class "mySlides" yang mewakili slide dalam slider.</p>
<p>8. Variabel dots adalah kumpulan elemen dengan class "dot" yang mewakili thumbnail atau titik kecil yang sesuai dengan setiap slide.</p>
<p>9. Jika n lebih besar dari jumlah slide yang tersedia, slideIndex diatur kembali ke 1, sehingga slider akan mengulang dari awal.</p>
<p>10. Jika n kurang dari 1, slideIndex diatur ke slide terakhir, sehingga Anda dapat menggeser ke slide terakhir dari slide pertama.</p>
<p>11. Selanjutnya, semua elemen dengan class "mySlides" diubah menjadi display: none (tidak terlihat), sehingga semua slide disembunyikan.</p>
<p>12. Semua elemen dengan class "dot" yang memiliki class "active" kehilangan class "active", yang digunakan untuk menunjukkan slide mana yang aktif.</p>
<p>13. Kemudian, slide yang sesuai dengan slideIndex (setelah perhitungan di atas) diubah menjadi display: block, sehingga hanya satu slide yang ditampilkan pada satu waktu.</p>
<p>14. Thumbnail yang sesuai dengan slideIndex juga diberikan class "active" untuk menandai slide yang sedang ditampilkan.</p>

<H3>Index.js</H3>

<p>1. function musik() Fungsi ini digunakan untuk mengontrol pemutaran audio di dalam elemen dengan id "musik" pada halaman web.</p>
<p>  a. Pertama, kode mengambil elemen dengan id "musik" menggunakan document.querySelector("#musik") dan menyimpannya dalam variabel msc.</p>
<p>  b. Kemudian, kode menggunakan operator ternary (?:) untuk memeriksa apakah audio dalam elemen msc sudah dimute (muted) atau tidak.</p>
<p>  c. Jika audio tidak dimute, maka fungsi ini akan mengatur atribut muted dari elemen audio tersebut menjadi true, sehingga audio dimute.</p>
<p>  d. Jika audio sudah dalam keadaan dimute, maka fungsi ini akan mengatur atribut muted menjadi false, sehingga audio tidak dimute.</p>
<p>2. function galeri(gmbr) Fungsi ini digunakan untuk mengganti gambar yang sedang ditampilkan dalam galeri gambar.</p>
<p>  a. Pertama, fungsi ini mengambil semua elemen gambar dalam elemen dengan kelas "besar" menggunakan document.querySelectorAll(".besar img") dan menyimpannya dalam variabel image.</p>
<p>  b. Kemudian, kode mencari elemen yang memiliki kelas "active" dan menghapus kelas "active" tersebut dengan actv.classList.remove("active").</p>
<p>  c. Selanjutnya, elemen gambar yang sesuai dengan indeks gmbr-1 (indeks dalam array dimulai dari 0) diberikan kelas "active" dengan image[gmbr-1].classList.add("active").</p>
<p>3. function profileover(element) Fungsi ini digunakan untuk menambahkan kelas "active" pada elemen yang berisi teks nama di atas profil pengguna saat mouse berada di atas elemen tersebut.</p>
<p>  a. Fungsi ini menerima satu argumen element, yang merupakan elemen yang sedang diarahkan oleh kursor mouse.</p>
<p>  b. Kode ini menggunakan element.querySelector("span") untuk mencari elemen anak (child) dengan tag "span" di dalam elemen element dan kemudian menambahkan kelas "active" pada elemen tersebut.</p>
<p>4. function profilleave(element) Fungsi ini digunakan untuk menghapus kelas "active" dari elemen yang berisi teks nama di atas profil pengguna saat mouse meninggalkan elemen tersebut.</p>


















































































