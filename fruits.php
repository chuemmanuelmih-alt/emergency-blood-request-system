<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$fruits=['apple','banana','orange','Mango','pineaple'];
//print_r($fruits);

echo($fruits[4]. '<br>');
echo($fruits[0]);
echo count($fruits);
$fruits[1]=('watermelon');
print_r($fruits[1]);
array_push($fruits,'grapes');
print_r($fruits);



    ?>
    
</body>
</html>