<?php

use core\app;
use core\Database;
use core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];

 if(! Validator::email($email)) {

$errors['email'] = 'please provide a valid email address.';

}
 if(! Validator::string($password , 7, 255)) {

$errors['password'] = 'please provide a password of at least seven characters.';

}
if(! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = app::resolve(Database::class);

$user = $db->query('select * from users where email = :email',[
    'email' => $email
])->find();


if ($user) {


    header('location: /');
    exit();

} else {
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)' , [
        'email' => $email,
        'password' => $password
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();

}

