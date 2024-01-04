<?php
  

   // tests/Unit/StringHelperTest.php

namespace Tests;

use App\StringHelper;
use PHPUnit\Framework\TestCase;

class StringHelperTest extends TestCase
{
    public function testString()
    {
        $input = "aabc2c";
        $Output = "b2";

        $result = StringHelper::chuoidoixung($input);

        $this->assertEquals($Output, $result);
    }
}
