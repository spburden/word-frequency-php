<?php
    class WordFrequency
    {

        function compareOneWord($searchWord, $word)
        {
            $searchWord = strtolower($searchWord);
            $searchWord = str_ireplace(".", "", $searchWord);
            $word = strtolower($word);
            $word = str_ireplace("!", "", $word);
            $word = str_ireplace(",", "", $word);
            $word = str_ireplace(".", "", $word);
            $word = str_ireplace("!", "", $word);
            $word = str_ireplace("?", "", $word);
            $word = str_ireplace(")", "", $word);
            $word = str_ireplace("(", "", $word);
            $word = str_ireplace(":", "", $word);
            $word = str_ireplace(";", "", $word);
            $word = str_ireplace("'", "", $word);
            $wordCount = 0;
            if ($searchWord == $word) {
                $wordCount += 1;
            }
            return $wordCount;
        }

        function isWordFound($searchWord, $word)
        {
            if ($this->compareOneWord($searchWord, $word) == 0) {
                $output = "No Match Found!";
            }
            return $output;
        }

        function frequencyOfMultipleWords($searchWord, $words)
        {
            $words = str_ireplace("/", " ", $words);
            $words = explode(" ", $words);
            $wordCount = 0;
            for ($i=0; $i < sizeof($words); $i++) {
                $wordCount += $this->compareOneWord($searchWord, $words[$i]);
            }
            return $wordCount;
        }

        function getWordFrequency($searchWord, $words)
        {
            $wordCount = $this->frequencyOfMultipleWords($searchWord, $words);
            if ($wordCount > 0) {
                return $wordCount;
            } else {
                return "No Match Found!";
            }
        }
    }
?>
