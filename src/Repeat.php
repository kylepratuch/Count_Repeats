<?php
    class Repeat
    {
        function countRepeat($input_word, $input_string)
        {
            //Convert word and string to lower-case.
            $lc_word = strtolower($input_word);
            $lc_string = strtolower($input_string);

            //Explode lower-cased string into individual words.
            $exp_string = explode(" ", $lc_string);

            //Begin counting matches.
            $matches = 0;

            foreach ($exp_string as $exp_word) {
                if ($lc_word == $exp_word) {
                    $matches += 1;
                }
            }

            return $matches;
        }
    }

 ?>
