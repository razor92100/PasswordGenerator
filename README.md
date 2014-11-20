# StringGenerator

StringGenerator is a little program that allow you to create random password with
three different levels. Just chose how many characters compose your password and use one of the three constants to change the
difficulty of the password generate: PASSWORD_EASY, PASSWORD_MEDIUM and PASSWORD_HARD.

## How it works

```php
<?php
// Simply create a new instance of PasswordGenerator Class
// And change the name of the constant to change the difficulty
// You're done :)

$passwordGenerator = new PasswordGenerator();

// First parameter is the number of character that compose your password
// Second parameter is the difficulty
$passwordGenerator->simpleGenerate(30, \Web1\StringGenerator\PasswordGenerator::PASSWORD_EASY)
$passwordGenerator->simpleGenerate(30, \Web1\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM)
$passwordGenerator->simpleGenerate(30, \Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD)

```

### Hope you enjoy it !