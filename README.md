# Athink
Altar Three Paket (Altar, Altar Admin, Altar Site Profile) Laravel

## Instalasi
Pada terminal ketikan perintah :

`composer create-project aldhix/athink myproject`

Masuk ke direktori `/myproject` setting koneksi database pada file `.env` dan `config/database.php` 

Setelah melakukan setting koneksi database, berikutnya pada terminal di direktori `/myproject` mejalankan  `migrations` dan `seeders` :

    php artisan migrate:fresh
    php artisan db:seed
    php artisan serv

Pada web browser ketikan alamat [http://localhost:8000/admin/login](http://localhost:8000/admin/login) , login dengan :

    email : admin@localhost.com
    password : password


## Includes
- Laravel 7 [https://laravel.com/](https://laravel.com/)
- AdminLTE 3 [https://adminlte.io/](https://adminlte.io/)
- Boostrap 4 [https://getbootstrap.com/](https://getbootstrap.com/)
- Altar [https://github.com/aldhix/altar](https://github.com/aldhix/altar)
- Altar Admin [https://github.com/aldhix/altaradmin](https://github.com/aldhix/altaradmin)
- Altar Site Profile [https://github.com/aldhix/altarsiteprofile](https://github.com/aldhix/altarsiteprofile)
