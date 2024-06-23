<?php

namespace EvenGame;

use function cli\line;
use function cli\prompt;

function game(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 100);
        $correctAnswer = isNumberEven($randomNumber) ? 'yes' : 'no';
        line("Question: $randomNumber");
        $userAnswer =  prompt('Your answer');

        if ($userAnswer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        } else {
            line('Correct!');
        }
    }

    line("Congratulations, %s!", $name);
}

function isNumberEven(int $randomNumber): bool
{
    return $randomNumber % 2 === 0;
}
