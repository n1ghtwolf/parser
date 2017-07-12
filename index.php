<form method="POST" action ="index.php" autocomplete="off">
<p>Выберите клиента и нажмите на кнопку</p>


<input type="submit" value = "Excel ASC3" name = "ASC">
<input type="submit" value = "StekSahalin" name = "StekSahalin">
<input type="submit" value = "StekProekt" name = "StekProekt">
<br/>
<input type="submit" value = "SmartTEST" name = "SmartTEST">
<input type="submit" value = "Jaric" name = "jaricEx">
<input type="submit" value = "IvanovoEX" name = "IvanovoEX">
<input type="submit" value = "VologdaEx" name = "VologdaEx">
<br/>
<input type="submit" value = "komsistems" name = "komsistems">
<input type="submit" value = "Rostov" name = "Rostov">
<br/>
<input type="submit" value = "MjCompany" name = "MjCompany">
<input type="submit" value = "Lesuk" name = "Lesuk">
<input type="submit" value = "readExelFile" name = "readExelFile">
<input type="submit" value = "DES190" name = "DES190">

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
}if ($_POST['Rostov']){
	Rostov();
}if ($_POST['Best']){
	Best();
}if ($_POST['DES190']){
	DES190();
}if ($_POST['readExelFile']){
	readExelFile();
}if ($_POST['Samara']){
	Samara();
}if ($_POST['NijniyNovgorod']){
	NijniyNovgorod();
}if ($_POST['Ekaterinburg']){
	Ekaterinburg();
}if ($_POST['MegaStroy']){
	MegaStroy();
}if ($_POST['samaraproducti']){
	samaraproducti();
}if ($_POST['Lesuk']){
	Lesuk();
}if ($_POST['komsistems']){
	komsistems();
}
if ($_POST['MjCompany']){
	MjCompany();
}if ($_POST['NedraSibiry']){
	NedraSibiry();
}if ($_POST['BestPrivol']){
	BestPrivol();
}if ($_POST['BestSZP']){
	BestSZP();
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
if ($_POST['Azan']){
	Azan();
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





