<?php
    class WordFrequency
    {

        function frequencyOfAWord($searchWord, $word)
        {
            $searchWord = strtolower($searchWord);
            $word = strtolower($word);
            $word = str_ireplace("!", "", $word);
            $wordCount = 0;
            if ($searchWord == $word) {
                $wordCount += 1;
            }
            return $wordCount;
        }

        function isWordFound($searchWord, $word)
        {
            if ($this->frequencyOfAWord($searchWord, $word) == 0) {
                $output = "No Match Found!";
            }
            return $output;
        }

    }
?>
