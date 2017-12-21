# Usage

First require the package via composer

`composer require --dev kellerkinder/codestyle `

After that, decide which configuration you want to use, currenty the following configurations are supported:
- PHP 5.6
- PHP 7.0
- PHP 7.1
- PHP 7.2

Add a `.php_cs.dist` to the root folder of your project with the required chosen configuration applied. A good example can be found in this project root folder.

Finally add `.php_cs.cache`  to project specific .gitignore file.