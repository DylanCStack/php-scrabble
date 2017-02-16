<?php
    require_once "src/Scrabble.php";
    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_single_letter()
        {
            $test_scrabble = new Scrabble;
            $input = "C";


            $result = $test_scrabble->findScore($input);
            $this->assertEquals(3, $result);
        }
        function test_word()
        {
            $test_scrabble = new Scrabble;
            $input = "Cat";


            $result = $test_scrabble->findScore($input);
            $this->assertEquals(5, $result);
        }
    }
 ?>
