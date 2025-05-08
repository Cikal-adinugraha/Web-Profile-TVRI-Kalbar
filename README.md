# Website Profile TVRI Kalimantan Barat

Mata Kuliah Proyek Perangkat Lunak

---

## Persiapan Project

### Prerequisite

#### 1. PHP 8.2

bisa pake [xampp](https://www.apachefriends.org/download.html), [laragon](https://laragon.org/download/), [herd](https://herd.laravel.com/windows)

buat laragon cari yang versi 6 (biar gratis)

#### 2. Composer

download [disini](https://getcomposer.org/)

#### 3. NodeJS

bisa pake [nvm](https://github.com/nvm-sh/nvm) atau download [disini](https://nodejs.org/en/download)

#### 4. Git dan Github

### Step by Step

#### 1. Clone Repo

```bash
git clone https://github.com/Cikal-adinugraha/Web-Profile-TVRI-Kalbar
```

#### 2. Install Dependency

ini dulu

```bash
composer install
```

lanjut ini

```bash
npm install
```

#### 3. Copy .env

```bash
copy .env.example .env
```

#### 4. Generate App Key

```bash
php artisan key:generate
```

#### 5. Connect ke database

buka file `.env` lalu modif baris ini

```
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

ilangin tanda pager ny (#) trus sesuaikan aj

---

## 🚀 Tutorial Push & Commit GitHub

> [!WARNING]
> Semua Perubahan dilakukan di branch baru, JANGAN LANGSUNG MELAKUKAN PERUBAHAN DI BRANCH MAIN!!!!!!

### 1. Melakukan Perubahan

Buka project di komputer, kemudian checkout ke branch lain

```bash
git checkout -b <nama-branch>
```

ganti `<nama-branch>` dengan fitur yang mau dikerjakan, contohnya

```bash
git checkout -b login
```

kalo dah pindah branch, lanjut ngoding dah

### 2. Menambahkan dan Commit Perubahan

#### Tambahkan perubahan ke staging

kalo mau nambahin semua file ke area staging bisa pake perintah

```bash
git add .
```

atau kalo mau menambahkan file tertentu doang bisa pake perintah

```bash
git add <nama-file>
```

ganti `<nama-file>` dengan nama file yang mau ditambahkan ke area staging, contohnya

```bash
git add app\Models\User.php
```

#### Commit perubahan dengan pesan yang jelas

```bash
git commit -m "Pesan commit yang menjelaskan perubahan"
```

Contoh:

```bash
git commit -m "Update tampilan halaman profil"
```

### 3. Push Perubahan ke GitHub

Setelah commit, lakukan push ke repository dengan perintah

```bash
git push origin nama-branch
```

### 4. Pull Request

buat pull request baru, lalu hubungin QA supaye die ngecek ini dah oke atau blum, ntar kalo dah oke baru merge ke main
