<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";
    $app = new Silex\Application();
    $app['debug']= true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
    $app->get("", function() use ($app) {
        return $app['twig']->render('index.html.twig', array("score"=>null));
    });
    $app->post("", function() use($app) {
        $score = Scrabble::findScore($_POST['word']);

        return $app['twig']->render('index.html.twig', array("score" => $score));
    });
    return $app;
 ?>
