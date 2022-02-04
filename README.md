![image](https://repository-images.githubusercontent.com/408896876/cb93698f-9066-4dfc-b1d7-2985696c169e)

# Learning Laravel

![Fork Repo](https://img.shields.io/github/forks/tighten/learning-laravel?label=Fork)

This is a series designed to show off various features of Laravel in easily consumable projects. For fun, we decided to create these projects around the theme of Carmen Sandiego, an international thief who has appeared in video games and television shows since 1985.

## Requirements
- PHP >= 7.3
- MySQL
- A [local environment](https://laravel.com/docs/8.x/installation#your-first-laravel-project) for a Laravel project.

## Installation

Start by using the README badge above to fork this repo locally.
```bash
cp .env.example .env
composer install
npm install
php artisan key:generate
```

create local database (`laravel` by default)

```bash
php artisan migrate
```

## Technologies Used
- [Laravel 8](https://laravel.com/docs/8.x)
- [TailwindCSS](https://tailwindcss.com/)
- [Laravel Breeze Authentication](https://laravel.com/docs/8.x/starter-kits#laravel-breeze)

## Testing

```bash
php artisan test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email hello@tighten.co instead of using the issue tracker.

## Credits

- [Kristin Collins](https://github.com/krievley)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
