# AI Prompt Log

## Identitas Mahasiswa

* Nama: Arief Rachmad Busviandri
* NIM: 102022400291
* Service: Katalog Buku

---

## Prompt 1

**Tujuan:** Membuat REST API Katalog Buku menggunakan Laravel.

**Prompt:**

> Buatkan REST API Katalog Buku menggunakan Laravel dengan endpoint GET semua buku, GET buku berdasarkan ID, dan POST tambah buku.

**Hasil:**

* Endpoint GET /api/v1/catalog/books
* Endpoint GET /api/v1/catalog/books/{id}
* Endpoint POST /api/v1/catalog/books

---

## Prompt 2

**Tujuan:** Membuat dokumentasi API menggunakan Swagger.

**Prompt:**

> Buatkan dokumentasi Swagger menggunakan L5-Swagger untuk endpoint Katalog Buku.

**Hasil:**

* Swagger berhasil diakses melalui:

  * http://127.0.0.1:8000/api/documentation
* Seluruh endpoint REST API terdokumentasi.

---

## Prompt 3

**Tujuan:** Mengimplementasikan GraphQL.

**Prompt:**

> Buatkan implementasi GraphQL untuk mengambil data buku yang sama seperti REST API.

**Hasil:**

* Membuat BookType
* Membuat BooksQuery
* Konfigurasi GraphQL berhasil dijalankan
* Query books dapat diakses melalui endpoint /graphql

---

## Prompt 4

**Tujuan:** Memperbaiki error GraphQL.

**Prompt:**

> Bantu memperbaiki error konfigurasi GraphQL pada Laravel.

**Hasil:**

* Memperbaiki struktur folder GraphQL
* Memperbaiki konfigurasi graphql.php
* GraphQL berhasil mengembalikan data buku

---

## Prompt 5

**Tujuan:** Menambahkan API Key Security.

**Prompt:**

> Implementasikan API Key Security menggunakan Middleware Laravel.

**Hasil:**

* Membuat ApiKeyMiddleware
* Menambahkan validasi header X-IAE-KEY
* Request tanpa API Key menghasilkan status 401 Unauthorized
* Request dengan API Key valid berhasil mengakses data

---

## Hasil Akhir

Service Katalog Buku berhasil diimplementasikan dengan fitur:

1. REST API
2. Swagger/OpenAPI Documentation
3. GraphQL Query
4. API Key Security

Status pengerjaan: Selesai.
