
# 📁 SOP dan Tutorial Push & Commit GitHub
---

## 🚀 Tutorial Push & Commit GitHub

### 1. Persiapan
- Pastikan Git sudah terinstall di komputer.
- Pastikan sudah memiliki akun GitHub dan sudah login.
- Pastikan memiliki akses ke repository.

### 2. Clone Repository (Jika Belum Ada di Lokal)
Clone repository hanya perlu dilakukan sekali:

```bash
git clone https://github.com/Cikal-adinugraha/Web-Profile-TVRI-Kalbar.git
```

### 3. Update Repository Lokal (Git Pull)
Sebelum mengerjakan atau membuat perubahan, pastikan repository lokal sudah update:

```bash
git pull origin main
```
Atau, jika menggunakan branch lain:

```bash
git pull origin nama-branch
```

### 4. Melakukan Perubahan
- Buka project di komputer.
- Lakukan perubahan yang diperlukan.
- Simpan semua perubahan.

### 5. Menambahkan dan Commit Perubahan

**Cek file yang berubah:**
```bash
git status
```

**Tambahkan perubahan ke staging:**
```bash
git add .
```
Atau, untuk file tertentu:
```bash
git add nama_file.txt
```

**Commit perubahan dengan pesan yang jelas:**
```bash
git commit -m "Pesan commit yang menjelaskan perubahan"
```

Contoh:
```bash
git commit -m "Update tampilan halaman profil"
```

### 6. Push Perubahan ke GitHub

Setelah commit, lakukan push ke repository:

```bash
git push origin main
```
Atau ke branch lain:

```bash
git push origin nama-branch
```

---

