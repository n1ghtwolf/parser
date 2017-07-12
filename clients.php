<?php
function ASC3(){
     $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D1%81%D0%BC%D0%B5%D1%82%D0%BD";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%81%D0%BC%D0%B5%D1%82%D0%BD"; // сметн
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "ASC3";
    $Fname= "ASC3";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}

	
    

function Kostroma(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277324&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Kostroma";
    $NumberOfPages = 10;
    $Fname="Kostroma";
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Jaroslavl(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277334&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Jaroslavl";
    $NumberOfPages= 5;
    $Fname= "Jaroslavl";
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
    //SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Ivanovo(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277322&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Ivanovo";
    $NumberOfPages= 5;
    $Fname= "Ivanovo";
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
    //SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Vologda(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277340&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Vologda";
    $NumberOfPages= 5;
    $Fname= "Vologda";
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
    //SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}

function Evelina(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%82%D0%B0%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277382&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


    $str_replace_region = "5277382";
    $str_replace_search = "%D0%BF%D0%B8%D1%82%D0%B0%D0%BD";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D0%B8%D1%82%D0%B0%D0%BD"; // питан
    $search[]= "%D1%83%D0%B1%D0%BE%D1%80%D0%BA"; // уборк
    $search[]= "%D0%BA%D0%BB%D0%B8%D0%BD%D0%B8%D0%BD"; // клинин

    $region[] = "5277382"; //Ямало-ненецкий
    $region[]= "5277381"; //Ханты мансийский АО югра

    $active_sheet = 0;
    $name_sheet = "Evelina";
    $Fname= "Evelina";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}

function Irisik (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%82%D0%B0%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277329&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	 

    $str_replace_region = "5277329";// рязан обл
    $str_replace_search = "%D0%BF%D0%B8%D1%82%D0%B0%D0%BD"; //питан
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D0%B8%D1%82%D0%B0%D0%BD"; // питан
    $search[]= "%D0%BA%D0%BE%D0%BD%D0%B4%D0%B8%D1%82%D0%B5%D1%80"; // кондитер
    $search[]= "%D1%88%D0%BE%D0%BA%D0%BE%D0%BB%D0%B0%D0%B4"; // шоколад
    $search[]= "%D0%BA%D0%BE%D0%BD%D1%84%D0%B5%D1%82"; // конфет
    $search[]= "%D1%81%D0%BB%D0%B0%D0%B4%D0%BA%D0%B8%D1%85+%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BA%D0%BE%D0%B2"; // сладких подарков

    

    $region[] = "5277329"; // рязан обл
	$region[] = "5277335"; // мск
    $region[] = "5277327"; // мск обл
    $region[] = "5277320"; // владимир
    $region[] = "5277333"; // тула
    $region[] = "5277331"; // тамбов
  
    

    $active_sheet = 0;
    $name_sheet = "Irisik";
    $Fname= "Irisik";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}


function SmartTestKostroma(){
     $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277324&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Kostroma";
    $NumberOfPages = 5;
    $Fname="Kostroma";
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function komsistems(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277320&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


	
	 $str_replace_region = "5277320";// Владимирская обл
    $str_replace_search = "%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80"; //арматур
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80"; // арматур
    $search[]= "%D1%82%D1%80%D1%83%D0%B1"; // труб
    $search[]= "%D0%BC%D1%83%D1%84%D1%82"; // муфт
    $search[]= "%D0%BA%D1%80%D0%B0%D0%BD+%D1%88%D0%B0%D1%80"; // кран шар
    $search[]= "%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85"; // сантех
    $search[]= "%D0%B4%D0%B5%D1%82%D0%B0%D0%BB+%D1%81%D0%BE%D0%B5%D0%B4"; // детали соед

	
	
	
    $region[] = "5277320"; //Владимирская
    $region[]= "5277370"; //Нижегородская
    $region[]= "5277322"; //вологодская
    $region[]= "5277324"; //костромская
    $region[]= "5277334"; //ярославская
    $region[]= "5277322"; //ивановская

    $active_sheet = 0;
    $name_sheet = "komsistems";
    $Fname= "komsistems";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function NedraSibiry(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B1%D1%83%D1%80+%D1%80%D0%B0%D0%B1&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277391&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


	
	 $str_replace_region = "5277391";// новосиб обл
    $str_replace_search = "%D0%B1%D1%83%D1%80+%D1%80%D0%B0%D0%B1"; //бур раб
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%B1%D1%83%D1%80+%D1%80%D0%B0%D0%B1"; // бур раб
    $search[]= "%D0%B2%D0%B7%D1%80%D1%8B%D0%B2"; // взрыв
    $search[]= "%D0%BF%D0%BE%D0%B4%D1%80%D1%8B%D0%B2"; // подрыв
    $search[]= "%D0%B4%D0%B5%D0%BC%D0%BE%D0%BD%D1%82%D0%B0%D0%B6"; // демонтаж


	
	
	
    $region[] = "5277391"; //новосиб
    $region[]= "5277393"; //томская
    $region[]= "5277390"; //кемеровская
    $region[]= "5277385"; //алтай респ
    $region[]= "5277388"; //алтай край

    $active_sheet = 0;
    $name_sheet = "NedraSibiry";
    $Fname= "NedraSibiry";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function MosStroyRost(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=9000000&priceTo=60000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277335&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	
	

    $str_replace_region = "5277335";
    $str_replace_search = "%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82"; // ремонт
    $search[]= "%D0%B1%D0%BB%D0%B0%D0%B3%D0%BE%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2"; // благоустройств
    $search[]= "%D0%B7%D0%B0%D0%BC%D0%B5%D0%BD%D0%B0"; // замена
    

    $region[] = "5277335"; // мск
    $region[]= "5277327"; // мск обл
    

    $active_sheet = 0;
    $name_sheet = "MosStroyRost";
    $Fname= "MosStroyRost";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function Azan(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B7&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277366&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	
	

    $str_replace_region = "5277366";
    $str_replace_search = "%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B7";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B7"; // перевоз


    $region[] = "5277366"; // татарстан
    $region[]= "5277376"; // хз
    $region[]= "5277360"; // хз
    $region[]= "5277355"; // хз
    $region[]= "5277372"; // хз
    $region[]= "5277356"; // хз
    $region[]= "5277374"; // хз
    $region[]= "5277375"; // хз
    

    $active_sheet = 0;
    $name_sheet = "Azan";
    $Fname= "Azan";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function StroyInjProj(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%92%D0%9E%D0%9B%D0%A1&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277335&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	
	
    $str_replace_region = "5277335";
    $str_replace_search = "%D0%92%D0%9E%D0%9B%D0%A1";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%92%D0%9E%D0%9B%D0%A1"; // ВОЛС
    $search[]= "%D0%B2%D0%BE%D0%BB%D0%BE%D0%BA%D0%BE%D0%BD"; // волокон
   
    

    $region[] = "5277335"; // мск
    $region[]= "5277327"; // мск обл
    

    $active_sheet = 0;
    $name_sheet = "StroyInjProj";
    $Fname= "StroyInjProj";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function StekSahalin(){
	$url = "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=10000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277406&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	
	


	 $active_sheet = 0;
    $name_sheet = "StekSahalin";
    $NumberOfPages = 5;
    $Fname="StekSahalin";
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
		
}
function StekProekt(){
	$url = "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=10000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277406&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	



	 $str_replace_region = "5277406";
    $str_replace_search = "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B8%D1%80"; // пир
   
   
    

    $region[] = "5277406"; // сахалинск обл
    $region[] = "5277401"; // пермск 
    $region[] = "5277402"; // хабаровск 
    $region[] = "5277404"; // камчат 
   
    

    $active_sheet = 0;
    $name_sheet = "StekProekt";
    $Fname= "StekProekt";	

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
		
}
function Best(){
	 $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D0%BD%D0%B8%D0%BA&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&districts=5277362%2C+5277317%2C+9371527%2C+5277336&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D0%BD%D0%B8%D0%BA";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
   //$search[]= "%D0%BF%D0%B8%D1%80"; // пир
    //$search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D0%BD%D0%B8%D0%BA"; // памятник
    $search[]= "%D0%BA%D1%83%D0%BB%D1%8C%D1%82%D1%83%D1%80%D0%BD%D0%BE%D0%B3%D0%BE+%D0%BD%D0%B0%D1%81%D0%BB%D0%B5%D0%B4%D0%B8%D1%8F"; // культурного наследия
   // $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "Best";
    $Fname= "Best";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}

function MjCompany(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B6%5C%D0%B4&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&districts=5277377%2C+5277362%2C+5277317%2C+9371527%2C+5277399%2C+5277384%2C+5277336&regions=&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	
	$str_replace_region = "";
    $str_replace_search = "%D0%B6%5C%D0%B4";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
   $search[]= "%D0%B6%5C%D0%B4"; // ж\д
    $search[]= "%D0%B6%2F%D0%B4"; // ж/д
    $search[]= "%D0%B6%D0%B5%D0%BB%D0%B5%D0%B7%D0%BD"; // железн
    $search[]= "%D1%82%D1%80%D0%B0%D0%BC%D0%B2%D0%B0%D0%B9"; // трамвай
    $search[]= "%D0%BF%D0%BE%D0%B4%D0%BA%D1%80%D0%B0%D0%BD"; // подкран
    $search[]= "%D0%BF%D1%83%D1%82%D0%B5%D0%B9"; // путей

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "MjCompany";
    $Fname= "MjCompany";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function Rostov(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277357&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Rostov";
    $NumberOfPages= 10;
    $Fname= "Rostov";
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
    //SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Lesuk(){
	$url = "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%82+%D0%BF%D0%B8%D1%82%D0%B0%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277335&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	



	 $str_replace_region = "5277335";
    $str_replace_search = "%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%82+%D0%BF%D0%B8%D1%82%D0%B0%D0%BD";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%82+%D0%BF%D0%B8%D1%82%D0%B0%D0%BD"; // продуктов питан
    $search[]= "%D0%BE%D0%B2%D0%BE%D1%89"; // овощ
    $search[]= "%D1%84%D1%80%D1%83%D0%BA%D1%82"; // фрукт
    $search[]= "%D1%81%D1%83%D1%85%D0%BE%D1%84%D1%80%D1%83%D0%BA%D1%82"; // сухофрукт
   
   
    

    $region[] = "5277335"; // мск
    $region[] = "5277327"; // мск обл 

   
    

    $active_sheet = 0;
    $name_sheet = "Lesuk";
    $Fname= "Lesuk";	

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
		
}
function Ekaterinburg(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277383&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Ekaterinburg";
    $NumberOfPages= 25;
    $Fname= "Ekaterinburg";
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
    //SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}function NijniyNovgorod(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277370&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "NijniyNovgorod";
    $NumberOfPages= 20;
    $Fname= "NijniyNovgorod";
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
    //SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}function Samara(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277374&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
   
    $active_sheet = 0;
    $name_sheet = "Samara";
    $NumberOfPages= 15;
    $Fname= "Samara";
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
    //SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function samaraproducti(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%82+%D0%BF%D0%B8%D1%82%D0%B0%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277374&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	
	
    $active_sheet = 0;
    $name_sheet = "samaraproducti";
    $Fname="samaraproducti";
    $NumberOfPages = 5;
SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);}

function MegaStroy(){
	$url = "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%80%D0%B5%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277374&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	 $str_replace_region = "5277374";
    $str_replace_search = "%D1%80%D0%B5%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%80%D0%B5%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86"; // реконструкц
    $search[]= "%D0%B4%D0%BE%D1%80%D0%BE%D0%B3"; // дорог
    $search[]= "%D0%B1%D0%BB%D0%B0%D0%B3%D0%BE%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2"; // благоустройств
    $search[]= "%D1%81%D0%BD%D0%BE%D1%81"; // снос
    $search[]= "%D0%B4%D0%BE%D1%80%D0%BE%D0%B6"; // дорож
    $search[]= "%D1%81%D1%82%D1%80%D0%BE%D0%B8%D1%82%D0%B5%D0%BB"; // строител
    $search[]= "%D1%84%D0%B0%D1%81%D0%B0%D0%B4"; // фасад
    $search[]= "%D0%BA%D1%80%D0%BE%D0%B2"; // кров
   
   
    

    $region[] = "5277374"; // самара
    

   
    

    $active_sheet = 0;
    $name_sheet = "MegaStroy";
    $Fname= "MegaStroy";	

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
		
}
function DES190(){
	$url = "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%80%D0%B5%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=200000&priceTo=&currencyId=1&publishDateFrom=22.06.2017&publishDateTo=&regions=5277330&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	 $str_replace_region = "5277330";
    $str_replace_search = "%D1%80%D0%B5%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86";
  
    $search[]= "%D1%80%D0%B5%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86"; // реконструкц
    $search[]= "%D0%B4%D0%BE%D1%80%D0%BE%D0%B3"; // дорог
    $search[]= "%D0%B4%D0%BE%D1%80%D0%BE%D0%B6"; // дорож
    $search[]= "%D1%81%D1%82%D1%80%D0%BE%D0%B8%D1%82%D0%B5%D0%BB"; // строител
    $search[]= "%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82"; // ремонт
   
   
    

    $region[] = "5277330"; // смоленск
    

   
    

    $active_sheet = 0;
    $name_sheet = "DES190";
    $Fname= "DES190";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
		
}