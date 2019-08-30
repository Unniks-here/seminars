<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<div style="background: lightgray; color: red; font-weight: bold; padding: 40px;">
This projecti has dependensies suitable for developers using phpStorm and Homestead. 
Clean alternative can be found <a href="https://github.com/raigu/laravel-5-bootstrap-with-socialite">here</a>.
</div>

## Laravel 5.4 Boilerplate 

Laravel 5.4 fresh default [project](https://github.com/laravel/laravel) that is extended with Facebook and Google authentication.
Social authentication is implemented using [Socialite package](https://github.com/laravel/socialite).

Project is suitable if:
* fresh Laravel 5.4 default project with authentication is needed
* laravel/homestead is used for development (includes [laravel/homestead](https://github.com/laravel/homestead) package)
* phpStorm IDE is used for editing (includes [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper) package)

Screenshot of the login page:

<img src="https://raw.githubusercontent.com/raigu/laravel-5-boilerplate/master/public/img/screenshot.jpg" title="Screenshot of Laravel 5.4 Boilerplate">

## Installation

```
$ git clone git@github.com:raigu/laravel-5-boilerplate.git path
$ cd path
$ composer install --dev
```

Starting boilerplate in vagrant

```
$ cp .env.example .env
$ php artisan key:generate
$ php vendor/bin/homestead make
$ vagrant up
$ vagrant ssh
vagrant@/home/vagrant$ cd /vagrant
vagrant@/vagrant$ php artisan migrate
```

Now you should see a hello wold page of the project in browser [http://192.168.10.10/](http://192.168.10.10/).
To use Facebook and Google authentications you have to get id and secret and initialize variables in .env file.


If you are using phpStorm IDE then generate IDE helper files. It will help the phpStorm to recognize Facades.
Go to the application root directory in vagrant machine and execute:

```
vagrant@/vagrant$ composer dev-update
```

## Contributing

No contributions are accepted. Author made it for his own use and it serves the author's purpose as it is. But feel free to fork it. 

## License

The raigu/laravel-5-boilerplate is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
