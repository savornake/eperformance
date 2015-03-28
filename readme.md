## e-Performance

### How to install for developer???

- pertama install xampp
- Pertama-tama install terlebih dahulu `git`
- Kemudian install `composer` sebagai php dependency manager
- Pilih lokasi folder kerja
- Dan ketikkan kode berikut: (otomatis download laravel + code)

```
$ git clone https://github.com/savornake/eperformance.git
$ composer update
```
- Selanjutnya siapkan kopi sambil menunggu proses update-nya.
- Kemudian ketik lagi:

```
$ php artisan migrate
$ php artisan db:seed
$ php artisan serve
```

### Enaknya pake software apa aja buat develop???

Software banyak sekali yang gratis atau berbayar, jika ingin yang gratis saya merekomendasikan:
1. Sublime Text 3: code editor
2. Sourcetree: git management
3. MySQL Workbench: MySQL desktop GUI