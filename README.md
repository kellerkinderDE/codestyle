# Usage

## Installation
First require the package via composer:

`composer require --dev k10r/codestyle`

## Choose a version
After that, decide which configuration you want to use, currently the following configurations are supported:
- PHP 7.1
- PHP 7.2
- PHP 7.3
- PHP 7.4
- PHP 8.0
- PHP 8.1
- PHP 8.2 (copy of PHP 8.1)

## Implementation
- Create a `.php-cs-fixer.dist.php` or add the one provided by the project to the root folder of your project.
- Change the version to one of the listed above
- Finally, add `.php-cs-fixer.cache`  to project specific `.gitignore` file
- If you want to apply the changes simply use: `./vendor/bin/php-cs-fixer fix`
- Use the following command to take a look at the changes before applying them: `./vendor/bin/php-cs-fixer fix --dry-run`
