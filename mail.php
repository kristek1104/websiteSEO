<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);

$name = urlencode($name);
$phone = urlencode($phone);

$name = trim($name);
$phone = trim($phone);

if (mail("kristek1104@mail.ru",
     "Pest Reject",
     "Имя: ".$name."\n".
     "Телефон ".$phone,
     "From: janepeskey@gmail.ru \r\n")
){
    echo "Сообщение успешно отправлено";
}

else {
     echo ("Ошибка");
}
ini_set('display_errors','On');
error_reporting('E_ALL');
?>