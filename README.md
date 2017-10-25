# Dashauth

Dash Auth is simple way to create & manage [Bouncer](https://github.com/JosephSilber/bouncer) Roles & Abilities.


## Install

Via Composer

* Add the package to your `composer.json` file as VCS repository

``` json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/shawnsandy/dash-auth"
        }
    ],
```
* From the command prompt run the following

``` bash
$ composer require shawnsandy/dash-auth
```

## Usage

__Quick Start__ Laravel 5.5x and greater

* Add the SUPER_ADMIN_EMAIL to your .env file

``` txt
SUPER_ADMIN_EMAIL=supperadmin@someadd.me
```

* Open yor `routes\web.php` file and add the following

``` php
Dashauth::routes();
```

* Next go to `yoursite.com/dashauth` and create a super admin

![Alt text](/screenshot-auth-setup.jpeg?raw=true)

* __Larvel 5.3x__

Add the provider the

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email shawnsandy04@gmail.com instead of using the issue tracker.

## Credits

- [Shawn Sandy][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
