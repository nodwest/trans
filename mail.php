<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
  if (isset($_POST['tel'])) {$phone = $_POST['tel'];}
    if (isset($_POST['email'])) {$email = $_POST['email'];}
	if (isset($_POST['message'])) {$message = $_POST['message'];}
	if (isset($_POST['otkuda'])) {$otkuda = $_POST['otkuda'];}
	if (isset($_POST['kuda'])) {$kuda = $_POST['kuda'];}
	if (isset($_POST['dlina'])) {$dlina = $_POST['dlina'];}
	if (isset($_POST['width'])) {$width = $_POST['width'];}
	if (isset($_POST['height'])) {$height = $_POST['height'];}
	if (isset($_POST['massa'])) {$massa = $_POST['massa'];}


/* Сюда впишите свою эл. почту */
 $address = "info@stm.lc";
 $address1 = "stmlog@mail.ru";



/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Тема: Заявка от сайта СТМ ЛОГИСТИК!\nИмя: $name\nТелефон: $phone\nПочта: $email\nКомментарий: $message\nОткуда_везем: $otkuda\nКуда_везем: $kuda\nДлина: $dlina\nВысота: $height\nШирина: $width\nМасса: $massa";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Обращение на сайте'; //сабж
$email='admin@site.ru'; // от кого
 $send = mail ($address1,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.htm');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.htm">
<title>С вами свяжутся</title>
<meta name="generator">
<style type="text/css">
body
{
   
   background: #fff url(zakaz.png) top -50% center no-repeat;
   
}
	</style>
<script type="text/javascript">
setTimeout('location.replace("index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
<!-- YAGLA -->
<script src="//st.yagla.ru/js/y.c.js?h=e0174bf5de83e46bb94fe4c3681db20b"></script>
</head>
</body>
</html>