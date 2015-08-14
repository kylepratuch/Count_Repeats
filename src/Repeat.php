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

            //Trim common punctuation from word ends in input_string.
            $trimmed = array();
            foreach ($exp_string as $exp_word) {
                $word = trim($exp_word, ".\!\,\?\:\;\(\)");
                array_push($trimmed, $word);
            }

            //Begin counting matches.
            $matches = 0;

            //Loop through exploded/trimmed string to check for matches. Add to match count if found.
            foreach ($trimmed as $trimmed_word) {
                if ($lc_word == $trimmed_word) {
                    $matches += 1;
                }
            }

            return $matches;
        }
    }

 ?>
