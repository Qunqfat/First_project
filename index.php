<?php

declare(strict_types=1);

namespace App;

use App\Exception\AppException;
use App\Exception\ConfigurationException;
use Throwable;

require_once("src/Utils/debug.php");
require_once("src/Controller.php");
require_once("src/Exception/AppException.php");


$configuration = require_once("config/config.php");

$request = [
  'get' => $_GET,
  'post' => $_POST
];

try {
    // $controller = new Controller($request);
    // $controller->run();
    
    Controller::initConfiguration($configuration);
    (new Controller($request))->run();
 
  } catch (ConfigurationException $e) {
    echo "<br><h1>wystąpił bład w aplikacji 900</h1>";
    echo "<br>problem z konfiguracją. proszę skontaktować się z administratorem xx@xxt.com";
  } catch (AppException $e) {
    echo "<h1>wystąpił bład w aplikacji</h1>";
    echo "<br><h3>" . $e->getMessage() . "</h3>";
  } catch (Throwable $e) {
    echo "<h1>wystąpił bład w aplikacji</h1>";
    dump($e);
}


//VvI2OwZcVG[aaQXj, hasło do bazy danych notes
