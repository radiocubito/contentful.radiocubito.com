# Personal Blog Starter Kit

## Quick Start

### Create a new site

Cloning the repo and removing the origin repo:

```bash
git clone git@github.com:radiocubito/wordful-starter-kit-personal-blog.git personal-blog
cd personal-blog
rm -rf .git
composer install
cp .env.example .env && php artisan key:generate
```
### Create the database

You must update the values of the DB_* entries in .env so they match your database and run the migrations.

```bash
php artisan migrate
```

### Recompile the CSS (Optional)

The [TailwindCSS](https://tailwindcss.com/) included in this kit is compiled with [PurgeCSS](https://purgecss.com/) to reduce filesize on any unused classes and selectors. If you want to modify anything, just recompile it.

```bash
npm i && npm run dev
```

To compile for production again:

```bash
npm run production
```

### Register a new user

If you're using [Laravel Valet](https://laravel.com/docs/valet), your site should be available at `http://personal-blog.test`. You can register a new user at `http://personal-blog.test/register`.

### Dashboard Authorization

Within your `config/site.php` file, there is an owner config that controls access to the Radiocubito Wordful dashboard. You should modify this email with your previously registered user email.

```php
return [

    'owner' => 'oliver@radiocubito.com',

];
```

### Build!

You can access the Radiocubito Wordful dashboard at `http://personal-blog.test/wordful` and login with your new user. Build your site, and have fun!
