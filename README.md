## About this project
This is a Simple Task Management Web Application built using Laravel 6.0. It has the following functionality:

The Following CRUD Features have been implemented:

- Users can create and add a new Task
- Users can read all Tasks or view a single task
- Users can update a Task by editing and making changes
- Users can delete a Task
- Users can mark a task as completed
- Users can revert the above point, and mark a completed task as not completed

**Authentication:**
- Users can Register and Login, as well as reset their password.
- To access any part of the system users must first login or register. The app also uses laravels security features to enforce this and make sure restricted webpages cannot be accessed by unauthorised users.
- Users can also view their profile by going to the My Account page.

**Search:**
- Users can search active tasks by entering whole or part of the task name into the search box from the My Tasks Screen.

**Users can Filter Tasks by selecting the desired option from the main dashboard. They can filter by the following:**
- Show all Active Tasks
- Show Tasks which are Overdue
- Show Tasks which have been marked as completed

## How to Install
Clone the repository

Go to the folder where cloned using `cd` command on your cmd or terminal

Run `composer install` on your cmd or terminal

Copy `.env.example` file to `.env` on the root folder of the project.

Open the `.env` file and change the database name `(DB_DATABASE)`. 
The `DB_USERNAME` and `DB_PASSWORD` should be set to your configuration.
If you would like to allow users to reset their password then you must also specify the mail server details in the `.env` file.

In terminal, from the root folder of the project run the following:

`php artisan key:generate`

`php artisan migrate`

`php artisan serve`

You should then get a link to where the project is running. It is usually `localhost:8000`. 
You can run go to this link in your browser. 

## Author

Module CHT2520: Advanced Web Programming

