
# 📁 SOP dan Tutorial Push & Commit GitHub

## 📌 Tujuan
Dokumen ini dibuat untuk memandu rekan tim dalam menggunakan GitHub, khususnya melakukan **push** dan **commit** perubahan ke repository.

---

## 🚀 Langkah-langkah Kerja

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

## 📝 Standar Penulisan Pesan Commit

Gunakan format standar berikut untuk memudahkan kolaborasi:

| Kategori | Penjelasan | Contoh |
|:--------:|:----------:|:------:|
| Add      | Menambahkan fitur baru | `Add fitur login pengguna` |
| Fix      | Memperbaiki bug/error | `Fix error pada halaman dashboard` |
| Update   | Memperbaharui fitur yang sudah ada | `Update desain halaman profil` |
| Remove   | Menghapus file atau fitur yang tidak digunakan | `Remove file gambar tidak terpakai` |

---

## ⚡ Tips Tambahan
- **Selalu lakukan `git pull` sebelum melakukan `git push`.**
- **Lakukan commit secara rutin, tidak menumpuk banyak perubahan dalam satu commit.**
- **Gunakan pesan commit yang singkat, padat, dan jelas.**

---

# 📎 Penutup
Dengan mengikuti SOP ini, diharapkan semua anggota tim dapat bekerja dengan lebih rapi, efektif, dan menghindari konflik saat berkolaborasi menggunakan GitHub.

---
