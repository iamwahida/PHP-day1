<?php 
$fruit = 'Melone'; 
$firstname = 'Wahida';
$lastname= 'Nemati';

$programming = 'Java <br>';
$highlevelLanguage = $programming;
echo "$programming";

// gettype(variable name), var_dump(variable name)
$age = '20';
$currentYear = '2022';
echo $currentYear - $age ."<br>";

// scope
function greeting () {
    $message = 'Moinsen'."<br>";
    echo $message;
}
greeting();

$name = "John";
$surname = "Joe";
$fullname;

function printname () {
    $GLOBALS ["fullname"] = $GLOBALS ["name"] ." ". $GLOBALS["surname"];
    echo $GLOBALS["fullname"]."<br>";
}
printname();

// counter 
function get_counter() {
    static $counter = 1;
    return $counter++;
}
echo get_counter(). "<br>";
echo get_counter(). "<br>";
echo get_counter(). "<br>";

// arrays
$myarray = array(15, 38, 23);
// print_r($myarray)."<br>";
echo $myarray[2];
// mit .count -> length

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello, my Name is <?= $firstname?> <?=$lastname?> and my favorite fruit is <?=$fruit?></p>

</body>
</html>