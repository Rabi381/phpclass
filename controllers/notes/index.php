<?php
require('../../core/functions.php');
require base_path('/core/database.php');



$config = require base_path('config.php');
$db = new Database($config['database']);



$notes = $db->query('select * from notes where user_id = 1')->get();






 view("notes/index.view.php",[
    'heading' => 'Notes',
    'notes' => $notes
 ])
 ?>