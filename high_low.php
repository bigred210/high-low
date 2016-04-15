<?php

$min = 1;
$max = 100;
$rand = rand($min, $max);
// echo $rand .PHP_EOL;

// echo "Let's play a game.\n";
// fwrite(STDOUT,"Guess my number, it's between 1 and 100\n");
// $guess = trim(fgets(STDIN));

// do {
//     if ($guess > $rand) {
//         echo "Guess Lower\n";
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
`say Let us play a game`;
sleep(2);
fwrite(STDOUT,`say can you guess my number it is between 1 and 100`);
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
    else {
        `say -v "victoria" you did it`;
    }
}while ($guess != $rand);







