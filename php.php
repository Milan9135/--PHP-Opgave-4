<?php

// deel 1

for ($i = 0; $i <= 50; $i++) {
    echo $i . " ";
}

//

echo "<br>";

// deel 2

echo "<br>";

$klasgenoten = ["Destiney Solomon", "Bridger Powers", "Juliette Ingram", "Moises Butler", "Dane Sandoval", "Seth Swanson", "Jordyn Ruiz", "Ivy Peck", "Luz Gilmore", "Johnathan Watts"];

foreach ($klasgenoten as $klasgenoot) {
    echo "$klasgenoot<br>";
}

//

echo "<br>";

// deel 3

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

for ($i = 0; $i < count($maanden); $i++) {
    echo ("Maand " . $i + 1 . " is $maanden[$i] <br>");
}

//

echo "<br>";

// deel 4

$count = 1;

foreach ($maanden as $maand) {
    echo ("Maand $count is $maand <br>");
    $count++;
}

//

?>