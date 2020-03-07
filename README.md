# Product Availablity Check
Returns the available products with the conditions added in each service

## Basic Usage
Now we can check the product availabilty by 3 services.
1. speed_greater_than -which means, product will be shown or listed  only if product speed is greater than 'X'
2. color_not - This service has a rule which checks if a product color is not X
3. price_less_than - This service provides a check or rule for the price, say price should be less than 'X'

E.g;
```php
//Get /products?speed_greater_than=500&color_not=black&price_less_than=100
```

## Installation
composer require saheed/availability-check

## Migrate database
php artisan migrate:fresh

