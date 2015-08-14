<?php

    class CountRepeats
    {
        function RepeatCounter($word, $phrase)
        {
          //sets variable to 0 for incoming matches
           $foundMatches = 0;
          //seperates words in the phrase variable
           $phrase_array = explode(" ", $phrase);

          //loop for finding matches and storing it in foundMatches variable
          foreach($phrase_array as $phrase_word)
          {
              if ($word == $phrase_word)
              {
                $foundMatches = $foundMatches + 1;
              }
          }

          return $foundMatches;
        }
    }
