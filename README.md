# PUB/ SUB System Home Exercise
## Candidate: Juan Carlos Ramírez Rivas

#### Installation:
The exercise was created with Laravel 7.0, so it left the links for its installation and requirements to run it.

https://laravel.com/docs/7.x#installing-laravel

#### Database

You can run the excersise with MySQL database, so you can setup the database with the following instructions: https://laravel.com/docs/7.x/database#configuration.

#### Running the test file 
You can run the test file typing `sh start-server.sh` or `./start-server.sh`, you can check the results in `'/events'` for all the topics and events, and `'/'` route for the JSON response. 

##### Notes:

I had to change the Header for `-H "Content-Type: application/json" -d` in line 1 in the test, in order to acept JSON body in request. Only for test purposes I disabled CSRF protection, this will not ask for API authentication to make the request.

If you have questions, I leave my email: ramirezrivasjc@gmail.com

Regards
