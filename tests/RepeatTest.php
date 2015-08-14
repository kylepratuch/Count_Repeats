<?php
    require_once "src/Repeat.php";

    class RepeatTest extends PHPUnit_Framework_TestCase
    {
        //Spec 1: Count repeats in single letter word/string (Matching).
        function test_countRepeat_oneLetter()
        {
            $test_Repeat = new Repeat;
            $input1 = 'a';
            $input2 = 'a';

            $result = $test_Repeat->countRepeat($input1, $input2);

            $this->assertEquals(1, $result);
        }
    }
 ?>
