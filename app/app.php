<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordFrequency.php";
    date_default_timezone_set('America/Los_Angeles');

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();
    
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/result", function() use ($app) {
        $newRepeatCounter = new RepeatCounter;
        $result = $newRepeatCounter->countRepeats($_GET['searchWord'], $_GET['words']);
        return $app['twig']->render('result.html.twig', array('result' => $result));
    });

    return $app;
?>
