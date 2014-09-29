<?php
use Symfony\Component\HttpFoundation\Request;
/* Loading Kernel  */
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'translator.messages' => array(),
));
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.options' => array(
        'cache' => isset($app['twig.options.cache']) ? $app['twig.options.cache'] : false,
        'strict_variables' => true,
    ),
    'twig.path' => array(__DIR__ . '/../views')
));
Request::enableHttpMethodParameterOverride();

// Register repositories.
$app['repository.medoc'] = $app->share(function ($app) {
    return new Sammyphar\Repository\MedocRepository($app['db']);
});

// Register the error handler.
$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    switch ($code) {
        case 404:
            $message = 'The requested page could not be found. Sorry...';
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new Response($message, $code);
});

return $app;