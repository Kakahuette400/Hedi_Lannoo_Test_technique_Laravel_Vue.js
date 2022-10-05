#Test Technique - DEVELOPPEUR PHP - LARAVEL 

[![Maintainability](https://api.codeclimate.com/v1/badges/73791429b4aec845712f/maintainability)](https://codeclimate.com/github/Kakahuette400/Hedi_Lannoo_Test_technique_Laravel_Vue.js/maintainability)

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/045dd7ce2e994f28a194b3c5a24de043)](https://www.codacy.com/gh/Kakahuette400/Hedi_Lannoo_Test_technique_Laravel_Vue.js/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Kakahuette400/Hedi_Lannoo_Test_technique_Laravel_Vue.js&amp;utm_campaign=Badge_Grade)

## Installation
- PHP 8.0.2
- MySql 5.7.36
- Apache 2.4.51
- Laravel 9.19

## Requirements
- Localhost
  For this project I used WAMPSERVER avaible here : https://www.wampserver.com/ (include PHP/SQL/APACHE)

## Installing the project:
Step 1: Clone the Repository on server from the root with the command: **git clone https://github.com/Kakahuette400/Hedi_Lannoo_Test_technique_Laravel_Vue.js.git**

Step 2: Install composer on your project if it's not already the case: https://getcomposer.org/
- Modify your "DATABASE_URL=" in .env file
- Modify your "MAILER_DSN=" in .env file (Only if you want to use change password function)
- Install node.js to install different JS packages available on : https://nodejs.org/fr/download/ with "npm install" 
- Install all dependencies available on : https://packagist.org/ whit "composer install"
- Read the documentation to customize your installation

Step 3: To create a database follow this instructions :

`Follow this instructions to create and build your database `

    1 - Create database on your DBMS manually
    2 - On your terminal : php artisan make:migration 
    3 - php artisan migrate --seed 
    4 - Go to your DBMS manually and replace the role of one user for ROLE_ADMIN

Step 4: Run the application :

`Place this command in your terminal `

    php -S localhost:8000 -t public  

Step 5: Go to http://localhost:8000/login :

`You have 2 choices : `

    Admin - Keep the email of your administrator on your DBMS.
    User  - Keep A random email on your DBMS. (Except Admin :D )
    Password : password
