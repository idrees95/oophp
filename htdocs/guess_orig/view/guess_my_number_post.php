<main>
<h1>Guess my number</h1>

<p>Guess a number between 1 and 100, you have <?= $tries ?> left.</p>

<form method="post">
    <input type="hidden" name="number" value="<?= $number ?>">
    <input type="hidden" name="tries" value="<?= $tries ?>">
    <?php if (!((int)$guess === $number || $tries === 0)) : ?>
    <input type="number" name="guess" autofocus>
    <input type="submit" name="doGuess" value="Make a guess">
    <?php endif; ?>
    <input type="submit" name="doInit" value="Play again">
    <?php if (!((int)$guess === $number || $tries === 0)) : ?>
    <input type="submit" name="doCheat" value="Cheat">
    <?php endif; ?>
</form>

<?php if ($guess >= 1 && $guess <= 100) : ?>
    <?php if ($doGuess) : ?>
        <p>Your guess <?= $guess ?> is <b><?= $result?></b></p>
        <?php if ($tries === 0) : ?>
            <p>You are out of guesses, restart the game</p>
        <?php endif; ?>
        <?php if ($guess == $number) : ?>
            <p>Wellplayed</p>
        <?php endif; ?>
    <?php endif; ?>
<?php endif;?>



<?php if ($doCheat) : ?>
    <p>CHEAT: Current number is <?= $number ?>.</p>
<?php endif; ?>

</main>
