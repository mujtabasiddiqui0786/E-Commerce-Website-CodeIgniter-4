# Overview

This E-Commerce website demonstrates the integration of Bootstrap 5, AJAX, and CodeIgniter 4 to build a modern and interactive online shopping platform. It provides essential features like product listing, product details, category filtering, user authentication, and a smooth shopping cart experience. Developers can use this application as a starting point and extend it to build a fully functional E-Commerce platform tailored to their specific needs. Enjoy exploring and enhancing the capabilities of this project!

## The Directory Flow ?

The Repository contains both the assignments. There is a folder named assignment on the top for the Two IQ questions. Both questions contains the solution with the commands to run it inside the file. 


## Setup

`git clone https://github.com/mujtabasiddiqui0786/mnasati-assignment.git` 


`cd mnasati-assignment`


`composer install`


`create a database`


`update the env file, and the app/config/Database.php/` with the database name


`php spark migrate`


`php spark db:seed CategorySeeder; php spark db:seed ProductSeeder; php spark db:seed ProductSubSeeder; php spark db:seed UserSeeder; php spark db:seed ProductSalesSeeder;`


`php spark serve`

## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
# E-Commerce Website with Bootstrap 5, AJAX, and CodeIgniter 4

This repository contains the source code for an E-Commerce website built using Bootstrap 5, AJAX, and CodeIgniter 4. Below is a list of features present in the application:

## Features:
### Dynamic Product Listing: 
The application displays a dynamic product listing page showcasing various products available for purchase.

### Product Details Page: 
Users can view detailed information about each product, including name, description, price, and images.

### Category Filter: 
Products are categorized, and users can filter products based on different categories to find their desired items easily.

### Multiple Product Images: 
Each product can have multiple images, displayed as a carousel on the product details page.

### Add to Cart: 
(TODO) Users can add products to their shopping cart with a single click using AJAX, providing a seamless user experience.

### Cart Notification: 
(TODO) After adding a product to the cart, a notification displays the number of items in the cart.

### Dynamic Header: 
The application's header is dynamic, changing based on the user's login status. When logged in, the user's name is displayed.

### User Authentication: 
The application supports user authentication. Users can log in using their email and password.

### User Session Management: 
User sessions are managed to keep users logged in across different pages.

### Logout Functionality: 
Users can log out of their accounts to end their session.

### Product Search: 
(TODO) A search feature is provided to help users find products based on keywords.

### Product Sales Model: 
The application uses a Product Sales Model with necessary relations to manage product sales.

### Product Category Model: 
The Product Category Model manages product categories, including category images.

### Bootstrap 5 Styling: 
The application's frontend is styled using Bootstrap 5, making it responsive and visually appealing.

### AJAX Requests: 
AJAX requests are used to handle asynchronous interactions between the frontend and backend, providing a smoother user experience.

### Dynamic Footer: 
The application's footer is designed to be dynamic, making it visually attractive.
