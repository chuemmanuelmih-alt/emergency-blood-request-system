<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //mutidimentional arrays
    //$family=[
       // ['first','second','third','forth', 30],
        //['bamenda','kumba','douala','buea', 50],
        //['monogamy','polyandry','bigamy', 50]
   // ];
       // print_r($family[0][1]);

   $countries=[
   ['Africa'=> 'cameroon','population' => '2000,000', 'surface area' => '12348km'],
   ['europe'=> 'england', 'population' => '4000,000', 'surface area'=> '123456km'],
   ['southAmerica' =>'Argentina', 'population' => '6000000', 'surface area' => '2345km'],
   ];
   //print_r($countries[2]['population']);

   //echo count($countries);\
   $countries[]=['North America'=> 'canada','population'=>'500000'];
   //print_r($countries);
   $pooped=array_pop($countries);
   print_r($pooped);

   

    ?>
</body>
</html>