<?php

$questions = [

    [
        'question' => 'What is 2 + 2?',
        'correct' =>

            '4'
    ],

    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],

    [
        'question' => 'Who wrote "Hamlet"?',

        'correct' => 'Shakespeare'
    ],

];

$count = 0;

$answers[2];

for ($i = 0; $i < count($questions); $i++) {
    $answers[$i] = readline($questions[$i]['question'] . ' ');
}

function evaluateQuiz($questions, $answers)
{
    $count = 0;
    foreach ($questions as $index => $question) {
        if ($question['correct'] == $answers[$index]) {
            $count++;
        }
    }
    return $count;
}

$count = evaluateQuiz($questions, $answers);

if ($count == 3) {
    echo "Excellent job!";
} else if ($count > 1) {
    echo "Good effort!";
} else {
    echo "Better luck next time!";
}