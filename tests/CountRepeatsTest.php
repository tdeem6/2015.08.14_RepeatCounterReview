<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {
//had this test working fine, once I started adding to the main method the next tests failed
        function test_singleWordMatch()
        {

          $test_CountRepeats = new CountRepeats;
          $word = "loop";
          $phrase = "This loop is never ending.";

          $result = $test_CountRepeats->RepeatCounter($word, $phrase);

          $this->AssertEquals(1, $result);
        }
//Not sure why this test failed again once I worked on main method more, was able to verify 1 count of loop earlier, now returning 0.
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
