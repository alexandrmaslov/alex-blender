<link rel="stylesheet" type="text/css" href="css/style.css">
<?php

if ( !empty( $_POST ) ){
    $visitor_name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_message = $_POST['message'];

    $admin_email = "maxim.maslov.kd@gmail.com";

    $message = "Вы получили сообщение от: " . $visitor_name . "\r\n";
    $message .= "Адрес эл.почты: " . $visitor_email . "\r\n";
    $message .= "Текст соощения: " . $visitor_message . "\r\n";

    $subject = "Получено сообщение на сайте";

    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers = "From: webmaster@alex-blender.ru\r\n";
    $headers .= "Reply-To: webmaster@alex-blender.ru\r\n";
    $headers .=  "X-Mailer: PHP/" . phpversion();

    $is_sent = mail( $admin_email, $subject, $message, $header );
    
    if ( $is_sent ){
        $response = "Сообщение отправлено успешно !";
    } else {
        $response = "Ошибка отправки сообщения, попробуйте еще раз";
    }
    
    echo "<div class='response'>$response<br><br>";
    echo "<a href='contact.html' class='response_back'>Вернуться на предыдущую страницу</a></div>";

} else{
    die('What are you looking for here ?');
}