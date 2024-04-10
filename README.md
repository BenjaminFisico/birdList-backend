## API project


## project Laravel-sail & docker
If you want to run this project, use the command: 

<code>docker-compose up</code>

and generate Database tables using command:

<code>docker-compose exec birdlist.backend php artisan migrate</code>

## project services

<h3>Bird lists backend</h3>
This a core of the API, and here is all of the code.

<h3>mysql</h3>
The database runs in this service. that is, all the data is stored here.
You can see all the database files in the folder with the same name.

<h3>mailHog</h3>
This service allows sending email to the users of system.
In this project is used to send registration and for update password emails.

## Author




