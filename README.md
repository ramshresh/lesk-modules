LESK Modules
===================
[![License](https://img.shields.io/badge/licence-GPLv3-brightgreen.svg)](https://tldrlegal.com/license/gnu-general-public-license-v3-(gpl-3))

This is a fork of the excellent [Caffeinated Modules](https://github.com/caffeinated/modules) with some cutomization to work specifically in the [Laravel Enterprise Web application Starter Kit or LESK](https://github.com/sroutier/laravel-5.1-enterprise-starter-kit)

Caffeinated Modules is a simple package to allow the means to separate your Laravel 5 application out into modules. Each module is completely self-contained allowing the ability to simply drop a module in for use.

The package follows the FIG standards PSR-1, PSR-2, and PSR-4 to ensure a high level of interoperability between shared PHP code. At the moment the package is not unit tested, but is planned to be covered later down the road.

Documentation
-------------
You will find user friendly and updated documentation in the wiki here: [Caffeinated Modules Wiki](https://github.com/caffeinated/modules/wiki)

Quick Installation
------------------
Begin by installing the package through Composer.

```
composer require ramshresh/lesk-modules
```

Once this operation is complete, simply add both the service provider and facade classes to your project's `config/app.php` file:

#### Service Provider

```php
Ramshresh\LESKModules\ModulesServiceProvider::class,
```

#### Facade

```php
'Module' => Ramshresh\LESKModules\Facades\Module::class,
```

And that's it! With your coffee in reach, start building out some awesome modules!
