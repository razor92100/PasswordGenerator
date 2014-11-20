# StringGenerator
[![Build Status](https://travis-ci.org/razor92100/A3_PSR.svg?branch=master)](https://travis-ci.org/razor92100/A3_PSR)
StringGenerator is a little program that allow you to create random password with
three different levels.

Just chose how many characters compose your password and use one of the three constants to change the
difficulty of the password generate:

PASSWORD_EASY, PASSWORD_MEDIUM and PASSWORD_HARD.

## How it works

```php
<?php
// Simply create a new instance of PasswordGenerator Class
// Choose the number of characters
// And change the name of the constant to change the difficulty
// You're done :)

$passwordGenerator = new PasswordGenerator();

// First parameter is the number of character that compose your password
// Second parameter is the difficulty

// Easy Password example with 10 characters
$passwordGenerator->simpleGenerate(10, \Web1\StringGenerator\PasswordGenerator::PASSWORD_EASY)

// Medium Password example with 20 characters
$passwordGenerator->simpleGenerate(20, \Web1\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM)

// Easy Password example with 30 characters
$passwordGenerator->simpleGenerate(30, \Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD)

```

### Hope you enjoy it !
