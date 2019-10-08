# Usage

## Installation
First require the package via composer:

`composer require --dev k10r/codestyle`

## Choose a version
After that, decide which configuration you want to use, currently the following configurations are supported:
- PHP 5.6
- PHP 7.0
- PHP 7.1
- PHP 7.2
- PHP 7.3

## Implementation
- Create a `.php_cs.dist` or add the one provided by the project to the root folder of your project.
- Change the version to one of the listed above
- Finally, add `.php_cs.cache`  to project specific `.gitignore` file
- Run php-cs-fixer with the following command: `vendor/bin/php-cs-fixer.phar fix --dry-run`
