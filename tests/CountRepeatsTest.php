<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {

        function test_singleWordMatch()
        {

          $test_CountRepeats = new CountRepeats;
          $word = "loop";
          $phrase = "This loop is never ending.";

          $result = $test_CountRepeats->RepeatCounter($word, $phrase);

          $this->AssertEquals(1, $result);
        }
        function test_singleWordMatch2()
        {

          $test_CountRepeats = new CountRepeats;
          $word = "loop";
          $phrase = "This loop is a never ending loop.";

          $result = $test_CountRepeats->RepeatCounter($word, $phrase);

          $this->AssertEquals(2, $result);
        }

    }
?>
