<?php
include(__DIR__ . "/autoload.php");
include(__DIR__ . "/config.php");
include(__DIR__ . "/view/header.php");

//session name
session_name("idsa18");
//session start
session_start();


// Incoming variables
$guess = $_POST["guess"] ?? null;
$doInit = $_POST["doInit"] ?? null;
$doGuess = $_POST["doGuess"] ?? null;
$doCheat = $_POST["doCheat"] ?? null;


$tries = $_SESSION["tries"] ?? null;
$number = $_SESSION["number"] ?? null;
$game = null;

if ($doInit || $number === null) {
    $game = new Guess();
    $_SESSION["number"] = $game->number();
    $_SESSION["tries"] = $game->tries();
} elseif ($doGuess) {
    try {
        $game = new Guess($number, $tries);
        $result = $game->makeGuess($guess);
        $_SESSION["tries"] = $game->tries();
    } catch (GuessException $exception) {
        echo "Message: </h3>" .$exception->getMessage();
    }
}

// Render the page
require __DIR__ . "/view/guess_my_number_post.php";

include(__DIR__ . "/view/footer.php");
