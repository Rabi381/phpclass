<?php

use core\authenticator;
use core\session;
use Http\Forms\LoginForm;

var_dump('i have been posted');
$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {

    $auth = new authenticator();

    if ($auth->attempt($email, $password)) {
        redirect('/');
    }
    $form->error('email', 'No matching account found for that email address and password');
}

session::flash('errors', $form->errors());

session::flash('old', [
    'email' => $_POST['email']
]);

return redirect('/login');
