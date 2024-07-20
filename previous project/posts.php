<?php 

require 'database.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header('location: pdo.php');
    exit;
}
$sql = 'select * from posts where id = :id';

$stmt = $pdo->prepare($sql);

$params = ['id' => $id];

$stmt->execute($params);

$posts = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $posts['title']?></title>
</head>
<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">my blog</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $posts['title']?></h2>
          <p class="text-gray-700 text-lg mt-2 mb-5"><?= $posts['body']?></p>
          <a href="pdo.php">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>