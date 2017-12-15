# Dashauth

Dash Auth is simple way to create & manage [Bouncer](https://github.com/JosephSilber/bouncer) Roles & Abilities.


## Install

Via Composer

``` json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/shawnsandy/dash-auth"
        }
    ],
```
* Add the package to your `composer.json` file as VCS repository, sorry there is no packagist install just yet.

``` bash
$ composer require shawnsandy/dash-auth
```
* From the command prompt run the above to install the package


## Usage

__Quick Start__ Laravel 5.5x and greater

``` txt
SUPER_ADMIN_EMAIL=my_super_admin_here@mysite.me
```
* Add the SUPER_ADMIN_EMAIL to your .env file with the email of the registered user that will act as your super-admin.

``` bash
php artisan vendor:publish --tag=dashauth-config
```
* From the console use the `--tag` option to publish `config file`

``` php
   'roles' => [
        'superadmin' => "Super Admin",
        'admin' => "Admin",
        'staff' => "Staff",
        'editor' => "Editor",
        'member' => "Member",
    ],

    'abilities' => [
        'assign_roles' => 'Assign Roles',
        'manage_users' => 'Manage Users',
        'manage_posts' => 'Manage Posts',
        'manage_admin' => 'Manage Site',
        'manage_systems' => 'Manage Systems',
    ],
```

* Edit the config settings (optional), go to `config/dashauth.php`


``` php
Dashauth::routes();
```
* Add the default dash routes, open `routes\web.php` file and add the above


![Alt text](/screenshot-auth-setup.jpeg?raw=true)

__Setup SuperAdmin Role__

* Set the superadmin email in you `.env` file `SUPERADMIN_EMAIL=youremail@you.com`
* Next go to `yoursite.com/dashauth` and create a super admin
* Manage \ View privileges `yoursite.com/dashauth/privileges`

__Manage Roles Component__

Add the manage roles component to application passing the user info `$user = User::find(1)`

``` php
<p class="subtitle is-3">Manage Roles</p>

@component("dashauth::forms.privileges", [ "user" => $user ) ])
@slot('btn_class')  button is-link is-large is-uppercase  @endslot
@endcomponent
```
* Dash auth comes with a simple component to manage roles you can add the component `forms.roles` component to you user record.


![Alt text](/screenshot-manage-ability.jpeg?raw=true)

__Manage Abilities (privileges)__

``` php
 @component('dashauth::components.privileges')
 ```

* Assign and remove abilities to/from using the `dashauth::components.privileges` component.

 __Larvel 5.4x__

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
