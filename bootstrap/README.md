# Service 1 - Katalog Buku

Nama: Arief Rachmad Busviandri

NIM: 102022400291

## Endpoint

### GET Semua Buku

GET

```http
/api/v1/catalog/books
```

Response:

```json
[
  {
    "id": 1,
    "title": "Laskar Pelangi",
    "author": "Andrea Hirata",
    "publisher": "Bentang",
    "year": 2005
  }
]
```

### GET Detail Buku

GET

```http
/api/v1/catalog/books/{id}
```

Contoh:

```http
/api/v1/catalog/books/1
```

### POST Tambah Buku

POST

```http
/api/v1/catalog/books
```

Body:

```json
{
  "title": "Negeri 5 Menara",
  "author": "Ahmad Fuadi",
  "publisher": "Gramedia",
  "year": 2009
}
```

Response:

```json
{
  "message": "Book created successfully",
  "data": {
    "title": "Negeri 5 Menara",
    "author": "Ahmad Fuadi",
    "publisher": "Gramedia",
    "year": 2009
  }
}
```