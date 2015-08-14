
<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/CountRepeats.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/results", function() use ($app) {

      $word = $_GET['word'];
      $phrase = $_GET['phrase'];
      $new_match = new CountRepeats;
      $foundMatches = $new_match->RepeatCounter($word, $phrase);
      $matches = array($foundMatches, $word, $phrase);
      return $app['twig']->render('results.html.twig', array('results' => $matches));
    });
    return $app;
?>
