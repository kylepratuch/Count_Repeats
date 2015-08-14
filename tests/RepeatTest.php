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

        //Spec 4: Count repeats in multi letter word/string (non-matching).
        function test_countRepeat_multiLetter_noMatch()
        {
            $test_Repeat = new Repeat;
            $input1 = 'and';
            $input2 = 'but';

            $result = $test_Repeat->countRepeat($input1, $input2);

            $this->assertEquals(0, $result);
        }

        //Spec 5: Count repeats in multi letter word, multi word string (matching).
        function test_countRepeat_multiWord()
        {
            $test_Repeat = new Repeat;
            $input1 = 'and';
            $input2 = 'cats and dogs';

            $result = $test_Repeat->countRepeat($input1, $input2);

            $this->assertEquals(1, $result);
        }

        //Spec 6: Count repeats in multi letter word, multi word string (non-matching).
        function test_countRepeat_multiWord_noMatch()
        {
            $test_Repeat = new Repeat;
            $input1 = 'and';
            $input2 = 'cats or dogs';

            $result = $test_Repeat->countRepeat($input1, $input2);

            $this->assertEquals(0, $result);
        }

        //Spec 7: Count repeats in multi letter word, multi word string (multiple matches).
        function test_countRepeat_multiWord_multiMatch()
        {
            $test_Repeat = new Repeat;
            $input1 = 'and';
            $input2 = 'cats and dogs and elephants';

            $result = $test_Repeat->countRepeat($input1, $input2);

            $this->assertEquals(2, $result);
        }
    }
 ?>
