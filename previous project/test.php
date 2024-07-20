<?php

define('APP_NAME','my app');

echo APP_NAME;

// average salary

$listings = [
    [
        'id' => 1,
        'staff' => 1,
        'introduction' => 'hi i am rabi',
        'age' => 25,
        'salary' => 80000
    ],
    [
        'id' => 2,
        'introduction' => 'hi i am john wick',
        'age' => 35,
        'salary' => 45000

    ],
    [
        'id' => 3,
        'introduction' => 'hi i am jimmy',
        'age' => 21,
        'salary' => 61000

    ]

];
function formatsalary($salary){
    return '$'. number_format($salary);
}
function calculatesalary ($listings) {

    $totalsalary = 0;
    $count = count($listings);

  foreach ($listings as $list){
    $totalsalary += $list['salary'];
  }
  $averagesalary = ($count > 0) ? $totalsalary / $count:0;

  return number_format($averagesalary);
    
};

// end average salary

// fizzbuzz challenge
/*

  for($i=1;$i<=100;$i++){
    if ($i % 3 === 0 && $i % 5 === 0){
        echo 'fizzbuzz';
    }
    elseif($i % 3 ===0){
        echo 'fizz';

    } elseif($i % 5 === 0) {
        echo 'buzz';
    }
    else {
     echo $i;
    }

echo '</br>';
   
  }
  */
$dayofweek = date('D');


switch ($dayofweek) {
    case 'Mon':
        $message = 'it\'s a boring day';
        $color = 'blue';
        break;
    case 'Fri':
        $message = 'its my fav day';
        $color = 'red';
        break;
    case 'Sat':
        $message = 'weekend';
        $color = 'purple';
    case 'Sun':
        $message = 'weekend';
        $color = 'magenta';
}
$number = 10;

if ($number <= 5) {

echo 'your welcome';

} else {

    echo 'your not welcome';
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {

            background-color: <?= $color ?>;


        }
    </style>
</head>

<body>



    <h1><?php strtoupper('$message') ?></h1>



    <h2>averagesalary <?= calculatesalary($listings)?></h2>


     <?php foreach ($listings as $list) : ?>
<ul>
    <li><?= $list['introduction'] ?> <p>my age is</p> <?= $list['age'] ?></li>

   <h3>salary <?= formatsalary($list['salary']) ?> </h3>
</ul>

   
<?php endforeach ?>  



</body>

</html>