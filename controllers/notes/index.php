<?php


use core\app;
use core\Database;

$db = App::resolve(Database::class);

$notes = $db->query('select * from notes where user_id = 1')->get();


view("notes/index.view.php", [
   'heading' => 'Notes',
   'notes' => $notes
]);
