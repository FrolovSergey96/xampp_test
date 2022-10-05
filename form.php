<?php
$name = $_POST['fio'];                      //объявление переменных и запись в них значений из html формы
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$host = 'localhost';                                             //данные пользователя root для соединения с БД
$dbname = 'test';
$user = 'root';
$pass = '123';

$connect = mysqli_connect($host, $user, $pass, $dbname);             //соединение с базой данных

if (!$connect)                                                       //проверка соединения
{
    die("Проблема с соединением" . mysqli_connect_error());
}

$sql = "INSERT INTO users (`id`, `name`, `login`, `password`, `email`, `phone`)                   
VALUES ('0', '$name', '$login', '$password', '$email', '$phone')";                       //запись в таблицу значений из переменных

$rs = mysqli_query($connect, $sql);
if($rs)
{
    echo "Message has been sent successfully!";                                         //проверка и вывод сообщения о том, что отправка данных прошла успешно
}
else{
  	echo "Error, Message didn't send! Something's Wrong."; 
}

mysqli_close($connect);