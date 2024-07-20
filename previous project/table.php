<?php


/*
$y = $_POST['null'];

for ($x = 1; $x <= 10; $x++) {
    echo  $y . "X" . $x . "=" . $y * $x . "<br>";
  }


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
'/'  => 'index.php', 
'/table' => 'table.php'
];

if (array_key_exists($uri, $routes)){
  require $routes[$uri];
  
}
else {
  http_response_code(404);
  echo "sorry.not found.";
  
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="table.php" method="POST">
table: <input type="number" name="no"><br>

<input type="submit" name="submit">

</form>
<a href="index.php">index</a>

</body>
</html>