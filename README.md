######### About bingHR_assessment #########

BingHR interview home assessment. A user should be able to perform a CRUD operation on the application. There is a 'Add User' button at the top corner; when clicked should display a modal, as seen in the second attached image.

We also have an Action column in the table where a user can click on the delete icon to delete a user and an edit icon where a user can click to display the second image but pre-fill with the user's info. At that point, the 'Add User' should be replaced with 'Update User'.

######### Deliverables #########

1. Every bit of the design in the image above must be the same as the one in your application.
2. The entry point must be the user’s list, where the Users menu is highlighted by default.
3. A user should be able to add users, including their permission.
4. A user should be able to delete users.
5. A user should be able to update a user.
6. Feel free to add extra functionality as you see fit if you have the time.

Technologies: The application should be built with Laravel, HTML, CSS, and Javascript (Jquery). You can use the material UI/bootstrap/Tailwind framework if you wish

######### Installation Requirements #########

Use on the cloud or install a Local Hosting platform like XAMPP, WAMP etc

Server Requirement:

1. PHP V7.4 and above
2. MySQL (5.1+) via the MySQLi driver

######### Steps on how to install application offline #########

1. Download a copy of the application
2. Make sure you have your local webhosting platform running with a mysql database using toolkits such as eg. XAMPP, WAMP, MAMP etc.
3. Locate the .env file and put in your database details;
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=binghr_assessment_dbs
   DB_USERNAME=root
   DB_PASSWORD=
4. Run the database migration command to setup database table via artisan eg. command prompt: php artisan migrate
5. Open the application's url on your web browser
6. Done!
