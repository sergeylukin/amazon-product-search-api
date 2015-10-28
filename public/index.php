<?php require __DIR__ . '/../vendor/autoload.php';

use Sergeylukin\AmazonProductSearch as Amazon;

$app = new \Slim\Slim();

$app->get('/api/v1/product', function () use ($app) {

  try {

    $Product = Amazon::factory()->findOneProductByKeyword($app->request->get('keyword'));

    // send response header for JSON content type
    $app->response()->header('Content-Type', 'application/json');

    echo json_encode((array)$Product);

  } catch (Exception $e) {

    $app->response()->status(400);
    $app->response()->header('X-Status-Reason', $e->getMessage());

  }

});

$app->run();
