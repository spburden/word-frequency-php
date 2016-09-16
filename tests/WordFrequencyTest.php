<?php
    require_once "src/WordFrequency.php";
    class WordFrequencyTest extends PHPUnit_Framework_TestCase
    {
        function test_compareOneWord()
        {
            //Arrange
            $test_WordFrequency = new WordFrequency;
            $searchWord = "Hello";
            $word = "Hello";

            //Act
            $output = $test_WordFrequency->compareOneWord($searchWord, $word);

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
        function test_caseDoesNotMatter()
        {
            //Arrange
            $test_WordFrequency = new WordFrequency;
            $searchWord = "hello";
            $word = "Hello";

            //Act
            $output = $test_WordFrequency->compareOneWord($searchWord, $word);

            //Assert
            $this->assertEquals(1, $output);
        }
        function test_punctuationDoesNotMatter()
        {
            //Arrange
            $test_WordFrequency = new WordFrequency;
            $searchWord = "hello.";
            $word = "Hell'.o!!,(?:;)";

            //Act
            $output = $test_WordFrequency->compareOneWord($searchWord, $word);

            //Assert
            $this->assertEquals(1, $output);
        }
        function test_frequencyOfMultipleWords()
        {
            //Arrange
            $test_WordFrequency = new WordFrequency;
            $searchWord = "hello";
            $words = "Hello world, hello!";

            //Act
            $output = $test_WordFrequency->frequencyOfMultipleWords($searchWord, $words);

            //Assert
            $this->assertEquals(2, $output);
        }
        function test_getWordFrequency()
        {
            //Arrange
            $test_WordFrequency = new WordFrequency;
            $searchWord = "Hello";
            $words = "Bye, dude!";

            //Act
            $output = $test_WordFrequency->getWordFrequency($searchWord, $words);

            //Assert
            $this->assertEquals("No Match Found!", $output);
        }
    }
        // export PATH=$PATH:./vendor/bin first and then you will only have to run  $ phpunit tests
?>
