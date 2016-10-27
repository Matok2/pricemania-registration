# Pricemania Registration

This is very simple registration form.

## How is this registration made

* Symfony 2.8 [link] (https://symfony.com/)
* DoctrineMigrationBundle [link] (http://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html)
* Bootstrap [link] (http://getbootstrap.com/) with datepicker [link] (https://github.com/uxsolutions/bootstrap-datepicker)

## Instalation

```
composer install
```

then set up parameters in app/config/parameters.yml file (not the best solution)

```
# This file is auto-generated during the composer install
parameters:
    database_host: 127.0.0.1
    database_port: null
    database_name: pricemania_registration
    database_user: root
    database_password: root
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    secret: ThisTokenIsNotSoSecretChangeIt
```

## Database
```
CREATE TABLE `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```
Or you can use migration command:

```
php app/console doctrine:migration:migrate
```


## Todo
- Password
 - Use password strength meter
 - Use better password policy (6 length of any character is not enough)
- Unique validation on email (very easy in symfony)
- Email notification about registration

## Author
Matej Kuna mat.kuna@gmail.com