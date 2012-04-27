Symfony-Starter
========================

This starter kit assumes you know how to use Symfony, and have already checked to
ensure that it will run.

1) Download and Clean
---------------------

Run the following commands:

    git clone --origin SpenserJ-Symfony-Starter http://github.com/SpenserJ/Symfony-Starter.git project_name
    cd project_name

2) Add your remote git repository
---------------------------------

    git remote add origin your_git_url_here
    git add .
    git commit -m "Initial commit based on SpenserJ's Symfony-Starter kit"
    git push -u origin master

3) Installation
---------------

### a) Set the permissions

    sudo setfacl  -Rm u:www:rwx app/cache app/logs
    sudo setfacl -dRm u:www:rwx app/cache app/logs
    sudo setfacl  -Rm u:`whoami`:rwx .
    sudo setfacl -dRm u:`whoami`:rwx .

### b) Install the Vendor Libraries

    php bin/vendors install

### c) Configure the application

    http://localhost/Symfony/web/config.php

### d) Install the default database structure

    php app/console doctrine:schema:update --force

### e) Create your account

    php app/console fos:user:create admin admin@example.com ThisPasswordIsActuallyQuiteSecure!

4) Future Updates
-----------------

If you ever want to pull the most recent Symfony-Starter updates, run

    git pull SpenserJ-Symfony-Starter