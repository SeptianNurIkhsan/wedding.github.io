

Software Requirements Specification
for
Website Undangan Digital
Version 1.0 approved
Prepared by 
22091397047 – Ridhwan Fachrul Arief
22091397048 – Fauzan Hedar Abit
22091397049 – Septian Nur Ikhsan



11 September 2023

Table of Contents
1.	Pendahuluan	1
1.1	Tujuan Penulisan Dokumen	1
1.2	Audien yang Dituju dan Pembaca yang Disarankan	1
1.3	Batasan Produk	1
1.4	Definisi dan Istilah	1
1.5	Referensi	1
2.	Deskripsi Keseluruhan	2
2.1	Deskripsi Produk	2
2.2	Fungsi Produk	2
2.3	Penggolongan Karakteristik Pengguna	2
2.4	Lingkungan Operasi	2
2.5	Batasan Desain dan Implementasi	2
2.6	Dokumentasi Pengguna	3
3.	Kebutuhan Antarmuka Eksternal	4
3.1	User Interfaces	4
3.2	Hardware Interface	4
3.3	Software Interface	4
3.4	Communication Interface	4
4.	Functional Requirement	5
4.1	Use Case Diagram	5
4.2	Nama Use Case 1	5
4.3	Nama Use Case 2	5
4.4	Flowchart Diagram	6
5.	Non Functional Requirements	7

Revision History
Name
Date
Reason For Changes
Version




























Pendahuluan
Tujuan Penulisan Dokumen
Dokumen ini menjelaskan tentang spesifikasi persyaratan perangkat lunak untuk website
undangan digital. Dokumen ini ditujukan untuk pengguna dan pengembang. Pengguna dan pembaca diasumsikan memiliki pengetahuan tentang dasar-dasar website. Pemahaman HTML (Hypertext Markup Language) dan Flowchart diagram juga diperlukan bagi pengguna. Dokumen ini diharapkan dapat menjadi langkah awal untuk mendesain website.


Audien yang Dituju dan Pembaca yang Disarankan
Dokumen ini ditujukan untuk semua kalangan . Audien yang akan dituju dalam konteks platform website ini adalah Masyarakat yang berniat untuk membuat undangan pernikahan menggunakan produk usahanya berupa produk buatan asli mahasiswa Universitas Negeri Surabaya.

Batasan Produk
Platform website undangan digital adalah situs web yang dirancang khusus untuk memudahkan masyarakat untuk mendistribusi undangan sehingga undangan tersebut dapat menyebar dengan cepat

Tujuan dari platform ini adalah:

Ramah Lingkungan:
Mengurangi penggunaan kertas untuk undangan fisik membantu mengurangi dampak negatif terhadap lingkungan.

Hemat Biaya: 
Undangan digital umumnya lebih ekonomis daripada mencetak undangan fisik, terutama jika Anda memiliki daftar tamu yang besar. Anda dapat mengalokasikan anggaran yang lebih besar untuk aspek-aspek lain dalam pernikahan Anda.

Kemudahan Distribusi:
Undangan digital dapat dengan mudah dikirimkan melalui email, pesan teks, atau media sosial. Anda juga dapat dengan cepat mengirim perubahan terbaru jika ada perubahan rencana terkait pernikahan Anda.

Interaktif dan Kreatif:
Undangan digital memungkinkan Anda untuk menambahkan elemen-elemen interaktif seperti video, galeri foto, dan tautan langsung ke peta atau situs web pernikahan Anda. Ini memberikan fleksibilitas lebih besar untuk mengekspresikan diri dan mengkomunikasikan informasi penting.


Mudah Dikelola:
Anda dapat dengan mudah melacak konfirmasi kehadiran, mengumpulkan RSVP, dan memantau tanggapan tamu melalui platform undangan digital.


Definisi dan Istilah

SRS	:	Software Requirements Specification, atau 
	   Spesifikasi Kebutuhan Perangkat Lunak (SKPL)

IEEE	:	Institute of Electrical and Electronics Engineering
		Standar internasional untuk pengembangan dan perancangan produk.

Platform	:	Sebuah wadah digital yang banyak dipakai manusia untuk berbagai macam keperluan.

Website	:	Kumpulan halaman web yang saling terhubung dan dapat diakses melalui internet.

Referensi
<Tulis daftar dokumen lain atau alamat web yang menjadi acuan SRS ini.>





Deskripsi Keseluruhan
Deskripsi Produk 
Platform website undangan digital  adalah situs website yang dirancang  untuk memungkinkan mahasiswa dapat menjual produk mereka. Platform website ini memfasilitasi transaksi jual beli antar mahasiswa khususnya mahasiswa Universitas Negeri Surabaya. Mahasiswa yang ingin menjual produk mereka dapat menambahkan produk mereka ke dalam pemilihan menu jual produk, mahasiswa dapat menambahkan nama produk,foto serta menetapkan harga untuk dijual. Sebaliknya mahasiswa yang ingin membeli produk maka mahasiswa tersebut dapat memilih menu beli untuk melihat berbagai macam produk yang dijual oleh sesama mahasiswa Universitas Negeri Surabaya. 


Fungsi Produk 
Fungsi utama produk adalah memberikan fasilitas dan kemudahan bagi masyarakat.Dapat menyebar luas serta hemat biaya merupakan manfaat website ini.Website ini harus memberikan tampilan yang menarik sehingga pembaca tertarik untuk membukanya.Admin juga dapat memasukkan video atau foto sehingga pembaca dapat mengenali sang pengundang. 
Penggolongan Karakteristik Pengguna
<Identifikasi berbagai golongan pengguna yang terkait dengan produk yang dikembangkan>

Tabel 1 Karakteristik Pengguna
Kategori Pengguna
Tugas
Hak Akses ke aplikasi
Kemampuan yang harus dimiliki
Kasir (example)
Mencatat transaksi penjualan harian
Insert Data
Entry Data Transaksi Penjualan
Supervisor (Example)
Memanipulasi Data jika ada kesalahan entry dari kasir
Insert, Update, Delete Data
Manipulasi Data Transaksi Penjualan


















Lingkungan Operasi 
Website undangan pernikahan ini dapat diakses melalui berbagai sistem operasi di bawah ini.

Spesifikasi
Jenis
Sistem Operasi
minimal Microsoft Windows 10, Mac OS catalina, Android 5.0 ke atas, IOS 11 ke atas
Jaringan
Terhubung dengan jaringan internet
Perangkat Keras
Laptop, Smartphone
API
Google Maps API


Batasan Desain dan Implementasi 
Website undangan pernikahan ini tidak bergantung pada komponen perangkat lunak lain yang perlu diinstal oleh pengguna. Namun, beberapa komponen berikut akan digunakan dalam pengembangan dan manajemen website
Bahasa Pemrograman: Website ini dikembangkan menggunakan bahasa pemrograman seperti HTML dan CSS.
Browser Web: Aplikasi ini bisa diakses melalui berbagai browser web populer seperti Google Chrome, Mozilla Firefox, Apple Safari, dan Microsoft Edge.
Dokumentasi Pengguna
<Daftar komponen dokumentasi pengguna (seperti user manual, online help, dan tutorial) yang akan disampaikan bersama dengan perangkat lunak yang akan dikirim>


Kebutuhan Antarmuka Eksternal
User Interfaces 
<Describe the logical characteristics of each interface between the software product and the users. This may include sample screen images, any GUI standards or product family style guides that are to be followed, screen layout constraints, standard buttons and functions (e.g., help) that will appear on every screen, keyboard shortcuts, error message display standards, and so on. Define the software components for which a user interface is needed. Details of the user interface design should be documented in a separate user interface specification.>

Hardware Interface
<Describe the logical and physical characteristics of each interface between the software product and the hardware components of the system. This may include the supported device types, the nature of the data and control interactions between the software and the hardware, and communication protocols to be used.>
Software Interface
<Describe the connections between this product and other specific software components (name and version), including databases, operating systems, tools, libraries, and integrated commercial components. Identify the data items or messages coming into the system and going out and describe the purpose of each. Describe the services needed and the nature of communications. Refer to documents that describe detailed application programming interface protocols. Identify data that will be shared across software components. If the data sharing mechanism must be implemented in a specific way (for example, use of a global data area in a multitasking operating system), specify this as an implementation constraint.>

Communication Interface
<Describe the requirements associated with any communications functions required by this product, including e-mail, web browser, network server communications protocols, electronic forms, and so on. Define any pertinent message formatting. Identify any communication standards that will be used, such as FTP or HTTP. Specify any communication security or encryption issues, data transfer rates, and synchronization mechanisms.>
Functional Requirement
<Area ini menggambarkan pengorganisasian persyaratan fungsional untuk produk dengan fitur sistem, layanan utama yang disediakan oleh produk>

<Tulis Kebutuhan Fungsional / Functional Requirement disini>
Diawali dengan membuat daftar kebutuhan fungsional P/L, lengkap dengan ID dan penjelasan jika perlu. Bisa dibuat dalam bentuk tabel.

ID
Kebutuhan Fungsional
Penjelasan










































































Use Case Diagram
<Gambarkan use case diagramnya dari functional requirement yang didapatkan>
Nama Use Case 1 
	![image](https://github.com/SeptianNurIkhsan/wedding.github.io/assets/124507620/faefb581-6436-4c2c-822b-d91d1f46f494)

Nama Use Case 2
Flowchart Diagram
![image](https://github.com/SeptianNurIkhsan/wedding.github.io/assets/124507620/47414f4a-b5f1-4837-95e2-fa99c7e08911)



Untuk penjelasan pada flowchart yang akan dilakukan adalah pertama tama pastinya terdapat start kemudian anda akan diminta untuk menekan link yang akan mengarahkan kepada website kami. Di Dalam website ini terdapat cover dan juga link untuk melihat undangan .jika anda ingin melihat undangan maka anda bisa menekan link “lihat undangan”kemudian anda akan diarahkan ke undangan yang berisi nama alamat acara tersebut serta tanggal acara.setelah anda melihat denah acara anda dapat melihat galeri galeri acara tersebut.kemudian anda bisa konfirmasi kehadiran anda melalui website tersebut.Selesai.


Non Functional Requirements
<Uraikan dengan ringkas kebutuhan non fungsional dalam tabel sebagai berikut. Isilah Kolom Kebutuhan dengan kalimat yang jelas dan kelak dapat dites untuk dipenuhi. ID adalah nomor kebutuhan yang harus ditelusuri pada saat test. Tuliskan N/A bila Not Applicable>

ID
Parameter
Kebutuhan













































































