<?php

require 'database.php';

$stmt = $pdo->prepare('select * from posts');

$stmt->execute();

$results = $stmt->fetchall();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pdo.css">
    <header>
   
  </header>
    
</head>
<body class="bg-gray-900">
    <div class="container mx-auto p-4 mt-4">
        <?php foreach($results as $post) : ?>
    <div class = "md my-4">
        <div class="rounded-lg shadow-md">
            <div class="p-4">
                <h2 class="text-xl font-semibold"><a href="posts.php?id=<?= $post['id'] ?>"> <?= $post['title'] ?></a></h2>
            </div>
        </div>
    </div>
    <p class="text-gray-700 text-lg mt-2"><?php $post['body'] ?></p>
    </div>
</div>
<?php endforeach ?>
</div> 

</body>
</html>