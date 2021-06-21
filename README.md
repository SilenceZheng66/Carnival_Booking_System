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
2. Configure your own database information in the .env file, focus on following content.
   ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cb_sys
    DB_USERNAME=your usr name
    DB_PASSWORD=your pwd
   ```
   Remember you need to choose an available database.
3. Run 'php artisan migrate' to create tables in your database.
4. Run 'php artisan serve' to start this app.
5. You can customize the current date and the duration of the event in public/config/Conf.php
6. Maybe run 'npm install&&npm run dev' to make the js and css resources work

## Group work
1. 299922 worked on backend coding
2. 299909 worked on frontend coding
3. 299925 worked on database design and migrations
4. 299906 worked on text writing and resources collection

