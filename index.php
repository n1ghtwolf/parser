<form method="POST" action ="index.php" autocomplete="off">
<p>Выберите клиента и нажмите на кнопку</p>


<input type="submit" value = "Excel ASC3" name = "ASC">
<input type="submit" value = "Kostroma" name = "kostromaEx">
<input type="submit" value = "Jaric" name = "jaricEx">

<input type="submit" value = "IvanovoEX" name = "IvanovoEX">
<input type="submit" value = "VologdaEx" name = "VologdaEx">
<input type="submit" value = "Evelina" name = "Evelina">

<input type="submit" value = "select" name = "select">
<input type="submit" value = "DropTable" name = "DropTable">
<input type="submit" value = "SmartTEST" name = "SmartTEST">



</form>
<?
$url = $_POST['url'];
set_time_limit (0);
ini_set('memory_limit', '-1');
include 'clients.php';
include 'DB.php';
include 'functions.php';
include 'connections.php';


if ($_POST['CSV']){
	getCSV();
}

if ($_POST['select']){
	LazyDel();
	select();
}
if ($_POST['Evelina']){
    Evelina();
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
}if ($_POST['DropTable']){
	DropTable();
}if ($_POST['SmartTEST']){
    SmartTestKostroma();
}





