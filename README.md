RESTAURANT WEBSITE MANAGEMENT SYSTEM
===================================

STUDENT INFORMATION
-------------------
Name           : WAEL BENALI
Student Number : 22040102050
Course         : Web Applications Development (FEE421)
Instructor     : Prof. Osman Şirvan
Academic Year  : 2025–2026


PROJECT DESCRIPTION
-------------------
This project is a Restaurant Website Management System developed for the
Web Applications Development course. The website allows customers to view
the restaurant menu, make online reservations, and contact the restaurant.

An admin panel is included to manage reservations and customer messages
securely.


TECHNOLOGIES USED
-----------------
Frontend:
- HTML5
- CSS3

Backend:
- PHP

Database:
- MySQL

Development Environment:
- XAMPP (Apache, PHP, MySQL)


PROJECT FEATURES
----------------
User Features:
- Home page with background video
- Menu page with food images and prices
- Online reservation system
- Contact form for customer communication

Admin Features:
- Secure admin login
- View and manage reservations
- View customer contact messages
- Logout functionality


PROJECT STRUCTURE
-----------------
restaurant-website/
|
|-- admin/
|   |-- login.php
|   |-- dashboard.php
|   |-- logout.php
|   |-- update-status.php
|
|-- assets/
|   |-- css/
|   |   |-- style.css
|   |
|   |-- images/
|   |   |-- pizza.jpg
|   |   |-- pasta.jpg
|   |   |-- burger.jpg
|   |   |-- dessert.jpg
|   |
|   |-- media/
|       |-- hero.mp4
|
|-- index.php
|-- menu.php
|-- reservation.php
|-- contact.php
|-- db_config.php
|-- README.txt


## Database Setup

1. Open phpMyAdmin
2. Create a database named `restaurant`
3. Click the `restaurant` database
4. Go to the Import tab
5. Import the file `database.sql`
6. Click Go

The database tables and default admin user will be created automatically.

ADMIN LOGIN
-----------
Admin Login URL:
http://localhost/restaurant-website/admin/login.php

Default Admin Credentials:
Username : admin
Password : admin123

(Note: Password is stored securely using hashing.)


HOW TO RUN THE PROJECT
---------------------
1. Install XAMPP.
2. Start Apache and MySQL.
3. Copy the project folder to:
   C:\xampp\htdocs\
4. Create the database using phpMyAdmin.
5. Open a browser and go to:
   http://localhost/restaurant-website/index.php


TESTING
-------
- Test menu display
- Test reservation submission
- Test contact form submission
- Test admin login and logout
- Test admin access protection


SECURITY
--------
- Password hashing
- Session-based authentication
- Protected admin pages
- Prepared SQL statements


PROJECT STATUS
--------------
Status: COMPLETED
