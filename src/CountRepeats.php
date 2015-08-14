<?php

    class CountRepeats
    {
        function RepeatCounter($word, $phrase)
        {
          //sets variable to 0 for incoming matches
           $foundMatches = 0;

           //changes both inputs to lower case.
           $phrase = strtolower($phrase);
           $word = strtolower($word);

          //takes away any punctuation from the inputted phrase

           $phrase = preg_replace("/[^a-z]+/i", "", $phrase);

          //seperates words in the phrase variable
           $phrase_array = explode(" ", $phrase);

          //loop for finding matches and storing it in foundMatches variable
          foreach($phrase_array as $phrase_word)
          {
              if ($phrase_word == $word)
              {
                $foundMatches = $foundMatches + 1;
              }
          }

          return $foundMatches;
        }
    }
