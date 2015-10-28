# Amazon product search web API

Simple web API based on
[sergeylukin/amazon-product-search](https://github.com/sergeylukin/amazon-product-search)

# Installation

Install [git](http://git-scm.com) and [composer](http://getcomposer.org)

```
git clone https://github.com/sergeylukin/amazon-product-search-api.git
```

```
composer install
```

```
php -S localhost:8080 -t public
```

# Usage

## Get first product from amazon.com store by keyword

Send HTTP GET request to following endpoint:

```
http://localhost:8080/api/v1/products?keyword=
```

with your keyword appended after `?keyword=`

# License

MIT
