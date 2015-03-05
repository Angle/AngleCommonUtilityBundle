<?php

namespace Angle\Common\UtilityBundle\Random_deprecated;


/**
 * DEPRECATED IN FAVOR OF ANOTHER METHOD USING THE MCRYPT EXTENSION
 * Reference: https://defuse.ca/generating-random-passwords.htm
 *
 * Class RandomUtility
 * @package Angle\Common\UtilityBundle\Random
 *
 * @deprecated
 */
class RandomUtility
{
    /**
     * Generate a random string
     *
     * If the "human" option is enabled, the generator uses only the upper case
     * english alphabet without the "I" and "O" characters. If it is disabled (default)
     * then the generator uses the english alphabet on both upper- and lowercase.
     *
     * @param integer $length optional, max length 32
     * @param boolean $human avoid human confusion when reading the string
     * @return string
     */
    public static function generateString($length = 10, $human = false)
    {
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.

        if ($human) {
            $characters = '0123456789ABCDEFGHJKLMNPQRSTUVWXYZ';
        } else {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }

        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    /**
     * Generate a random GUID
     *
     * @param integer $length optional, max length 32
     * @return string
     */
    public static function generateGUID($length)
    {
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        //$uuid = strtoupper(md5(uniqid(mt_rand(), true)));
        $uuid = strtolower(md5(uniqid(mt_rand(), true)));
        if($length) $uuid = substr($uuid, 0, $length); // shorten the string
        return $uuid;
    }

}