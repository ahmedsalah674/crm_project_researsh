<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About project

- frist you will need at least laravel 7.2.

## Clone Project

open cmd on file to download the project in it then write this command line.

if you didn't download the project you will need this command.

- git clone https://github.com/ahmedsalah674/crm_project_research.git 

then you will countinue .

## After Clone

if you orready download it from the link or you used first way you will open cmd or countinue in your cmd and start from here.

- cd (the dirction of project file) for example : cd G:\New folder (2)\crm_project_researsh 

- composer install 

- copy .env.example .env

- php artisan key:generate

now you need to open phpmyadmin and create a new database and name it ('crm')

- php artisan migrate

- php artisan db:seed

- php artisan serve

now project is ready but please note that you cann't rejester  you will use this admin account to create a new users(admins,employees,customer) .

- username:admin@admin.com .

- password:123456789 .

