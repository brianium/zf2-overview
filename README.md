ZF2 Overview
============

2 examples of using ZF2 built for [GrPHPDev](http://www.meetup.com/GrPhpDev/)

Slides found [here](http://slid.es/brianscaturro/zend-framework-2)

This repo contains 2 applications:

##hydrator-http##
This is a simple application built using the [Silex](http://silex.sensiolabs.org/) microframework, and a couple of ZF2 components - namely Zend\Http, and Zend\Stdlib for Hydrator support.

This app fetches collaborators on a github repository by viewing /{owner}/{repo}, i.e /brianium/paratest.

ZF2 components and Silex are included via composer, so from the repo root:

```
cd hydrator-http
composer install
```

You can run the app using the built in PHP web server. The web application lives at web/index.php

```
php -S localhost:8080 -t web/
```

##application##
This is a ZF2 MVC application. It is built off of the [ZF2 Skeleton Application](https://github.com/zendframework/ZendSkeletonApplication). 

It leverages the [ZfcUser](https://github.com/ZF-Commons/ZfcUser) module for ready-baked authentication.

###Requirements###
The ZfcUser module uses mysql to store user information, so you will need that running and installing. You will need to create a database called `zfoverview` for things to work. You can configure mysql stuff in `application/config/autoload/database.local.php`

composer is used to manage dependencies in this app as well so:

```
cd application
composer install
```

###Run the app###
The app can be run with the local php server as well:

```
cd application
php -S localhost:8080 -t public/
```

###Note on Zend\Http\Client###
The Zend\Http\Client at the time this app was created, does not work with Zend's ZendService\Twitter\Twitter client. After doing a composer install you will need to update line 1358 of Zend\Http\Client.php to the following"

```php
self::getAdapter()->connect($uri->getHost(), $uri->getPort(), $secure);
```

##Application features##
This is a toy application that uses ZendService\Twitter\Twitter to search tweets and demonstrate the ZfcUser module for authentication.

You can login/register at /user
The tweet searcher is visible at /tweets after logging in.