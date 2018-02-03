<?php
/**
 * Created by PhpStorm.
 * User: Ash
 * Date: 2/4/2018
 * Time: 12:03 AM
 */

namespace App\Helpers;


class Json
{
    public static function parse($json_string)
    {
        $result = null;

        if(static::validate($json_string))
        {
            $result = json_decode($json_string);
        }

        return $result;
    }

    public static function validate($json_string)
    {
        $result = false;

        if(is_string($json_string) && json_decode($json_string) !== null)
        {
            $result = true;
        }

        return $result;
    }
}