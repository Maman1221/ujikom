
# Galery Maman


## Tentang Website

Website Gallery yang dibuat untuk project UKK

## Fitur

Untuk Fitur masih minim:
- sign up
- log in
- log out
- add poto
- add album
- add comment
- delete comment
- dll

## Tampilan Website

-Login
![Screenshot (220)](https://github.com/Maman1221/ujikom/assets/140770094/3a86473a-1084-46a0-ab59-65629ec2f7a5)

![Screenshot (219)](https://github.com/Maman1221/ujikom/assets/140770094/3e2e4bd7-c1ea-4873-b428-ba926ba28692)

-Dashboard
![Screenshot (221)](https://github.com/Maman1221/ujikom/assets/140770094/478e248b-e369-4ed8-8d95-aacf901bd0a1)

![Screenshot (222)](https://github.com/Maman1221/ujikom/assets/140770094/4d790ff1-17b4-4969-9aa2-c90ac9359e0a)

-Tambah Album
![Screenshot (223)](https://github.com/Maman1221/ujikom/assets/140770094/6d3e29fb-ce0c-4906-82b9-7cec0a971387)

![Screenshot (224)](https://github.com/Maman1221/ujikom/assets/140770094/ac37afbb-3db3-43c3-bc19-86b61b3279f1)

-Tambah Foto
![Screenshot (225)](https://github.com/Maman1221/ujikom/assets/140770094/50f72d9c-eaf0-4088-a3f1-5431d6541de1)

![Screenshot (226)](https://github.com/Maman1221/ujikom/assets/140770094/a00ec446-a84e-4037-b901-146e746f6ce3)

## ERD, Relasi dan UML Use Case

- ERD
- 
![ERD](https://github.com/Maman1221/ujikom/assets/140770094/1771c6c9-274a-42e2-94d2-fe1d78e6914a)

- Relasi

![Image](https://github.com/Maman1221/ujikom/assets/140770094/7f490808-024b-4676-ac50-0cd7b07de162)

- UML

![UML](https://github.com/Maman1221/ujikom/assets/140770094/f756209b-8ea8-4f45-82fa-c91c010234ae)


## Prasyaratan

- PHP 8.2.8 & Web Server (Apache, Lighttpd, atau Nginx)
- Database (MariaDB dengan v11.0.3 atau PostgreSQL)
- Web Browser (Firefox, Safari, Opera, dll)

## Instalasi
1. Clone Repository
```
https://github.com/Maman1221/ujikom.git
```

2. Install Composer
```
composer install
```
atau
```
composer update
```

3. Ganti .Env.example menjadi 
```
.env
```

4. Setting database di .env
```
DB_PORT=3306
DB_DATABASE=laravel_gallery
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key
```
php artisan key:generate
```

6. Jalankan migrate dan seeder
```
php artisan migrate --seed
```

7. Buat Storage Link
```
php artisan storage:link
```

8. jangan lupa menginstall NPM
```
npm install
```
lalu jalankan
```
npm run dev
```

8. Jalankan Serve
```
php artisan serve
```
