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
- If you want to apply the changes simply use: `vendor/bin/php-cs-fixer.phar fix`
- Use the following command to take a look at the changes before applying them: `vendor/bin/php-cs-fixer.phar fix --dry-run`
