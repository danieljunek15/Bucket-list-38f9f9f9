<?php
echo "Hoeveel actieviteiten wil je toevoegen?". PHP_EOL;
$getal = readline();

echo "je gaat $getal  toevoegen.". PHP_EOL;

if(!is_numeric($getal)) {
    exit("OOF '$getal' niet geldig destroy DESTROY DESTROY!!!");
}

$arr = array(); 
for($numarr = 1; $numarr <= $getal; $numarr++) {
echo "Wat wil je toevoegen aan je bucketlist?". PHP_EOL;

$input = readline(); 
$arr[] = $input;
}
echo "Dit is wat je toegevoegt heb:". PHP_EOL;
foreach($arr as $TheEnd) {
    echo $TheEnd. PHP_EOL;
}