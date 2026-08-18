<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // $fruits=['apple','pinneaple','orange','pawpaw'];
   // foreach($fruits as $fruit){
   // echo ( 'fruit:'. $fruit. '<br>');
   // }

  // $sections=[
          //  ['continent' => 'africa', 'country' => 'camerooon'],
            //['continent' => 'Europe', 'country' => 'Germany'],
           // ['continent' => 'North America', 'country' => 'canada'],
            //['continent' => 'south America', 'country' => 'Argentina'],
            //['continent' => 'asia', 'country' => 'china'],
      //  ];
            //foreach($sections as $section){
            //echo $section['continent']. '-' . $section['country'];
           // echo '<br>';
           // }

           //$subjects=['mathematics','english','physics','chemistry','computer science'];
          // foreach($subjects as $index => $subject) {
            //echo($index + 1) . '.' .$subject. '<br>';
           // }
        

           //$Hobbies=['football','dancing','eating','wrestling'];
           //foreach($Hobbies as $index => $hobbie){
           //echo($index + 1) . '.' .$hobbie. '<br>';
           //}

          // $protiens=['meat','fish','chicken','pork'];
           //foreach( $protiens as $index => $protien){
           //echo($index +1) .'.'.$protien. '<br>';
          // }

         // $friends=['crosdel','videl','lewise','gilad','kingstone'];
          //foreach($friends as $index => $friend){
          //echo ($index +1) .'.'. $friend. '<br>';
         // }

        // $regions=[
            //['name' => 'Northwest', 'capital' =>'Bamenda'],
           //  ['name' => 'southwest', 'capital' =>'Buea'],
            //  ['name' => 'east', 'capital' =>'bertoua'],
             //['name' => 'North', 'capital' =>'garoua'],
       //  ];
          //foreach ($regions as $index => $region) {
          //  echo($index +1) . '.' .$region['name']. '-'.$region['capital'].'<br>';
         // }



   //$students=[
        // ['name' => 'emmanuel' ,'score' => '74'],
          //['name' => 'jude' ,'score' => '80'],
          // ['name' => 'alex' ,'score' => '90'],
  // ];
  // foreach ($students as $student) {
    //echo $student['name'].'scored'.$student['score']. '<br>' ;

    //}

    $students=[
    [ 'name:' => "john",
      "maths:" => 12,
      "english:" => 13,
      "computer science:" => 15
     ],

     [ 'name:' => "peter",
      "maths:" => 15,
      "english:" => 19,
      "computer science:" => 20
     ],

     [ 'name:' => "jude",
      "maths:" => 19,
      "english:" => 18,
      "computer science:" => '15'
     ],

     [ 'name:'=> "innoncent",
      "maths:" => 11 ,
      "english:" => 13,
      "computer science:" => 14
     ],

     [ 'name:'=> "philimon",
      "maths:" => 16,
      "english:" => 13,
      "computer science:" => 19
     ],
   ];
  //  foreach ($students as $student) {
  //   $total=$student["maths:"] + $student["english:"] + $student["computer science:"];
  //   $average=$total/3;
  //   echo'================================================= <br>';
  //   echo $student["name:"]. '<br>';
  //   echo 'maths:'. $student["maths:"].'<br>';
  //   echo 'maths:'. $student["english:"].'<br>';
  //   echo 'maths:'. $student["computer science:"].'<br>';
  //   echo "total: " .$total.'<br>';
  //   echo  "Average:" .$average.'<br>';
  //   echo'================================================ <br>';
  //  };

  $students=[
  [
  "name" => 'emanuel',
  "geography"=> 14,
  "physics"=> 20,
  "chemistry"=>34,
  "computer science"=> 10,
  ],

  [
  "name" => 'e',
  "geography"=> 14,
  "physics"=> 11,
  "chemistry"=>34,
  "computer science"=> 45,
  ],

  [
  "name" => 'joseph',
  "geography"=> 14,
  "physics"=> 19,
  "chemistry"=>34,
  "computer science"=> 10,
  ],

  [
  "name" => 'loveline',
  "geography"=> 14,
  "physics"=> 20,
  "chemistry"=>17,
  "computer science"=> 10,
  ],

];

  foreach ($students as $student) {
    $total=$student["geography"]+$student["physics"]+$student["chemistry"]+ $student["computer science"];
    $average=$total/3;
    echo'=================================  <br>';
    echo 'Name:'. $student['name']. '<br>';
    echo 'maths:'.$student["geography"] . '<br>';
    echo 'physics:'. $student["physics"]. '<br>';
    echo 'chemistry:'. $student["chemistry"]. '<br>';  
    echo 'computer science:'. $student["computer science"]. '<br>';
    echo 'total:'. $total .'<br>'. '<br>';
    echo 'average:'. $average.'<br>';
  };
    ?>
</body>
</html>