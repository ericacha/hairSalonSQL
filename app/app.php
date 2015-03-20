<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Stylist.php";
    require_once __DIR__."/../src/Client.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $DB = new PDO('pgsql:host=localhost;dbname=hair_salon');

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'

    ));

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();


    $app->get("/", function() use ($app) {
    return $app['twig']->render('index.twig', array('stylists' => Stylist::getAll()));
    });

  //   $app->post("/", function() use ($app) {
  //   $new_stylist=new Stylist($_POST['name']);
  //   $new_stylist->save();
  //   return $app['twig']->render('index.twig', array('stylists' => Stylist::getAll()));
  //   });
   //
  //   $app->get("/stylist/{id}", function($id) use ($app) {
  //      $cuisine = Stylist::find($id);
  //      return $app['twig']->render('stylist.twig', array('stylists' => $stylist, 'clients'=>$stylist->getClients()));
  //  });
   //

    return $app;

?>
