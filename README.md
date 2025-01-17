# About the project

This is a laravel based project. the fitur of this project is to display the calendar event for basket ball event. the calendar has some fitur such a show event based on month or date. the day which have event will show badge number count of how many event at that day. and you can click the day to show the list detail of the event at the day. the calendar also has fitur to filter event based on league or team selection. The project use plugin zabuto jquery calendar.

## Getting started

### Launch the project

Fork this repository, then clone your fork, and run this in your newly created directory:

```bash
composer install
```

Next you need to make a copy of the `.env.example` file and rename it to `.env` inside your project root.

don't forget to make database first, in this project the name of database is `calendar`

and setting the connection of database in your env

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=calendar
DB_USERNAME=root
DB_PASSWORD=
```

Run the following command to generate your app key:

```
php artisan key:generate
```

Run the following command to migrate the database:

```
php artisan migrate
```

Run the following command to run seeding data to the database:

```
php artisan db:seed
```

Then start your server:

```
php artisan serve
```

You can access the project via this url:

```
http://127.0.0.1:8000/
```

or 

```
http://localhost:8000/
```