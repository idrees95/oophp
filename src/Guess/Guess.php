<?php

namespace Ids\Guess;

/**
 * Guess my number, a class supporting the game through GET, POST and SESSION.
 */
class Guess
{
    /**
     * @var int $number   The current secret number.
     * @var int $tries    Number of tries a guess has been made.
     */
    private $number;
    private $tries;


    /**
     * Constructor to initiate the object with current game settings,
     * if available. Randomize the current number if no value is sent in.
     *
     * @param int $number The current secret number, default -1 to initiate
     *                    the number from start.
     * @param int $tries  Number of tries a guess has been made,
     *                    default 6.
     */
    public function __construct(int $number = -1, int $tries = 6)
    {
        $this->tries = $tries;
        if ($number === -1) {
            $number = rand(1, 100);
        }
        $this->number = $number;
    }



    /**
     * Randomize the secret number between 1 and 100 to initiate a new game.
     *
     * @return void
     */
    public function random() : void
    {
        $number = rand(1, 100);
        $this->number = $number;
    }



    /**
     * Get number of tries left.
     *
     * @return int as number of tries made.
     */
    public function tries() : int
    {
        return $this->tries;
    }




    /**
     * Get the secret number.
     *
     * @return int as the secret number.
     */
    public function number() : int
    {
        return $this->number;
    }




    /**
     * Make a guess, decrease remaining guesses and return a string stating
     * if the guess was correct, too low or to high or if no guesses remains.
     *
     * @throws GuessException when guessed number is out of bounds.
     *
     * @return string to show the status of the guess made.
     */
    public function makeGuess(int $guess) : string
    {
        if ($guess < 1 or $guess > 100) {
            throw new  GuessException("The given number is out of range.");
        }
        $this->tries--;
        if ($this->tries < 0) {
            $this->tries=0;
        }

        if ($guess === $this->number) {
            $result = "Correct";
        } elseif ($guess > $this->number) {
            $result = "Too high";
        } else {
            $result = "Too low";
        }
        return $result;
    }
}
