<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordFrequency.php";
    date_default_timezone_set('America/Los_Angeles');
    // session_start();
    // if (empty($_SESSION['list_of_albums'])) {
    //     $_SESSION['list_of_albums'] = array();
    // }
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/result", function() use ($app) {
        $newWordFrequency = new WordFrequency;
        $result = $newWordFrequency->getWordFrequency($_GET['searchWord'], $_GET['words']);
        return $app['twig']->render('result.html.twig', array('result' => $result));
    });
    return $app;
?>
