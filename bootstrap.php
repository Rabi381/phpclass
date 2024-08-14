<?php
use core\app;
use core\container;
use core\Database;

$container = new container();

$container->bind('core\Database', function() {

$config = require base_path('config.php');

return new Database($config['database']);

});

app::setcontainer($container);


