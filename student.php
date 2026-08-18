<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$students=['name' => 'john'.'<br>', 
           'age' => '18'.'<br>',
           'school'=> 'CATUC'.'<br>',
           'country' => 'cameronn'.'<br>',
           'score' => '20'  .'<br>',
           ];
print_r($students);
print_r($students['score']. '<br>');
$students['score']='24';
print_r($students);
$students['key']=['one'];
print_r($students);
unset( $students['country'] );
print_r($students);

    ?>
</body>
</html>