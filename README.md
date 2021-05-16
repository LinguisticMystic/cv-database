## Project description

A tool for creating and storing résumés in a database. The front page shows a list of all résumés in the database
and gives the option to edit and delete them. The print button opens a page with a layout for printing.

It is possible to add multiple education and work experience fields to a résumé.

Project made using the Laravel 8 framework.

## Project setup

- Create a local database named `test_project`
- Rename the `.env.example` file to `.env` and fill in the database information.
- Open a terminal inside the project directory and run the following commands:
    - Run `composer install`
    - Run `php artisan key:generate`
    - Run `php artisan migrate`
    - Run `php artisan db:seed`
    - Run `php artisan serve`
- Access the project at `localhost:8000`

