<<<<<<< HEAD
# Ezumrah

Introduction
- Pull the git directory
- composer install / composer update
- npm install / npm update
- Run php artisan migrate
- run php artisan db:seed (this will add new admin - email:admin@admin.com, password:123456)

Don't 
- do not change the file app.js, vue.js and app.css under the folder public
- if u want to add global script or global css please add under extra.js and extra.css

Model

Standard to follow:
- create under folder Models (php artisan make:model Models/ModelName)
- use soft delete form important data
- cast attribute date and array/json


Controller 
- use resourceful controller (php artisan make:controller NameController --resource)
- For example check bus controller
- all data send to view/blade must include breadcrumb (check at function index)
- for form create and update please only use one file and control it at controller (for example check bus controller and bus form)

Menu/Navigation
- you can add navigation at views/templates/sidebar-menu.blade.php
=======
# ezumrah-master
ezumrah
>>>>>>> 18244685bb12a95c1a9cdcac052b688a67873a0b
