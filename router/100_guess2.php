<?php
/**
 * Create routes using $app programming style.
 */
//var_dump(array_keys(get_defined_vars()));



/**
 * Init the game and redirect to play the game.
 */
$app->router->get("guess/init", function () use ($app) {
    // Init the session for the game start.
    $game = new Ids\Guess\Guess();
    // $_SESSION["number"] = $game->number();
    // $_SESSION["tries"] = $game->tries();
    return $app->response->redirect("guess/play");
});



/**
 * Play the game- show game status.
 */
$app->router->get("guess/play", function () use ($app) {
    // echo "Some debugging information";
    $title = "Play the game";


    // // Incoming variables
    // $guess = $_POST["guess"] ?? null;
    // $doInit = $_POST["doInit"] ?? null;
    // $doGuess = $_POST["doGuess"] ?? null;
    // $doCheat = $_POST["doCheat"] ?? null;

    $tries = $_SESSION["tries"] ?? null;
    $res = $_SESSION["res"] ?? null;
    $_SESSION["res"] = null;
    // $number = $_SESSION["number"] ?? null;
    // $res = null;
    // $game = null;

    // if ($doGuess) {
    //     $game = new Ids\Guess\Guess($number, $tries);
    //     $res = $game->makeGuess($guess);
    //     $_SESSION["tries"] = $game->tries();
    // }

    $data = [
        "guess" => $guess ?? null,
        "tries" => $tries,
        "number" => $number ?? null,
        "res" => $res,
        "doGuess" => $doGuess ?? null,
        "doCheat" => $doCheat ?? null,
    ];

    $app->page->add("guess/play", $data);
    $app->page->add("guess/debug");

    return $app->page->render([
        "title" => $title,
    ]);
});



/**
 * Play the game, make a guess
 */
 $app->router->get("guess/make-guess", function () use ($app) {
    $number = $_SESSION["number"] ?? null;
    $tries = $_SESSION["tries"] ?? null;
    $guess = $_SESSION["guess"] ?? null;

    $game = new Ids\Guess\Guess($number, $tries);

    try {
        $res = $game->makeGuess($guess);
    } catch (Ids\Guess\GuessException $exception) {
        $res = '<p class="warning">Warning: </p>' . $exception->getMessage();
    } catch (TypeError $e) {
        $res = `The given number {$guess} is out of range.`;
    }


    $_SESSION["tries"] = $game->tries();
    $_SESSION["res"] = $res;

    if ($res == "CORRECT") {
        return $app->response->redirect("guess/win");
    } elseif ($_SESSION["tries"] < 1) {
        return $app->response->redirect("guess/fail");
    } else {
        return $app->response->redirect("guess/play");
    }
 });
