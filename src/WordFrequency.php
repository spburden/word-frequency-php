<?php
    class WordFrequency
    {

        function frequencyOfAWord($searchWord, $word)
        {
            $wordCount = 0;
            if ($searchWord == $word) {
                $wordCount += 1;
            }
            return $wordCount;
        }
        
    }
?>
