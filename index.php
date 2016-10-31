<form method="POST" action ="index.php" autocomplete="off">
<p>Выберите клиента и нажмите на кнопку</p>

<input type="submit" value = "CSV" name = "CSV">
<input type="submit" value = "testKOM" name = "kom">
<input type="submit" value = "Excel ASC3" name = "ASC">
<input type="submit" value = "Kostroma" name = "kostromaEx">
<input type="submit" value = "Jaric" name = "jaricEx">
<input type="submit" value = "IvanovoEX" name = "IvanovoEX">
<input type="submit" value = "VologdaEx" name = "VologdaEx">
<input type="submit" value = "KomSistemsEx" name = "KomSistemsEx">
<input type="submit" value = "Evelina" name = "Evelina">
<input type="submit" value = "Lintorg" name = "Lintorg">

</form>
<?
$url = $_POST['url'];
set_time_limit (0);
include 'clients.php';
include 'functions.php';
include 'connections.php';

if ($_POST['CSV']){
	getCSV();
}
if ($_POST['Evelina']){
    Evelina();
}
if ($_POST['Lintorg']){
    Lintorg();
}



if ($_POST['kom']){
	AutoSearchKOM();
}
if ($_POST['kostroma']){
	AutoSearchKostroma();
}
if ($_POST['ASC']){
	ASC3();
}
if ($_POST['kostromaEx']){
	Kostroma();
}
if ($_POST['jaricEx']){
	Jaroslavl();
}
if ($_POST['IvanovoEX']){
	Ivanovo();
}
if ($_POST['VologdaEx']){
	Vologda();
}
if ($_POST['KomSistemsEx']){
	KomSistemEx();
}




