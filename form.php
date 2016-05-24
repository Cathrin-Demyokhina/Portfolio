<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['text'])&&$_POST['text']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'k.dem1985@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'New Message'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Name: '.$_POST['name'].'</p>
                        <p>Email: '.$_POST['email'].'</p>
                        <p>Message: '.$_POST['text'].'</p>
                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <from@example.com>\r\n";
    mail($to, $subject, $message, $headers);

    $backurl="http://cathrin-demyokhina.github.io/Portfolio/index.html";

    print "<script language='Javascript'><!--
    function reload() {location = \"$backurl\"} setTimeout('reload()', 1000);
        //--></script>


<p>Your message is sent successfully! Please, wait...</p>";
    exit;

}
?>