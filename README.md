Copy kerstingerull/microsymfony to new repository
=================================================

* on github you can import an existing repository to a newly created

Change existing project to new repository
=========================================

* git remote remove origin
* git remote add origin https://github.com/kerstingerull/MicroSymfonyCms.git
* git remote show origin
    * to check the repository
    
Changed the TestBundle to PageBundle
====================================

* tried to add a routing for parameters
    * does not work :(
    
Added bin/console
=================

* to be able to clear cache
```php bin/console cache:clear```

Fixed Routing
=============

* added .htaccess file from my big symfony project
    * changed app.php to index.php
    
Adding Database connection
==========================
* adding doctrine with composer   
```composer require doctrine/orm```  
```composer require doctrine/doctrine-bundle```  

Creating Database
=================

```php bin/console doctrine:generate:entities PageBundle:Page```  
* does not work

```php bin/console doctrine:mapping:info```  
* check mapping
    * ORM Mapping is missing
    * only getters and setters does not work
    * have to add @ORM data
* now doctrine:generate:entities work
    * but does not create database table
    
```php bin/console doctrine:schema:update```
* does create the database table with --force

Adding Twig Template
====================
* no need to install something
    * just add TwigBundle to AppKernel

Adding Debugging
================
* no need to install something
    * just add DebugBundle to AppKernel when env is dev or test

Adding ParamConverter for Controller Action
===========================================

```composer require sensio/framework-extra-bundle```

Adding Error Pages
==================