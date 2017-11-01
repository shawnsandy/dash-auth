# Dashauth

Dash Auth is simple way to create & manage [Bouncer](https://github.com/JosephSilber/bouncer) Roles & Abilities.


## Install

Via Composer

* Add the package to your `composer.json` file as VCS repository, sorry there is no packagist install just yet.

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

* Add the SUPER_ADMIN_EMAIL to your .env file with the email of the registered user that will act as your super-admin.

``` txt
SUPER_ADMIN_EMAIL=my_super_admin_here@mysite.me

* Open yor `routes\web.php` file and add the following

``` php
Dashauth::routes();
```

![Alt text](/screenshot-auth-setup.jpeg?raw=true)

__Setup SuperAdmin Role__

* Next go to `yoursite.com/dashauth` and create a super admin


__Manage Roles Component__

Dash auth comes with a simple component to manage roles you can add the component `forms.roles` component to you user record.

``` php
<p class="subtitle is-3">Manage rolkes</p>

@component("dashauth::forms.privileges", [ "user" => $user_array ) ])
@slot('btn_class')  button is-link is-large is-uppercase  @endslot
@endcomponent
```

![Alt text](/screenshot-manage-ability.jpeg?raw=true)

__Manage Abilities (privileges)__

Assign and remove abilities to/from using the `dashauth::components.privileges` component.

``` php
 @component('dashauth::components.privileges')
 ```

* __Larvel 5.4x__

Add the service provider to the config/app.php file

``` php
"providers" => [
    ShawnSandy\DashAuth\DashAuthServicesProvider::class,
]
```

Add the facade to config/app.php file

``` php
aliases => [
"Dashauth" => ShawnSandy\DashAuth\DashAuthFacade::class,
]
```

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
