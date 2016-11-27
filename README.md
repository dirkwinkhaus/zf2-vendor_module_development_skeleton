ZendModuleDevelopmentSkeleton
=============================

Introduction
------------
With this skeleton you have the main structure to develop a new zend module and 
test it within a zend [framework 2 (2.5.3) skeleton application](https://github.com/zendframework/ZendSkeletonApplication).

This project uses a vagrant machine from [www.puphpet.com](http://www.puphpet.com) 
for development which does only contain a NGINX and PHP 7.0 with XDebug enabled.
There is a demo module contained to see how to setup your own module development
with composer.

Installation
------------
To create your development project clone this repository by  

    git clone XXXXXX

Then you have to insert this line in your hosts file:

    192.168.56.125 moduledev.local

After that you simple have to start the vagrant machine by running 

    vagrant up 
   
from the root directory of this project. To see how Vagrant works 
see [this](https://www.vagrantup.com/).

Keep in mind to run 

    composer install
    
in the application and in your module directory.

To activate your module in zend insert this line into your application config
module array:

        'Vendor\Module\Name',


After Development
-----------------

The module you are developing will first be a path repository for composer:

        {
                    "type": "path",
                    "url": "../../packages/my-package"
        }

After that if you do not want to make a packagist project of it you can 
implement it by composer over your own git repository:
        {
            "type": "vcs",
            "url": "ssh://git@your_git_repository/vendor/module-name.git"
        },
