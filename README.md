# Composer PHP
## PHP Composer Web Application

### Directory Structure


```bash
php_composer/
│
├── composer.json
├── public/
│   └── index.php
├── src/
│   └── Controller/
│       └── HomeController.php
├── tests/
│   └── ExampleTest.php
└── .htaccess
```

### Install Composer dependencies
```bash
composer install
```

### Run Application Server
```bash
php -S localhost:8000 -t public
```

### Execution Tests
```bash
./vendor/bin/phpunit
```


