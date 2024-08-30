<?php

use core\session;

view('session/create.view.php', [
    'errors' => session::get('errors')
]);
