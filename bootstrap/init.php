<?php
ob_start();
if(!isset($_SESSION)) session_start();
use App\Classes\Database;
use App\Classes\FlipErrors;

// App Root Path
define("APP_ROOT",realpath(__DIR__."/../"));

//App Main URL
define("URL_ROOT","http://localhost:8080/E-Commerence/");

require APP_ROOT.'/vendor/autoload.php';

require_once APP_ROOT.'/app/config/_env.php';

// Flip Whoop Errors Reporting
new FlipErrors(getEnv("APP_DEBUG"));

// Boot Database
new Database;

require_once APP_ROOT.'/app/routing/router.php';

?>