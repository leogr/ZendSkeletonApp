ZendSkeletonApp
=======================

Introduction
------------
This is my skeleton application using the ZF2 MVC layer and module
systems. This application is meant to be used as a starting place for those
looking to get their feet wet with ZF2.
This skeleton uses only composer to install dependencies and for autoloding.
Some usefull dependencies in order to work in a Nginx/Mongo/Sphinx environment
are included in composer.json.

Installation
------------

Using Composer
----------------------------
The only way to get a working copy of this project is to clone the repository
and use `composer` to install dependencies:

    composer install




### PHP CLI Server

The simplest way to get started if you are using PHP 5.4 or above is to start the internal PHP cli-server in the root directory:

    php -S 0.0.0.0:8080 -t public/ public/index.php

This will start the cli-server on port 8080, and bind it to all network
interfaces.

**Note: ** The built-in CLI server is *for development only*.
**Note: In oreder to decline static file requests back to the PHP built-in webserver, you've to de-comment a code block inside public/index.php

### Nginx Setup

TODO
