<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/FadillMD/restfull-api-product/blob/master/public/rest-api-logo.png" width="400" alt="Laravel Logo"></a></p>

<!-- <p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p> -->

## About This API.

This is a simple RESTful API built using Laravel, designed for educational purposes to demonstrate CRUD operations and RESTful API design patterns. The API provides dummy data for products, allowing users to practice interacting with product information through standard HTTP requests.

## Features

This API includes basic functionalities to Create, Read, Update, and Delete (CRUD) product data, making it an ideal tool for developers looking to enhance their skills in API development and integration.

## Product Table Structure

The Product table consists of the following fields:

- **id: Unique identifier for each product (auto-incrementing)
- **product_name: The name of the product (string)
- **category: The category to which the product belongs (string)
- **price: The price of the product (decimal)
- **discount: Discount available on the product (decimal)

### API Endpoints

The following endpoints are available for interacting with the Product API:

- **GET /api/products: Retrieve a list of all products
- **GET /api/products/{id}: Retrieve a specific product by its ID
- **POST /api/products: Create a new product
- **PUT /api/products/{id}: Update an existing product
- **DELETE /api/products/{id}: Delete a product by its ID

## Getting Started

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Getting Started

Follow these steps to set up and run the project on your local environment:

1. **Clone this repository**:
    ```bash
    git clone https://github.com/FadillMD/restfull-api-product.git
    ```

2. **Navigate to the project directory**:
    ```bash
    cd restfull-api-product
    ```

3. **Install the project dependencies** using Composer:
    ```bash
    composer install
    ```

4. **Configure your environment** by copying the `.env.example` file and updating your database credentials:
    ```bash
    cp .env.example .env
    ```

5. **Generate an application key**:
    ```bash
    php artisan key:generate
    ```

6. **Run the database migrations** to create the `products` table:
    ```bash
    php artisan migrate
    ```

7. **Seed the database** (optional, if you have seeders):
    ```bash
    php artisan db:seed
    ```

8. **Run the development server**:
    ```bash
    php artisan serve
    ```

9. **Access the API** at `http://localhost:8000/api/products`.

You can now use tools like Postman or Insomnia to interact with the API or integrate it into your frontend application.


Feel free to modify this description to suit your needs further!

