##Build composer.json


* composer init
    * composer is already installed globally
    
##Adding README.md

* to add this text here :)

##Install symfony with composer

* composer install

##Add index.php as starting point

* add app/AppKernel
* try to use it
    * autoload is missing

##Add Autoload

* vendor/autoload.php is already there and returns a loader
    * now the Request is available, but AppKernel is missing

* add app/autoload.php and load this in index.php instead of vendor/autoload.php
    * require the vendor/autoload.php in this
    * still the Request is available, but AppKernel is missing

* autoloading is added in the composer.json by hand
    * then run composer dumpautoload

##To see something

* add Bundle
    * add Bundle.php and Controller with test Action
* add Bundle and Symfony Framework to AppKernel
* add routing
    * which needs secret and router configuration for the framework (config.yml)
    
##the final directories and folders (for git)
the other stuff is generated, eg.
composer.json, the cache and log files in var/*, the whole vendor directory
```
|-- root
    |-- app
        |-- config
            |-- config.yml
            |-- config_dev.yml
            |-- parameters.yml
            |-- routing.yml
        |-- AppKernel.php
        |-- autoload.php
    |-- src
        |-- TestBundle
            |-- Controller
                |-- TestController.php
        |-- TestBundle.php
    |-- composer.json
    |-- index.php
    |-- README.md (this file)
```

##add existing project to github
https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/