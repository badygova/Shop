<?php
/**
 * Created by PhpStorm.
 * User: Алия
 * Date: 06.05.2019
 * Time: 13:55
 */
//сделать нормальный вывод ошибки
if(isset($_POST["submit"])){
    // проверяем чтобы поля не были пустыми..
    if($_POST["name"] == "" || $_POST["email"] == "" || $_POST["sub"] == "" || $_POST["message"] == ""){
        echo "Ошибка: Заполните все поля..";
    }
    else{
        // Проверяем e-mail отправителя на соответствие формату
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email){
            echo "Ошибка: Не верный формат Email адреса";
        }
        else{
            $subject = $_POST['sub'];
            $message = $_POST['message'];
            $headers = 'From:'. $email . "\r\n"; // Адрес отправителя
            $headers .= 'Cc:'. $email . "\r\n"; // копия

            // Если длина строки больше 70 символов делаем перенос
            $message = wordwrap($message, 70);

            // Отправляем почту php mail() функцией
            if(mail("abadygova17@gmail.com", $subject, $message, $headers))
                echo "Ваше письмо отправлено! Спасибо за ваш отзыв!";
            else
                echo "Ошибка при отправке письма!";
        }
    }
}