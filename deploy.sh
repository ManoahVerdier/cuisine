#!/bin/bash

git init
git remote add origin https://github.com/ManoahVerdier/cuisine.git
git pull origin master
cp ../composer.phar .
composer install
npm install
php artisan migrate
php artisan db:seed
cd public 
rm storage
ln -s ../storage/app/public/ storage
cd ..