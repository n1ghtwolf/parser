﻿
<form method="POST" action ="index.php" autocomplete="off">
<p>Ссылку на страницу пажалста</p>
<input type="text" name = "url"> 
<input type="text" name = "client" value="1"> 
<input type="submit" value = "поехали!" name = "go">
</br>
<input type="submit" value = "Мастер" name = "Master">
<input type="submit" value = "Омега" name = "Omega">
<input type="submit" value = "Касьянова ИП" name = "Kasianova">
<input type="submit" value = "Чупров" name = "Chooprov">
<input type="submit" value = "ТехПомСервис" name = "TechPomService">
</br>
<input type="submit" value = "Сытая жизнь, ООО" name = "SitayaLife">
<input type="submit" value = "Торгмонтаж" name = "TorgMontaj">
<input type="submit" value = "Гагарина ИП" name = "Gagarina">
<input type="submit" value = "Глэдис" name = "Gledis">
<input type="submit" value = "Стиль.РУ" name = "Style">
</br>
<input type="submit" value = "АСЦ №3" name = "ASC3">
<input type="submit" value = "КомСистемс" name = "KomSistems">
<input type="submit" value = "АТЛАС-КАЛУГА" name = "AtlasKaluga">
<input type="submit" value = "smeta-test" name = "smeta">
</form>
<?
$url = $_POST['url'];

include 'functions.php';
include 'connections.php';
if ($_POST['smeta']){
	searchASC3 ($url);
}
//$arr7[0] = $_POST['url'];
//array_push($arr[0],$arr7[0]);





if ($_POST['Master']){	$_POST['client']=$_POST['Master'];WriteToFile($arr);} 
if ($_POST['Omega']){	$_POST['client']=$_POST['Omega'];	WriteToFile($arr);}
if ($_POST['Kasianova']){	$_POST['client']=$_POST['Kasianova'];$arr[0][5]=$arr[0][6];WriteToFile($arr);}//начинать отсюда
if ($_POST['Chooprov']){	$_POST['client']=$_POST['Chooprov'];	WriteToFile($arr);}
if ($_POST['TechPomService']){	$_POST['client']=$_POST['TechPomService'];	WriteToFile($arr);}
if ($_POST['SitayaLife']){	$_POST['client']=$_POST['SitayaLife'];	WriteToFile($arr);}
if ($_POST['TorgMontaj']){	$_POST['client']=$_POST['TorgMontaj'];	WriteToFile($arr);}
if ($_POST['Gagarina']){	$_POST['client']=$_POST['Gagarina'];	WriteToFile($arr);}
if ($_POST['Gledis']){	$_POST['client']=$_POST['Gledis'];	WriteToFile($arr);}
if ($_POST['Style']){	$_POST['client']=$_POST['Style'];	WriteToFile($arr);}
if ($_POST['ASC3']){	$_POST['client']=$_POST['ASC3'];	WriteToFile($arr);}
if ($_POST['KomSistems']){	$_POST['client']=$_POST['KomSistems'];	WriteToFile($arr);}
if ($_POST['AtlasKaluga']){	$_POST['client']=$_POST['AtlasKaluga'];	WriteToFile($arr);}



