<h2 align="center">Starter Kit App.</h2>

## Table of Contents
1. [Dependency](#dependency)
2. [Setup](#setup)
3. [Usage](#usage)
4. [License](#license)

## Dependency
- PHP ^8.x - [PHP 8](https://www.php.net/releases/8.1/en.php)
- Laravel ^9.x - [Laravel 9](https://laravel.com/docs/9.x)
- Forify ^1.x - [Fortify](https://laravel.com/docs/9.x/fortify)
- Yajra Datatables ^10.x - [Yajra Datatables](https://yajrabox.com/docs/laravel-datatables/10.0)
- Spatie ^5.x - [Spatie Permission](https://spatie.be/docs/laravel-permission/v5/introduction)
- Debugbar ^3.x [Debugbar](https://github.com/barryvdh/laravel-debugbar)
- Mazer ^2.x [Mazer](https://github.com/zuramai/mazer)

## Setup
1. Clone or download
```shell
git clone https://github.com/RSUD-Kelas-D-Bantargebang-Dev-Team/starter-kit.git
```

2. Install laravel dependency
```sh
composer install
```

3. Create copy of ```.env```
```sh
cp .env.example .env
```

4. Generate laravel key
```sh
php artisan key:generate
```

5. Set database name and account in ```.env```
```sh
DB_DATABASE=starter
DB_USERNAME=root
DB_PASSWORD=
```

6.  Run Laravel migrate and seeder
```sh
php artisan migrate --seed
``` 

7. Create the symbolic link
```sh
php artisan storage:link
``` 

8. Start development server
```sh
php artisan serve
``` 

## Usage
- Email: admin@gmail.com
- Password: password


## License
[MIT License](./LICENSE)
