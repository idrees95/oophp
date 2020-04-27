<?php

namespace Anax\View;

/**
 * View for playing guess game
 */


?>
<main><h1>Guess my number (SESSION)</h1>

<Du>Guess a number between 1 and 100, you have <?= $tries ?> left.</p>

<?php if ($res) : ?>
    <p><?= $res ?></p>
<?php endif; ?>


<form method="post" action="play">
    <input type="number" name="guess" autofocus>
    <input type="submit" name="doGuess" value="Make a guess">
    <input type="submit" name="doInit" value="Play again">
    <input type="submit" name="doCheat" value="Cheat">
</form>
</main>
