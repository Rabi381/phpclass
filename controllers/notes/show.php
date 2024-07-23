<?php

$config = require('/xampp/htdocs/rabi/config.php');

$db = new Database ($config['database']);

$heading = 'Note';

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);
echo 'hello';

require "/xampp/htdocs/rabi/views/notes/show.view.php";
?>