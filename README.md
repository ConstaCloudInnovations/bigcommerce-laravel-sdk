# Laravel package for BIGCOMMERCE API integration. 
> This is not a official doc

## Installation
- Run below command to install package in your laravel project.

```
composer require laravel-sdk/bigcommerce
```
- After installation Go to project config/app.php file and add below line in provider section

```
Bigcommerce\BigcommerceServiceProvider::class,
```

## API Specification

```
This application adheres to the api specifications set us. This helps mix and match with laravel backend without conflicts.
```
[More information regarding the project can be found here](https://github.com/ConstaCloudInnovations/bigcommerce-laravel-sdk)
        

# Code overview

## Dependencies

- guzzlehttp 
```
A Guzzle is a PHP HTTP client that makes it easy to send HTTP requests with data, headers and trivial to integrate with web services. Guzzle is a simple interface for building query strings, POST requests, streaming large uploads, streaming large downloads, using HTTP cookies, uploading JSON data, etc.
```

## Environment variables

- .env 

```
Environment variables can be set in this file.you need to set three environment variable like given below example with dummy data.
```
- AUTH_TOKEN = "g34zmq36hfo0frsgil0uhgj7ylvvgzvt" 
AUTH_CLIENT = "pi6liqvcvbcveuu44bzr3hw00ie5ukxi9v2m"
STORE_HASH = "kmvyc5bz" 



# Routes
* [getallproducts] - To get all products you can use pagination like (http://127.0.0.1:8000/getallproduct?page=1&limit=10).
* [getproductsbyid] - To get single product (http://127.0.0.1:8000/getproductbyid?product_id=1272).
