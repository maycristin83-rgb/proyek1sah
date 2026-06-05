# GeoToba - Sistem Informasi Geosite Danau Toba

GeoToba adalah aplikasi berbasis web yang menyajikan informasi lengkap tentang keindahan geologi, destinasi wisata, dan budaya Batak di kawasan Danau Toba (khususnya wilayah Ambarita, Tuktuk, dan Tomok).

🌐 **Live Website:** [https://geotoba-ambarita.d4trpl-itdel.id/](https://geotoba-ambarita.d4trpl-itdel.id/)

---

## 🛠️ Persyaratan Sistem & Instalasi

Proyek ini dibangun menggunakan **Laravel** dan **Bootstrap**. Untuk menjalankannya secara lokal menggunakan **Laragon**, ikuti langkah-langkah di bawah ini:

### 1. Konfigurasi Database
1. Buka **phpMyAdmin** melalui Laragon Anda.
2. Buat database baru bernama **`Pa1`** (sesuai konfigurasi `.env`).
3. Jalankan perintah migrasi dan pengisian data awal (seeder) di terminal proyek Anda:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

### 2. Menjalankan Server Aplikasi
Setelah database siap, jalankan aplikasi menggunakan perintah berikut:
```bash
php artisan serve
```
Akses aplikasi melalui browser di alamat: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🚀 Panduan Menggunakan Git (Push ke GitHub)

Gunakan langkah-langkah berikut untuk menyimpan dan mengirimkan perubahan kode Anda ke repositori GitHub (`maycristin/proyek1sah`):

### Langkah 1: Tambahkan Semua Perubahan File
```bash
git add .
```

### Langkah 2: Buat Commit (Catatan Perubahan)
```bash
git commit -m "tulis pesan perubahan Anda di sini"
```

### Langkah 3: Kirim Perubahan ke GitHub
```bash
git push maycristin main
```