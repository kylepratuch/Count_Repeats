<?php
    class Repeat
    {
        function countRepeat($input_word, $input_string)
        {
            //Convert word and string to lower-case.
            $lc_word = strtolower($input_word);
            $lc_string = strtolower($input_string);

            //Split lower-cased string into individual words.
            $split_string = str_split($lc_string);

            //Begin counting matches.
            $matches = 0;

            foreach ($split_string as $words) {
                if ($lc_word == $lc_string) {
                    $matches += 1;
                } 
            }

            return $matches;
        }
    }

 ?>
