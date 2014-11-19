<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 18/11/14
 * Time: 10:43
 */

require __DIR__.'/vendor/autoload.php';


/* $title = 'Destru will be back bro u mad !';
$slugify = new \Cocur\Slugify\Slugify();

echo $slugify->slugify($title);
*/

$passwordGenerator = new \Web1\StringGenerator\PasswordGenerator();
echo "<p>generateur simple: ".$passwordGenerator->simpleGenerate(30, \Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD)."</p>";


