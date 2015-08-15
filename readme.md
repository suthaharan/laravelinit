## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Laravel, Composer setup

To setup Laravel, first install composer from https://getcomposer.org/download/. 

Next step is to download the Laravel installer using Composer.

$ composer global require "laravel/installer=~1.1"

Make sure to setup composer in the path variable to help you install and manage dependencies. The path will composer will be installed is notified when the above command is run.

Issue the laravel command to setup the website now.

$ laravel new website

### System requirements for running Laravel 5

PHP >= 5.4
Mcrypt PHP Extension
OpenSSL PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension


### Useful commands to setup Laravel in your local environment

$ php artisan make:migration create_users_table --table=users --create

Make the necessary database setting changes in the .env file that is present in the root. 

$ php artisan migrate

To insert test values, you can use the tinker command

$ php artisan tinker

$user = new App\User;
$user->email = 'sutha@gmail.com';
$user->password = Hash::make('sutha');
$user->status = 1;
$user->save();
