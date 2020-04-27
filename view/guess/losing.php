<?php

namespace Anax\View;

?><h1>Guess my number (SESSION)</h1>

<p>Better luck next time!</p>

<p>The correct guess is: <?= $number ?>.</p>

<form method="post" action="play">
    <input type="submit" name="doInit" value="Play again">
</form>
