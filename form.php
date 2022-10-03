<?php
// $port = 3306;
// $localhost = '127.0.0.1'.':'.$port;
// $user = 'root';
// $pass = '123';
// $dbname = 'test';
// $test = 'mysql:dbname='.$dbname.'host='.$localhost;

$db = new mysqli("localhost", "root", "123", "test", 3306);

// $db = new PDO ($test, $user, $pass);

// echo $db->host_info . "\n";

// echo "<pre>";
//     print_r($_POST);
// echo "</pre>";

$name = $_POST['fio'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$login = $_POST['login'];
$password = $_POST['password'];

$text_write = "INSERT INTO `users` SET `user_name` =:user_name, `email` =:email, `tel` =:tel, `login` =:login, `password` =:password";

$test_write = $db->prepare($text_write);

$test_write->execute([
    'user_name' => $name,
    'email' => $email,
    'tel' => $tel,
    'login' => $login,
    'password' => $password,
]);