-----------------------------------------------------------------
## Laravel Auth

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)  PHP 8.1 Laravel 9

Ten projekt obejmuje stworzenie kopletnej platformy prasowej, jeśli ktoś jest zainteresowany tworzeniem ze mną zapraszam do kontaktu
This one complete the project, shared communication platform if anyone is interested in creating visited with me to contact

Obecnie aplikacja obejmuje:

This aplication connect two project from github </br>
 https://github.com/jeremykenedy</br>
 https://github.com/abby2727/true-tech-source -- w trakcie usuwania w zamian będzie używany szablon
 https://github.com/binshops/laravel-blog.git

I modified the code a little and added my own

### About
Laravel 9 with user authentication, registration with email confirmation, social media authentication, password recovery, and captcha protection. Uses official [Bootstrap 4](https://getbootstrap.com). Panel CMS for articles, comments, and example page

### Routes
/ - home page to delete
/en/strona - page in building
/panel - profil admin and administrator to change user profil and administrator have access to administrator panel
/blog_admin - CMS to create content with comments and categores of this contents

### Seeds
##### Seeded Roles
  * Unverified - Level 0
  * User  - Level 1
  * Administrator - Level 5

##### Seeded Permissions
  * view.users
  * create.users
  * edit.users
  * delete.users

##### Seeded Users

|Email|Password|Access|
|:------------|:------------|:------------|
|user@user.com|password|User Access|
|admin@admin.com|password|Admin Access|

#-----------------------------------------------------------------
#INSTALL

You need commit this code

$ git commit (link to this repositores)

You need instal required composer

$ composer install

You need install node

$ npm install

You need restart your computer and add your npm to path

You need create database and make migrate

$ php artisan migrate

You need to modification php.init in your xampp server ;extension=gd to extension=gd

$ You need import database to your phpmyadmin

And start server 127.0.0.1:8000

$ php artisan serve

----------------------------------------------------------------
