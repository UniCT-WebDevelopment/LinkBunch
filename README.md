# LinkBunch

The link you need to remember

## About

Linkbuch is a service that enables users to create a portfolio containing shareable links. It is useful in many situations, for instance when you want to add a link to your digital Curriculum Vitae, or when you want to post your projects' links into your social networks' pages.

## Installation with docker

### Prerequisites

To run the software you need:

- Docker
- Docker compose

### Install
```sh
$ git clone 'githubRepository'
$ cd LinkBunch
$ docker-compose up -d --build site
$ docker-compose run --rm composer install
$ docker-compose run --rm npm install
$ docker-compose run --rm artisan migrate
```
#### Exposed ports

- **nginx** - `:80`
- **mysql** - `:3306`
- **php** - `:9000`
- **redis** - `:6379`

## Installation with XAMPP

### Prerequisites

To run the software you need:

- XAMPP

### Install
- Clone github repository
- Copy 'src' contents in '/xampp/htdocs/' directory
- Run XAMPP
- Open mysql
```sh
$ mysql -uroot --protocol=tcp
$ create database homestead;
$ grant all privileges on homestead.* to 'homestead'@'%' identified by 'secret' with grant option;
$ flush privileges;
```
- Run migration
```sh
$ php artisan migrate
```
> Enjoy LinkBunch on [http://localhost/public/](http://localhost/public/)

## With artisan

### Prerequisites

To run the software you need:

- Php 7.4
- Composer
- Npm
- Mysql

#### Install
- Clone github repository
- Open mysql
```sh
$ create database homestead;
$ grant all privileges on homestead.* to 'homestead'@'%' identified by 'secret' with grant option;
$ flush privileges;
 ```
- Migrate the database
```sh
$ php artisan migrate
```
- Run server
```sh
$ php artisan serve
```

> Enjoy LinkBunch on [localhost:8000](localhost:8000)

## Authors

* **Santino Isgrò**