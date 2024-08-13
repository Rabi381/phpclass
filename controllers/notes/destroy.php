<?php



$config = require_once base_path('config.php');
$db = new core\Database($config['database']);

$currentUserId = 1;

require_once('/xampp/htdocs/rabi/core/database.php');

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
