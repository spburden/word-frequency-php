<?php
    class RepeatCounter
    {
        function compareOneWord($searchWord, $word)
        {
            $searchWord = strtolower($searchWord);
            $searchWord = str_ireplace(".", "", $searchWord);
            $word = strtolower($word);
            $punctuation = array("!", ",", ".", "?", "(", ")", ":", "'", '"', ";");
            $word = str_ireplace($punctuation, "", $word);
            $wordCount = 0;
            if ($searchWord == $word) {
                $wordCount += 1;
            }
            return $wordCount;
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
        function countRepeats($searchWord, $words)
        {
            $wordCount = $this->frequencyOfMultipleWords($searchWord, $words);
            if ($wordCount > 0) {
                return $wordCount;
            } else {
                return "No Matches Found!";
            }
        }
    }
?>
