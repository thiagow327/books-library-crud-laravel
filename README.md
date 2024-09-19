* Book Library

## Description

This is a simple book library application that allows users to add, edit, and delete books from a list.

## Technologies

* Laravel 11
* PHP 8.2
* MySQL 8.0
* Docker
* Composer

## Features

* List all books from the list
* View a single book from the list
* Add books to the list
* Edit books from the list
* Delete books from the list

## Installation

1. Clone the repository
2. Access the project directory
3. docker-compose up

## Usage API

1. Use INSOMNIA or POSTMAN to test the API
2. Use the following endpoints:
    - GET /books
    - GET /books/<id>
    - POST /books
    - PUT /books/<id>
    - DELETE /books/<id>
3. Use the following JSON format for POST and PUT requests:

```json
    {
        "title": "Mastering PHP",
        "author": "John Doe",
        "isbn": "9780987654343",
        "quantity_pages": 350,
        "edition": "1st Edition",
        "publisher": "Code Press"
    }
```

4. The API will return a JSON object with the book information.

## Usage WEB

1. Access the web interface at http://localhost:80
2. Use the web interface to add, edit, and delete books from the list.
