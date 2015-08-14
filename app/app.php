<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    //(Route) Homepage with user form.
    $app->get('/', function() use ($app) {
        return $app['twig']->render('repeat_form.html.twig');
    });

    //(Route) Results page with number of repeats.
    $app->get('/results', function() use ($app) {
        $new = new RepeatCounter;
        $word = $_GET['word'];
        $string = $_GET['string'];
        $output_count = $new->countRepeats($_GET['word'], $_GET['string']);
        return $app['twig']->render('repeat_results.html.twig', array('repeats' => $output_count));
    });

    return $app;
?>
