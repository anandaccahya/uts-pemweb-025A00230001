# uts-pemweb-025A00230001

## 1. Identitas

- **Nama:** Ananda Eka Cahya
- **NIM:** [Isi NIM]
- **Kelas:** [Isi Kelas]
- **Mata Kuliah:** Pemrograman Web
- **Program Studi:** Informatika
- **Jenis Proyek:** Proyek Mini Individu
- **Tema:** Jajanan Pasar

---

## 2. Deskripsi Proyek

Project ini dibuat untuk memenuhi tugas UTS Pemrograman Web dengan tema **Jajanan Pasar**.

Website digunakan untuk menampilkan informasi dan katalog jajanan pasar secara dinamis. Data jajanan disimpan menggunakan array PHP dan ditampilkan pada halaman katalog.

Project dibuat menggunakan HTML, CSS, dan PHP sesuai dengan materi yang telah dipelajari.

---

## 3. Cara Menjalankan di Localhost

Project dijalankan menggunakan Laragon.

### Langkah Menjalankan

1. Pastikan Laragon sudah terpasang.
2. Letakkan folder project di dalam folder `www` Laragon.
3. Jalankan Laragon.
4. Klik **Start All**.
5. Buka browser.
6. Masukkan alamat berikut:

``
http://localhost/uts-pemweb-NIM/

7. Website akan menampilkan halaman utama.
8. Gunakan menu navigasi untuk berpindah ke halaman katalog.

> Ganti `uts-pemweb-NIM` dengan nama folder project yang digunakan.

---

## 4. Daftar Fitur

| No. | Fitur | File | Fungsi yang Menangani |
|---|---|---|---|
| 1 | Menampilkan halaman profil | `index.php` | - |
| 2 | Menampilkan katalog jajanan pasar | `katalog.php` | - |
| 3 | Menampilkan data dari array PHP | `katalog.php` | `foreach` |
| 4 | Menampilkan kondisi data | `katalog.php` | `if` / `match` |
| 5 | Mengolah data katalog | `functions.php` | [Nama fungsi] |
| 6 | Menampilkan ringkasan data | `katalog.php` | [Nama fungsi] |
| 7 | Navigasi antarhalaman | `index.php`, `katalog.php` | - |
| 8 | Mengatur tampilan website | `style.css` | - |

### Fungsi Buatan Sendiri

Fungsi buatan sendiri digunakan untuk membantu mengolah data dan menampilkan hasil pada halaman website.

| No. | Nama Fungsi | Kegunaan |
|---|---|---|
| 1 | `[namaFungsi1]()` | [Kegunaan fungsi] |
| 2 | `[namaFungsi2]()` | [Kegunaan fungsi] |

---

## 5. Fungsi Array Bawaan PHP

Beberapa fungsi array bawaan PHP yang digunakan dalam project:

| No. | Fungsi | Kegunaan |
|---|---|---|
| 1 | `count()` | Menghitung jumlah data dalam array |
| 2 | `array_filter()` | Menyaring data berdasarkan kondisi tertentu |
| 3 | `array_column()` | Mengambil nilai dari kolom tertentu pada array |
| 4 | `array_sum()` | Menjumlahkan nilai dalam array |

Fungsi yang digunakan akan disesuaikan dengan implementasi akhir pada program.

---

## 6. Tangkapan Layar

### 6.1 Halaman Profil

![Halaman Profil](screenshots/halaman-profil.png)

### 6.2 Halaman Katalog

![Halaman Katalog](screenshots/halaman-katalog.png)

---

## 7. Sumber Referensi dan Catatan Pemakaian AI

### Sumber Referensi

- PHP Documentation  
  https://www.php.net/

- MDN Web Docs  
  https://developer.mozilla.org/

- W3Schools  
  https://www.w3schools.com/

Referensi digunakan untuk membantu memahami sintaks, konsep PHP, HTML, dan CSS yang digunakan dalam project.

### Catatan Pemakaian AI

AI digunakan sebagai alat bantu dalam proses pengerjaan project, terutama untuk membantu memahami konsep, mencari solusi ketika terdapat error, dan memberikan masukan terhadap struktur kode.

Kode yang digunakan diperiksa dan disesuaikan kembali dengan kebutuhan project. Mahasiswa bertanggung jawab untuk memahami dan dapat menjelaskan kode yang digunakan pada saat demo.

---

## Struktur Folder

```text
uts-pemweb-NIM/
├── index.php
├── katalog.php
├── data.php
├── functions.php
├── style.css
├── assets/
├── screenshots/
├── README.md
└── .gitignore
```

### Keterangan

- `index.php` → halaman profil utama
- `katalog.php` → halaman katalog jajanan pasar
- `data.php` → menyimpan data jajanan dalam array
- `functions.php` → menyimpan fungsi buatan sendiri
- `style.css` → mengatur tampilan website
- `assets/` → menyimpan gambar yang digunakan
- `screenshots/` → menyimpan screenshot untuk README
- `README.md` → dokumentasi project
- `.gitignore` → mengatur file yang tidak perlu dimasukkan ke repository