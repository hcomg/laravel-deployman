# Laravel Deployman

[![Latest Stable Version](https://poser.pugx.org/hcomg/laravel-deployman/v/stable)](https://packagist.org/packages/hcomg/laravel-deployman) [![Total Downloads](https://poser.pugx.org/hcomg/laravel-deployman/downloads)](https://packagist.org/packages/hcomg/laravel-deployman) [![Latest Unstable Version](https://poser.pugx.org/hcomg/laravel-deployman/v/unstable)](https://packagist.org/packages/hcomg/laravel-deployman) [![License](https://poser.pugx.org/hcomg/laravel-deployman/license)](https://packagist.org/packages/hcomg/laravel-deployman)

Deploy your Laravel applications via Github or Bitbucket Hooks

## Features

    1. Auto pull to server when new commit has been to pushed
    2. [Composer install] if have new package in composer.json file
    3. [Yarn install] if have new package in package.json file
    4. ...

### Requirements
    Laravel >=5.0
    PHP >= 5.5.9

## Installation
Open your terminal(CLI), go to the root directory of your Laravel project, then follow the following procedure.
1. Install Through Composer
    ```bash
    composer require hcomg/laravel-deployman
    ```

2. Add the Service Provider to `config/app.php`

    ```php
    'providers' => [
        ...
       Deployman\DeploymanServiceProvider::class,
    ],
    ```
3. Publish the config file
    ```bash
    php artisan deployman:publish
    ```
    To force publishing
    ```bash
    php artisan deployman:publish --force
    ```