<html>
<head>
<meta charset="utf-8">
<title>Оформление ссылок</title>
 
<style>
#submit {
font-family: sans-serif;
color: #ffffff;
font-size: 18px;
padding: 0px;
text-decoration: none;
box-shadow: 0px 1px 3px #666666;
-webkit-box-shadow: 0px 1px 3px #666666;
-moz-box-shadow: 0px 1px 3px #666666;
text-shadow: 1px 1px 3px #666666;
background: -webkit-gradient(linear, 0 0, 0 100%, from(#ce1515), to(#8b0d0d));
background: -moz-linear-gradient(top, #ce1515, #8b0d0d);
}
 
#submit:hover {
 background: -webkit-gradient(linear, 0 0, 0 100%, from(#8b0d0d), to(#ce1515));
 background: -moz-linear-gradient(top, #8b0d0d, #ce1515)
}
#respond input[type=text], textarea {
 -webkit-transition: all 0.30s ease-in-out;
 -moz-transition: all 0.30s ease-in-out;
 -ms-transition: all 0.30s ease-in-out;
 -o-transition: all 0.30s ease-in-out;
 outline: none;
 padding: 3px 0px 3px 3px;
 margin: 5px 1px 3px 0px;
 border: 1px solid #DDDDDD;
}
#respond input[type=text]:focus, textarea:focus {
 box-shadow: 0 0 5px rgba(81, 203, 238, 1);
 margin: 5px 1px 3px 0px;
 border: 1px solid rgba(81, 203, 238, 1);
}
</style>
</head>
 
<body>
<meta charset="UTF-8" />
 
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['sub'])) {$sub = $_POST['sub']; if ($sub == '') {unset($sub);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
 
if (isset($name) && isset($email) && isset($sub) && isset($body)){
 
$address = "chelpuck@yandex.ru";
$mes = "Имя: $name \nE-mail: $email \nТема: $sub \nТекст: $body";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Сообщение отправлено успешно. Перейдите на главную страницу блога <a href='http://bloggood.ru/'>BLOGGOOD.RU</a>,и вы сможете продолжить ваш просмотр";}
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Заполнили все поля!!!";
}
?>
 
<h2>Форма обратной связи.</h2>
 
<form name="MyForm" action="" method="post">
<p><input class="input" name="name" type="text" style="width:15%" /> Ваше имя*</p>
<p><input class="input" name="email" type="text" style="width:15%" /> Электронная почта*</p>
<p><input class="input" name="sub" type="text" style="width:15%" /> Тема сообщения</p>
<p>Текст сообщения:<br /><textarea name="body" cols="1" rows="5" style="width:30%" /></textarea></p>
<p><input id="submit" value="Отправить" type="submit" /></p>
</form>
 
</body>
</html>