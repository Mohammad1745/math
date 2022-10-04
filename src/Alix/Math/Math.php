<?php

namespace Alix\Math;

class Math
{
    public static function add($args)
    {
        $sum = 0;
        foreach ($args as $arg) $sum += $arg;
        return $sum;
    }
}