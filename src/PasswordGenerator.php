<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 18/11/14
 * Time: 11:57
 */

namespace Web1\StringGenerator;

/**
 * Class PasswordGenerator
 * @package Web1\StringGenerator
 */
class PasswordGenerator
{
    /**
     *
     */
    const PASSWORD_EASY = 0;

    /**
     *
     */
    const PASSWORD_MEDIUM = 1;
    /**
     *
     */
    const PASSWORD_HARD = 2;

    /**
     * @var int
     */
    private static $passwordDefaultLength = 10;
    /**
     * @var string
     */
    private static $passwordCharEasy = "abcdefghijklmnopqrstuvwxyz";
    /**
     * @var string
     */
    private static $passwordCharMedium = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    /**
     * @var string
     */
    private static $passwordCharHard = "abcdefghijklmnopqrstuvwxyz&é§èçà#ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    /**
     *
     */
    public function __construct()
    {
        echo 'Destru will come back soon u mad bro !';
    }

    /**
     * @param null $nb
     * @param int $strength
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function simpleGenerate($nb = null, $strength = self::PASSWORD_MEDIUM)
    {
        if (!in_array($strength, [
            self::PASSWORD_EASY,
            self::PASSWORD_MEDIUM,
            self::PASSWORD_HARD,
        ])) throw new \Exception('Bad strength bro');

        $length = (is_null($nb) ? self::$passwordDefaultLength
            : (0 === (int)$nb)
                ? self::$passwordDefaultLength
                : (int)$nb);

        switch($strength) {
            case self::PASSWORD_EASY:
                $chaine = self::$passwordCharEasy;
                break;
            case self::PASSWORD_MEDIUM;
                $chaine = self::$passwordCharMedium.self::$passwordCharEasy;
                break;
            case self::PASSWORD_HARD;
                $chaine = self::$passwordCharHard.self::$passwordCharMedium.self::$passwordCharEasy;
                break;
        }
        $string = "";
        for ($i = 0; $i < $length; $i++){
            $string .= $chaine[rand()%strlen($chaine)];
        }
        return $string;
    }
} 