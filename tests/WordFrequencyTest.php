<?php
    require_once "src/WordFrequency.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_compareOneWord_isWordFound()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchWord = "Hello";
            $word = "Hello";

            //Act
            $output = $test_RepeatCounter->compareOneWord($searchWord, $word);

            //Assert
            $this->assertEquals(1, $output);
        }
        function test_compareOneWord_caseDoesNotMatter()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchWord = "hello";
            $word = "Hello";

            //Act
            $output = $test_RepeatCounter->compareOneWord($searchWord, $word);

            //Assert
            $this->assertEquals(1, $output);
        }
        function test_compareOneWord_punctuationDoesNotMatter()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchWord = "hello";
            $word = "Hello!!";

            //Act
            $output = $test_RepeatCounter->compareOneWord($searchWord, $word);

            //Assert
            $this->assertEquals(1, $output);
        }
        function test_frequencyOfMultipleWords()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchWord = "Hello";
            $words = "Hello world, hello";

            //Act
            $output = $test_RepeatCounter->frequencyOfMultipleWords($searchWord, $words);

            //Assert
            $this->assertEquals(2, $output);
        }
        function test_frequencyOfMultipleWords_forwardSlashesDoNotMatter()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchWord = "Night";
            $words = "Day/night";

            //Act
            $output = $test_RepeatCounter->frequencyOfMultipleWords($searchWord, $words);

            //Assert
            $this->assertEquals(1, $output);
        }
        function test_countRepeats_noMatchesFound()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchWord = "Hello";
            $words = "Bye, dude!";

            //Act
            $output = $test_RepeatCounter->countRepeats($searchWord, $words);

            //Assert
            $this->assertEquals("No Matches Found!", $output);
        }
    }
        // export PATH=$PATH:./vendor/bin first and then you will only have to run  $ phpunit tests
?>
