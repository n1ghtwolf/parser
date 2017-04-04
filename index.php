<form method="POST" action ="index.php" autocomplete="off">
<p>Выберите клиента и нажмите на кнопку</p>


<input type="submit" value = "Excel ASC3" name = "ASC">
<input type="submit" value = "Evelina" name = "Evelina">

<br/>
<input type="submit" value = "SmartTEST" name = "SmartTEST">
<input type="submit" value = "Jaric" name = "jaricEx">
<input type="submit" value = "IvanovoEX" name = "IvanovoEX">
<input type="submit" value = "VologdaEx" name = "VologdaEx">
<br/>
<input type="submit" value = "Irisik" name = "Irisik">
<input type="submit" value = "komsistems" name = "komsistems">
<input type="submit" value = "StekSahalin" name = "StekSahalin">
<input type="submit" value = "StekProekt" name = "StekProekt">
<input type="submit" value = "ASC3KRIM" name = "ASC3KRIM">
<input type="submit" value = "Best" name = "Best">
<input type="submit" value = "ASC3CFO" name = "ASC3CFO">
<input type="submit" value = "ASC3SZP" name = "ASC3SZP">
<input type="submit" value = "ASC3PRIVOL" name = "ASC3PRIVOL">
<input type="submit" value = "ASC3SOUTH" name = "ASC3SOUTH">
<input type="submit" value = "count_records_best" name = "count_records_best">
<input type="submit" value = "MjCompany" name = "MjCompany">
<input type="submit" value = "BestCFO" name = "BestCFO">

<br/>
<br/>
<input type="submit" value = "select" name = "select">

<br/>
<input type="submit" value = "DropTable" name = "DropTable">
<br/>


</form>
<?
$url = $_POST['url'];
set_time_limit (0);
ini_set('memory_limit', '-1');
include 'clients.php';
include 'DB.php';
include 'functions.php';
include 'connections.php';


if ($_POST['StekProekt']){
	StekProekt();
}if ($_POST['StekSahalin']){
	StekSahalin();
}if ($_POST['ASC3KRIM']){
	ASC3KRIM();
}if ($_POST['Best']){
	Best();
}if ($_POST['ASC3CFO']){
	ASC3CFO();
}if ($_POST['ASC3SZP']){
	ASC3SZP();
}if ($_POST['ASC3PRIVOL']){
	ASC3PRIVOL();
}if ($_POST['ASC3SOUTH']){
	ASC3SOUTH();
}if ($_POST['StroyGroup']){
	StroyGroup();
}if ($_POST['Irisik']){
	Irisik();
}if ($_POST['count_records_best']){
	count_records_best();
}if ($_POST['komsistems']){
	komsistems();
}
if ($_POST['MjCompany']){
	MjCompany();
}if ($_POST['BestCFO']){
	BestCFO();
}if ($_POST['SibirShuesCompany']){
	SibirShuesCompany();
}if ($_POST['VodniyMir']){
	VodniyMir();
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





