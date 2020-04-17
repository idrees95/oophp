<?php
/**
 * Bootstrap the framework and handle the request and send the response.
 */

// Were are all the files?
define("ANAX_INSTALL_PATH", realpath(__DIR__ . "/.."));

// Set development/production environment and error reporting
require ANAX_INSTALL_PATH . "/config/commons.php";

// Get the autoloader by using composers version.
require ANAX_INSTALL_PATH . "/vendor/autoload.php";

// // Add all framework services to $di
// $di = new Anax\DI\DIFactoryConfig();
// $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

// Enable to also use $app style to access services
$di = new Anax\DI\DIMagic();
$di->loadServices(ANAX_INSTALL_PATH . "/config/di");
$app = $di;
$di->set("app", $app);

// // Add anax/proxy access to $id, if available
// if (class_exists("\Anax\Proxy\ProxyDIFactory")) {
//     \Anax\Proxy\ProxyDIFactory::init($di);
// }

// Include user defined routes using programming-style.
foreach (glob(ANAX_INSTALL_PATH . "/router/*.php") as $route) {
    require $route;
}

// Send the response that the router returns from the route handler
$di->get("response")->send(
    $di->get("router")->handle(
        $di->get("request")->getRoute(),
        $di->get("request")->getMethod()
    )
);
