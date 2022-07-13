# Smartarget Whatsapp - contact Us for Bagisto
![Packagist Downloads](https://img.shields.io/packagist/dt/smartarget/bagisto-whatsapp-contact-us) ![Packagist License](https://img.shields.io/packagist/l/smartarget/bagisto-whatsapp-contact-us)

This extension integrates [Smartarget Whatsapp - Contact Us](https://smartarget.online/demo.html?ref=bagisto-composer&app=whatsapp) plugin.

## Requirements
- [Bagisto](https://github.com/bagisto/bagisto)

## Installation

### Install with composer

Require this package with Composer

	composer require smartarget/bagisto-whatsapp-contact-us

Add the ServiceProvider to the providers array in **config/app.php**

```php
Smartarget\WhatsappContactUs\Providers\WhatsappContactUsServiceProvider::class
```

Run below commands before publishing assets to the public folder:
```
composer dump-autoload
php artisan optimize:clear
php artisan storage:link
```

Go to Whatsapp tab in main menu and configure app!

### Install with package folder
1. Unzip all the files to **packages/Smartarget/WhatsappContactUs**.

2. Goto composer.json file inside the Bagisto root directory then add the following line under 'psr-4'
```
"Smartarget\\WhatsappContactUs\\": "packages/Smartarget/WhatsappContactUs/src"
```
3. Goto **config/app.php** file then add the following line under 'webkul packages'
```
Smartarget\WhatsappContactUs\Providers\WhatsappContactUsServiceProvider::class
```
4. Run below commands before publishing assets to the public folder:
```
composer dump-autoload
php artisan optimize:clear
php artisan storage:link
```

Go to Whatsapp tab in main menu and configure app!
