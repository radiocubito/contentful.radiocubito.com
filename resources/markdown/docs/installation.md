# Installation

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

You may use Composer to install RadioCúbito Wordful into your new or existent Laravel project:

```bash
composer require radiocubito/laravel-wordful
```

After installing RadioCúbito Wordful, you may publish its resources using the `wordful:install` Artisan command:

```bash
php artisan wordful:install
```

Finally, run the migrate Artisan command:

```bash
php artisan migrate
```

### Dashboard Authorization

RadioCúbito Wordful exposes a dashboard at `/wordful`. By default, you will only be able to access this dashboard in the local environment. To use it in another environment, you need to register a gate check.

You can determine which users of your application are allowed to view the RadioCúbito Wordful dashboard by defining a gate check called `viewWordful` within your app/Providers/WordfulServiceProvider.php file:

```php
// app/Providers/WordfulServiceProvider.php

public function boot()
{
   Gate::define('viewWordful', function ($user) {
       return in_array($user->email, [
            'oliver@radiocubito.com',
        ]);
   });
}
```

### Visit the Dashboard

After performing all these steps, you should be able to visit the RadioCúbito Wordful Dashboard at `/wordful`.

## Upgrading

When upgrading to a new version of RadioCúbito Wordful, you should re-publish RadioCúbito Wordful's assets:

```bash
php artisan wordful:publish
```

To keep the assets up-to-date and avoid issues in future updates, you may add the `wordful:publish` command to the `post-update-cmd` scripts in your application's `composer.json` file:

```json
{
    "scripts": {
        "post-update-cmd": [
            "@php artisan wordful:publish --ansi"
        ]
    }
}
```
