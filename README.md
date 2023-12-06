### Instalasi

Proses instalasi sebagai berikut

```sh
$ git clone https://github.com/mil-pjlp2021/simple-proyek-laravel.git
$ cd membership-access
$ composer update
```

Buat file .env

```sh
cp .env-example .env
$ php artisan key:generate
```

Buat database di mySQL

Sesuaikan database di .env

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple_proyek_db
DB_USERNAME=root
DB_PASSWORD=
```



`migrate --seed` untuk membuat tabel dan mengisi data
```sh
$ php artisan migrate --seed
```
`npm run build` untuk men-generate frontend
```sh
$ npm run build
```

Dan jalankan menggunakan perintah

```sh
$ php artisan serve
```

Generated User
```sh
username = `admin@example.com`
password = `password`

```
