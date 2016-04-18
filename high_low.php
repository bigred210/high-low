<?php

$min = $argv[1];
$max = $argv[2];
$rand = rand($min, $max);
echo $rand .PHP_EOL;

// echo "Let's play a game.\n";
// fwrite(STDOUT,"Guess my number, it is between {$argv[1]} and {$argv[2]}\n");
// $guess = trim(fgets(STDIN));

// do {
//     if ($guess > $rand) {
//         echo "Guess Lower\n";
//         $guess = trim(fgets(STDIN));
//     }
//     elseif (!is_numeric($guess))b {
//         echo "Enter a numeric value between {$argv[1]} and {$argv[2]}\n";
//         $guess = trim(fgets(STDIN));
//     } 
//     elseif ($guess < $rand) {
//         echo "Guess Higher\n";
//         $guess = trim(fgets(STDIN));
//     }
//     else {
//         echo "YOU DID IT!\n";
//         $guess = trim(fgets(STDIN));
//     }
// }while ($guess != $rand);

if ($argc == 3) {
    echo "arg1 is {$argv[1]} and arg2 is {$argv[2]}\n";
} 
elseif ($argv[1] > $argv[2]) {
    $min = $argv[2];
    $max = $argv[1];
}


`say Let us play a game`;
sleep(2);
fwrite(STDOUT,`say can you guess my number it is between {$argv[1]} and {$argv[2]}`);
$guess = trim(fgets(STDIN));

do {
    if ($guess > $rand) {
        `say -v "victoria" Guess Lower`;
        $guess = trim(fgets(STDIN));
    } 
    elseif ($guess < $rand) {
        `say -v "victoria" Guess Higher`;
        $guess = trim(fgets(STDIN));
    }
    elseif (!is_numeric($guess)) {
        echo "Enter a numeric value between {$argv[1]} and {$argv[2]}\n";
        $guess = trim(fgets(STDIN));
    } 
    else {
        `say -v "victoria" you did it`;
    }
}while ($guess != $rand);







