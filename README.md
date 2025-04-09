# Educational Resource Distribution Database

## About the Project

The **Educational Resource Distribution Database** aims to streamline the management and distribution of educational materials such as books, e-books, laptops, and other learning resources to schools, libraries, and students in Kenya. The project will ensure equitable distribution and efficient tracking of educational resources.

This application is built using **Laravel** and uses **Spatie** for role-based access control.

## Features

- **Efficient Resource Management** – Track and manage educational resources.
- **Transparent Distribution** – Monitor the movement of resources from suppliers to beneficiaries.
- **User Role Management** – Admin, Supplier, Donor, and Beneficiary roles with distinct permissions.
- **Query Optimization** – Performance improvements using indexing and optimized queries.

## Prerequisites

Make sure you have the following installed:

- PHP >= 8.0
- Composer
- MySQL or any other relational database
- Laravel 8.x or above

## Installation

Follow these steps to get the project running on your local machine:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/educational-resource-db.git
   cd educational-resource-db

    Install dependencies:

    Use Composer to install the necessary dependencies:

composer install

Configure environment variables:

Copy the .env.example file to .env:

cp .env.example .env

Update the .env file with your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=educational_resource_db
DB_USERNAME=root
DB_PASSWORD=

Generate the application key:

php artisan key:generate

Run database migrations:

The application requires certain database tables. Run the following command to apply migrations:

php artisan migrate

Seed the database:

The application includes seeders to populate initial data for testing. Run the following command to seed the database with roles, permissions, and users:

    php artisan db:seed

    This will create the initial roles (Admin, Supplier, Donor, Beneficiary) and assign them to users.

Database Structure

This project uses a relational database with the following tables:

    Users: Stores information about users and their roles (Admin, Supplier, Donor, Beneficiary).

    Resources: Stores information about educational resources.

    Suppliers: Tracks suppliers providing resources.

    Donors: Tracks donors contributing resources.

    Beneficiaries: Stores information about institutions (e.g., schools, libraries) receiving resources.

    Distributions: Tracks the distribution of resources from suppliers/donors to beneficiaries.

Relationships:

    One supplier can provide many resources.

    Many donors can donate many resources.

    Many resources can be distributed to many beneficiaries.

Accessing the Database

You can access and manage the database through your MySQL client (e.g., phpMyAdmin or MySQL Workbench) using the following credentials from the .env file:

    Database Name: educational_resource_db

    Username: Your MySQL username (default is root)

    Password: Your MySQL password (leave empty if none)

To run queries:

    Open your MySQL client.

    Connect to the educational_resource_db database.

    You can now run any SQL queries to interact with the tables.

Available Routes

The project provides different routes for users based on their roles. Here's how you can use the application based on roles:

    Admin:

        Manage users, resources, suppliers, donors, and beneficiaries.

        View reports and distribution logs.

    Supplier:

        View resources they have provided.

        Manage available resources for distribution.

    Donor:

        View and manage donations.

    Beneficiary:

        Track and receive resources.

Testing

To run tests for your application, use:

php artisan test

Customization

You can customize roles and permissions by editing the Role and Permission seeder files. You can also modify the routes and controllers to fit your specific use case.
Update Roles and Permissions

To update the roles and permissions, modify the RoleSeeder and PermissionSeeder files and run the following:

php artisan db:seed --class=RoleSeeder

License

This project is open-sourced software licensed under the MIT license.
Acknowledgements

    Spatie Laravel Permission: Used for managing roles and permissions.

    Laravel: The framework used to build this application.

    MySQL: The relational database management system.

Contact

For any inquiries, please reach out to:

    Email: your-email@example.com


### Key Points to Note:
1. **Database Setup**: Make sure the `.env` file is properly configured with the database credentials, and the database is created beforehand.
2. **Roles and Permissions**: The roles and permissions are seeded via the `RoleSeeder` and `PermissionSeeder`, and these roles are assigned to users in the `DatabaseSeeder`.
3. **Accessing the DB**: The database can be accessed using any MySQL client like phpMyAdmin or MySQL Workbench using the credentials set in `.env`.

This should help your team get started with using and interacting with the Educational Resource Distribution Database!

