# Carnival_Booking_System

## Describe
For celebrating the new year, we are holding a 5-days long Carnival.
Required by the sponsor of the carnival, we need to implement a “Carnival Booking System” , which will manage users’ registration, 
reservation and on-site checking-in of the Carnival. This system will allow people to register a user in it, when the user log in, 
he/she would be able to reserve a ticket for him(or her)-self. When the user arrives to the party place, 
he/she would be able to “check-in” offering his/her invitation code and corresponding password.

## Configuration
We suppose your machine has already have the PHP, Composer, MySQL and Git installed.
0. Run git clone https://github.com/silenceZheng66/Carnival_Booking_System.git or download .zip file to download 
   the project
1. Configure your own database information in the .env file
2. Run 'php artisan migrate' to create tables in your database
3. You can customize the current date and the duration of the event in public/config/Conf.php

