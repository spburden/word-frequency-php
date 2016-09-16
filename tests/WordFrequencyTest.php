<?php
    require_once "src/WordFrequency.php";
    class WordFrequencyTest extends PHPUnit_Framework_TestCase
    {
        function test_frequencyOfAWord()
        {
            //Arrange
            $test_WordFrequency = new WordFrequency;
            $searchWord = "Hello";
            $word = "Hello";

            //Act
            $output = $test_WordFrequency->frequencyOfAWord($searchWord, $word);

            //Assert
            $this->assertEquals(1, $output);
        }

        function test_isWordFound()
        {
            //Arrange
            $test_WordFrequency = new WordFrequency;
            $searchWord = "Hello";
            $word = "Bye";

            //Act
            $output = $test_WordFrequency->isWordFound($searchWord, $word);

            //Assert
            $this->assertEquals("No Match Found!", $output);
        }


    }
        // export PATH=$PATH:./vendor/bin first and then you will only have to run  $ phpunit tests
?>