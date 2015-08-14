<?php
    require_once "src/Repeat.php";

    class RepeatTest extends PHPUnit_Framework_TestCase
    {
        //Spec 1: Count repeats in single letter word/string (matching).
        function test_countRepeat_oneLetter()
        {
            $test_Repeat = new Repeat;
            $input1 = 'a';
            $input2 = 'a';

            $result = $test_Repeat->countRepeat($input1, $input2);

            $this->assertEquals(1, $result);
        }

        //Spec 2: Count repeats in single letter word/string (non-matching).
        function test_countRepeat_oneLetter_noMatch()
        {
            $test_Repeat = new Repeat;
            $input1 = 'a';
            $input2 = 'b';

            $result = $test_Repeat->countRepeat($input1, $input2);

            $this->assertEquals(0, $result);
        }

        //Spec 3: Count repeats in multi letter word/string (matching).
        function test_countRepeat_multiLetter()
        {
            $test_Repeat = new Repeat;
            $input1 = 'and';
            $input2 = 'and';

            $result = $test_Repeat->countRepeat($input1, $input2);

            $this->assertEquals(1, $result);
        }
    }
 ?>
