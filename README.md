Skapp
=======================

Introduction
------------
This is a skeleton application using the ZF2 MVC layer and module
systems.

This application is meant to be used as a **fast start** [ aka _/skapp/_ in out origin dialects ] place for those
looking to get their feet wet with ZF2.

This skeleton uses only composer to install dependencies and for autoloding.

Some usefull dependencies in order to work in a Nginx/Mongo/SphinxSearch environment
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

*Note:* The built-in CLI server is *for development only*.

*Note:* In oreder to decline static file requests back to the PHP built-in webserver, you've to de-comment a code block inside public/index.php

### Nginx Setup

To setup nginx, open your `/path/to/nginx/nginx.conf` and add the [ìnclude directive](http://nginx.org/en/docs/ngx_core_module.html#include) below into `http` block (if doesn't exists):

    http {
        # ...
        include conf.d/*.conf;
    }

Create a virtual host configuration file for your project under `/path/to/nginx/conf.d/project-name.tld.conf`
it should look something like below:

    server {
        listen       80;
        server_name  project-name.tld;
        root /path/to/project-name/public;
        index index.php;
    
        location / {
            try_files $uri $uri/ /index.php;
        }
    
        location ~* \.php$ {
            # Pass the PHP requests to FastCGI server (php-fpm) on 127.0.0.1:9000 or using unix socket
            fastcgi_pass   unix:/path/to/fpm-your-project.sock;
            fastcgi_param  SCRIPT_FILENAME /path/to/project-name/public/index.php;
            fastcgi_param  APPLICATION_ENV development;
            include fastcgi_params;
        }

    }

Restart the nginx, now you should be ready to go!
