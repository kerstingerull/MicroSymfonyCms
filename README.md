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