<?php
/**
 * Created by PhpStorm.
 * User: JB-NB-02
 * Date: 11.10.2017
 * Time: 23:07
 */

namespace app\classes;

class Tools
{
    public static function getNameOfDay($day)
    {
        $days =[
            1 => 'Po',
            2 => 'Út',
            3 => 'St',
            4 => 'Čt',
            5 => 'Pá',
            6 => 'So',
            7 => 'Ne',
        ];

        return $days[(int)$day];
    }

}