
# LightWeight

A Lightweight,Simple PHP MVC Mini Framework. Built for Rapid Prototyping and Small-Scaled Projects.


## Installation

Installing LightWeight

Clone the repository to your xampp "htdocs" directory or to your wampp "www" directory:

```bash
  git clone https://github.com/heyitsnovi/LightWeight.git
```
Then go to LightWeight directory and run

```bash
composer install
```
Wait until all packages gets installed.

After Installation configure the .env file with your database credentials and  PROJECT_BASEURL

```
# Please Modify These Settings According To Your Set Up

PROJECT_BASEURL = http://localhost/Lightweight/
MYSQL_HOST		= localhost
MYSQL_USERNAME  = root
MYSQL_PASSWORD  = 
MYSQL_DATABASE  = lightweight_demo
MYSQL_CHARSET   = utf8
MYSQL_COLLATION = utf8_unicode_ci
MYSQL_PREFIX	= 

```


    
## Features

- Uses bramus/router PHP Router

- Uses Illuminate\Database package for expressive query builder, ActiveRecord style ORM, and schema builder

- Uses Rakit Validation - PHP Standalone Validation Library for Form Validation

- Anti XSS Library by Voku (voku/anti-xss)


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Acknowledgements

 - [Bramus Router](https://github.com/bramus/router)
 - [Rakit Validation](https://github.com/rakit/validation)
 - [Illuminate Database](https://github.com/illuminate/database)
 - [Voku Anti XSS](https://github.com/voku/anti-xss)

