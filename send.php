<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$what=$_POST['what'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$what = htmlspecialchars($what);
$name = urldecode($name);
$phone = urldecode($phone);
$what = urldecode($what);
$name = trim($name);
$phone = trim($phone);
$what = trim($what);
// if (mail("admin@marpi.ru", "Заявка с сайта", "Имя:".$name.". Телефон: ".$phone ,". Вопрос: ".$what ,"From: site@marpi.ru \r\n"))
//  { 
//     echo "сообщение успешно отправлено"; 
// } else { 
//     echo "при отправке сообщения возникли ошибки"; 
// }

 $to = 'admin@marpi.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>Телефон: '.$_POST['what'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <admin@marpi.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
header('location: thanks.html');
exit();



?>