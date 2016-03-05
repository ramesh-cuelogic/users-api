# users-api
```sh
 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers
 ```
 INTRODUCTION
------------

This project contains a sample REST API to get users using microservice architecture. This is uses PSR-4 autoloader.

 * For demo of the project, visit the link:
   http://52.89.235.194

REQUIREMENTS
------------

This project requires following tools:

 * php - 5.4.* (http://php.net/)
 * Lumen Framework - 5.2.* (https://lumen.laravel.com/)
 * PHP dotenv - ~2.2 (https://github.com/vlucas/phpdotenv)
 
INSTALLATION
------------

To setup this project, run the command below in your repository:

```sh
composer install
```
> Note: You need to have composer installe don your system firs. For more info please refer https://getcomposer.org/

 CONFIGURATION
-------------

Following are the steps for configuration
* Create ```.env``` file in the root directory
* Add the following configurations to the created ```.env``` file:
```sh
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomKey!!!

DB_CONNECTION=mysql
DB_HOST=YOUR_HOST
DB_PORT=3306
DB_DATABASE=DB_NAME
DB_USERNAME=USER
DB_PASSWORD=PASSWORD

CACHE_DRIVER=YOUR_CACHE_DRIVER
QUEUE_DRIVER=sync
```

MAINTAINERS
-----------

Current maintainers:
 * Ramesh M - https://github.com/ramesh-cuelogic
 * Irfan R - https://github.com/irfnr
 * Ashwini G - https://github.com/ashwinimg-cuelogic