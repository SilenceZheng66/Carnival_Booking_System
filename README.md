# Carnival_Booking_System

## Describe
For celebrating the new year, we are holding a 5-days long Carnival.
Required by the sponsor of the carnival, we need to implement a “Carnival Booking System” , which will manage users’ registration, 
reservation and on-site checking-in of the Carnival. This system will allow people to register a user in it, when the user log in, 
he/she would be able to reserve a ticket for him(or her)-self. When the user arrives to the party place, 
he/she would be able to “check-in” offering his/her invitation code and corresponding password.

## Configuration
We suppose your machine has already have the PHP, Composer, MySQL and Git installed.
1. Run git clone https://github.com/silenceZheng66/Carnival_Booking_System.git or download .zip file to download 
   the project
2. Run 'composer install' to create needed directory(vendor).
3. Run 'npm install' to create node_modules.
4. Configure your own database information in the .env file(just rename '.env.example' to '.env'),and then
   focus on following content.
   ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cb_sys
    DB_USERNAME=your usr name
    DB_PASSWORD=your pwd
   ```
   Remember you need to choose an available database.
5. Run 'php artisan migrate' to create tables in your database.
6. Run 'php artisan serve' to start this app.
7. Maybe run 'php artisan key:generate' to generate your application encryption key first.
8. Maybe run 'npm install&&npm run dev' to make the js and css resources work.
9. You can customize the current date and the duration of the event in public/config/Conf.php

## Group work
1. 299922 worked on backend coding
2. 299909 worked on frontend coding
3. 299925 worked on database design and migrations
4. 299906 worked on text writing and resources collection

