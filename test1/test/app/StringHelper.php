<?php

namespace App;

class StringHelper
{
    public static function chuoidoixung($input)
    {

        $aabc2c = str_split($input);
        $inputCounts = [];
        foreach ($aabc2c as $key) {
            if (!isset($inputCounts[$key])) {
                $inputCounts[$key] = 1;
            } else {
                $inputCounts[$key]++;
            }
        }
        $result = '';
        foreach ($inputCounts as $key => $count) {
            if ($count === 1) {
                $result = $result . $key;
            }
        }
        return $result;
    }
}
