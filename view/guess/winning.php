<?php

namespace Anax\View;

?>
<h1>Guess my number (SESSION)</h1>

<p>Your guess <?= $number ?> is CORRECT</p>

<p>Wellplayed!</p>

<form method="post" action="play">
    <input type="submit" name="doInit" value="Play again">
</form>
</main>
