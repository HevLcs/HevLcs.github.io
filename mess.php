<?php

$to="vornfrost@gmail.com";
$from="";
$subject="";
$subject="=?utf-8?B?".base64_encode($subject)."?=";
$header="From: $from\r\nReply-to: $from\r\nContent-type:text/plain;charset=utf-8\r\n";

$_GET["email"]=$from;
$_GET["thema"]=$subject;

if (isset($_GET["submit"])){
	if ($_GET["text"]==""){
		echo "Введите ваше сообщение"."</br>";
	} else if ($_GET["thema"]=="") {
		$_GET["thema"]="Без темы";		
		mail($to,$_GET["thema"],$_GET["text"],$header);
		echo "Вы успешно отправили сообщение";
		
		}
	
}
?>