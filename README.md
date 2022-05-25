# bingHR_assessment

BingHR interview home assessment

#####################################
Installation Requirements
#####################################

Use on the cloud or install a Local Hosting platform like XAMPP, WAMP etc

Server Requirement:

1. PHP V7.4 and above
2. MySQL (5.1+) via the MySQLi driver

############################################
Steps on how to install application offline
############################################

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
