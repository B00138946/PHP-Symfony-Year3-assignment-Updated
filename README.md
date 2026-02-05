# PHP Symfony Year3 project
## Completed in 2023 and now updated in 2026
A online shopping website where admins can add, edit, and delete clothing products through a CRUD interface. All products are stored in a MySQL database and are displayed on the website's homepage. Users can register and log in, and once logged in they can view available products, including details such as brand, price, and images. The system uses role-based access, ensuring only admins can manage products while customers can browse the store securely.












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





