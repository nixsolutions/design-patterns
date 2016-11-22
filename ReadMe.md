* php 7.0
* composer
* xdebug

 Install and run project
--
1. `composer install`
2. Create PHP Script for run Codeception tests in PHPStorm:
- **Run->Edit Configurations...** ;
- Add **PHP Script**;
- File path: `../vendor/bin/codecept`;
- Arguments: `run unit --coverage --xml --html -vvv`;
- Custom working directory: *root path project*.