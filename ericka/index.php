<?php 
$name="Juana";
$age="23 years old";
$job="Manager";
$sentence="My Name is ". "$name" . " ". "I am " . "$age ". "and work as a ". "$job.";
$names=["Mark", "John", "George", "Lisa"];
$new_array=array(
    "cartoon"=>"Super Girls",
    "anime"=>"Sailor Moon",
    "character"=>"Mickey Mouse"
);
// we added a new  element to the array
$new_array["website"]="www";
print_r($new_array);
echo $new_array["cartoon"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
    <h1> <?=$sentence?></h1>
    <p class="team"> The third player in the team is <?=$names[2] ?></p>
 
</body>
</html>