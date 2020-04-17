<?php
/**
 * Create routes using $app programming style.
 */
//var_dump(array_keys(get_defined_vars()));



/**
 * Showing message Hello World, not using the standard page layout.
 */
$app->router->get("lek/hello-world", function () use ($app) {
    // echo "Some debugging information";
    return "Hello World";
});



/**
 * Returning a JSON message with Hello World.
 */
$app->router->get("lek/hello-world-json", function () use ($app) {
    // echo "Some debugging information";
    return [["message" => "Hello World"]];
});



/**
* Showing message Hello World, rendered within the standard page layout.
 */
$app->router->get("lek/hello-world-page", function () use ($app) {
    $title = "Hello World as a page";
    $data = [
        "class" => "hello-world",
        "content" => "Hello World in " . __FILE__,
    ];

    $app->page->add("anax/v2/article/default", $data);

    return $app->page->render([
        "title" => $title,
    ]);
});
