<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {

        function test_singleWordMatch()
        {

          $test_CountRepeats = new CountRepeats;
          $input_word = "loop";
          $input_phrase = "This loop is never ending.";

          $result = $test_CountRepeats->RepeatCounter($input_word, $input_phrase);

          $this->AssertEquals(1, $result);
        }
    }
