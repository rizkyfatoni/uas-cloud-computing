# uas-cloud-2212500389

Proyek ini merupakan tugas UAS Mata Kuliah Komputasi Awan dengan implementasi **Docker Compose**, **PHP Native**, dan **MySQL**. Aplikasi sederhana ini digunakan untuk melakukan **input data mahasiswa** (NIM, Nama, Email) dan menampilkannya dalam tabel. Desain tampilan menggunakan **Bootstrap 5** dan sudah responsif di mobile dan desktop.

---

## 🔧 Teknologi yang Digunakan

- **PHP 8.1 (Apache)**
- **MySQL 5.7**
- **Docker & Docker Compose**
- **Bootstrap 5 (CDN)**

---

## 📂 Struktur Folder

```
uas-cloud-2212500389/
│
├── app/
│   ├── index.php           # Halaman utama form + data
│   ├── dbconn.php          # Koneksi database
│
├── db/
│   └── 00000073909.sql     # File SQL untuk membuat database + tabel mahasiswa
│
├── docker-compose.yml      # Konfigurasi Docker Compose
├── Dockerfile              # Dockerfile untuk PHP Apache
```

---

## ⚙️ Cara Menjalankan (Local via Docker)

1. **Install Docker & Docker Compose** di perangkat Anda.
2. Clone atau download repo ini:
   ```bash
   git clone https://github.com/ciruno/uas-cloud-2212500389.git
   cd uas-cloud-2212500389
   ```
3. Jalankan perintah:
   ```bash
   docker-compose up --build
   ```

4. Buka browser dan akses:
   ```
   http://localhost:8080
   ```

---

## 🧾 Fitur

- Form input data Mahasiswa (NIM, Nama, Email)
- Validasi sederhana via HTML
- Tabel daftar mahasiswa (langsung dari database)
- Desain responsif Bootstrap 5

---

## 🗃 Struktur Tabel MySQL

```sql
CREATE DATABASE IF NOT EXISTS uas_cloud;
USE uas_cloud;
CREATE TABLE IF NOT EXISTS mahasiswa (
  nim VARCHAR(10) PRIMARY KEY,
  nama VARCHAR(50),
  email VARCHAR(50)
);
```

---

## 👨‍💻 Developer

- **Nama:** Ciruno

---

## 📌 Catatan

- Gunakan form dengan NIM maksimal 10 karakter.
- Jika ingin reset data, bisa gunakan:
   ```bash
   docker-compose down -v
   docker-compose up --build
   ```

---