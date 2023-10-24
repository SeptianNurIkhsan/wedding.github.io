
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
17. didalam &lt;div class="akadnikah"&gt; terdapat   &lt;h1&gt;Kaesang & Erina&lt;/h1&gt; sebagai isi kemudian,&lt;a class="lihat" href="#home" onclick="enableScroll()&gt;"Lihat Undangan</a> terdapat elemen "anchor" untuk membuat link dengan atribut "class"dengan nama 

 















































































