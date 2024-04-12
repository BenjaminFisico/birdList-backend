## API project


## project Laravel-sail & docker
If you want to run this project, use the command: 

<code>docker-compose up</code>

and generate Database tables using command:

<code>docker-compose exec birdlist.backend php artisan migrate</code>

## project services

<h4>Bird lists backend</h4>
This a core of the API, and here is all of the code.

<h4>mysql</h4>
The database runs in this service. that is, all the data is stored here.
You can see all the database files in the folder with the same name.

<h4>mailHog</h4>
This service allows sending email to the users of system.
In this project is used to send registration and for update password emails.

## Author




