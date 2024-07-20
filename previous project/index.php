<?php

echo 'heyoo world' . '<br/>';
$title = 'my world';

$body = 'hiiii';

// array practicing
/*
  $staffs = [
[
  'id' => 1,
  'staff names' => 'rabi',
  'staff age' => 13
  
],
[
  'id' => 2,
  'name' => 'jimmy',
  'age' => '21'
]
];

*/

// loop practicing

$number = 1;

 while ($number <= 10) {

  if ($number % 2 == 0) {
    echo $number . 'the number is even <br/>';
   } else {
     echo $number . 'the number is odd<br/>';
   }
   $number++;
}

for($i = 1; $i<=10;$i++){
if($i==5){
  continue;
}


echo $i.'<br/>';
}


$studentgrades=[
  'john'=>85,
  'wick'=>95,
  'idk'=>99

];
foreach($studentgrades as $names =>$grades){
if($grades >=90) {
  echo $names.' is a smart boy <br/>';
}
}

// if practicing

$isloggedin = true;

if ($isloggedin) {


  echo 'welcome';
} else {

  echo 'plz login';
}


$listings = [
  [
  'id'=> 1,
  'staff' => 1,
  'introduction'=> 'hi i am rabi',
  'age' => '25',
],
'id' => 2,
'introduction' => 'hi i am john wick',
'age' => 35

];







?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>

  

</head>

<body>
  
  


  <div>
    <?php if ($isloggedin) :

    ?>
      <h1>welcome</h1>
    <?php else : ?>
      <h1>plz login</h1>
    <?php endif ?>

    <?php foreach($listings as $job) : ?>

   <h2>introduction</h2><?=$job['introduction']?>



<?php endforeach ?>
  </div>
<p>5*5</p>

</body>

</html>