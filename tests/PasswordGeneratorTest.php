<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 19/11/14
 * Time: 17:48
 */

namespace Tests\Web1\StringGenerator;

use Web1\StringGenerator\PasswordGenerator;

/**
 * Class PasswordGeneratorTest
 * @package Tests\Web1\StringGenerator
 */
class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if simpleGenerate method length generate
     * the real length of the password in Medium mode
     * @throws \Exception
     */
    public function testSimpleGenerateLengthEasy()
    {
        $length = mt_rand(1, 10000);
        $password = PasswordGenerator::simpleGenerate($length, PasswordGenerator::PASSWORD_EASY);

        $this->assertEquals($length, mb_strlen($password));
    }

    /**
     * Test if simpleGenerate method length generate
     * the real length of the password in Medium mode
     *
     * @throws \Exception
     */
    public function testSimpleGenerateLengthMedium()
    {
        $length = mt_rand(1, 10000);
        $password = PasswordGenerator::simpleGenerate($length, PasswordGenerator::PASSWORD_MEDIUM);

        $this->assertEquals($length, mb_strlen($password));
    }

    /**
     * Test if simpleGenerate method length generate
     * the real length of the password in Hard mode
     *
     * @throws \Exception
     */
    public function testSimpleGenerateLengthHard()
    {
        $length = mt_rand(1, 10000);
        $password = PasswordGenerator::simpleGenerate($length, PasswordGenerator::PASSWORD_HARD);

        $this->assertEquals($length, mb_strlen($password));
    }

    /**
     *
     */
    public function testSimpleGenerateNotEmpty(){
        $password = PasswordGenerator::simpleGenerate(0);

        $this->assertNotEmpty($password);
    }
} 