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

          //takes away any punctuation from the inputted phrase, was having trouble getting this to work.

           $phrase = preg_replace("/[^a-z]+/i", " ", $phrase);

          //seperates words in the phrase variable
           $phrase_array = explode(" ", $phrase);

          //loop for finding matches and storing it in foundMatches variable
          //was working with first test I passed, got null for results once I started building the method more.
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
