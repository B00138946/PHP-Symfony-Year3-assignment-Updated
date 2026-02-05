PHP Year3 project done 2013 and now updated in 2026














# CRUD quickstart project

## Setup

To start working with this project you will need to:

- update `.env` with your MySQL credentials
- ensure the `migrations` folder exist, and is EMPTY!
- create the database with `symfony console d:d:c`
- create the SQL table creation (migration) code with `symfony console ma:mi`
- execute the SQL table creation (migration) code with `symfony console d:m:m`
- load the initial data (fixtures) into the DB with  `symfony console d:f:l`

## Run the web server

Run the Symfony web server with:
```bash
symfony serve
```


## Setup for testing

If you want to try out some of the tests (in folder `tests`) you'll need to set up the test environment database by doing the follow:

- create the database with `symfony console d:d:c --env=test`
- execute the (existing) SQL table creation (migrations) code with `symfony console --env=test`
- load the initial data (fixtures) into the DB with  `symfony console d:f:l --env=test`

## Run the tests

Run the Symfony web server with:
```bash
php vendor/bin/codecept run
```


