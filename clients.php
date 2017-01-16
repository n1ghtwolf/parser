<?php
function ASC3(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Smeta";
    $Fname="ASC3";
    $NumberOfPages = 1;
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Kostroma(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&regions=5277324&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Kostroma";
    $NumberOfPages = 10;
    $Fname="Kostroma";
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Jaroslavl(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&regions=5277334&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Jaroslavl";
    $NumberOfPages= 15;
    $Fname= "Jaroslavl";
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Ivanovo(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&regions=5277322&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Ivanovo";
    $NumberOfPages= 8;
    $Fname= "Ivanovo";
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Vologda(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&regions=5277340&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Vologda";
    $NumberOfPages= 15;
    $Fname= "Vologda";
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}

function Evelina(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%82%D0%B0%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&regions=5277382&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


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
function Megatrans (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B0%D1%81%D1%81%D0%B0%D0%B6%D0%B8%D1%80+&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&regions=5277338&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	 
	 

    $str_replace_region = "5277338";//респ коми
    $str_replace_search = "%D0%BF%D0%B0%D1%81%D1%81%D0%B0%D0%B6%D0%B8%D1%80+";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D0%B0%D1%81%D1%81%D0%B0%D0%B6%D0%B8%D1%80+"; // пассажир
    $search[]= "%D0%BF%D1%80%D0%B5%D0%B4%D1%80%D0%B5%D0%B9%D1%81"; // предрейс
    $search[]= "%D0%BF%D0%BE%D1%81%D0%BB%D0%B5%D1%80%D0%B5%D0%B9%D1%81"; // послерейс
    $search[]= "%D0%BF%D0%BE%D1%81%D0%BB%D0%B5+%D1%80%D0%B5%D0%B9%D1%81"; // после рейс
    

    $region[] = "5277338"; // респ коми
    

    $active_sheet = 0;
    $name_sheet = "Megatrans";
    $Fname= "Megatrans";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function SibirShuesCompany (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BE%D0%B4%D0%B5%D0%B6%D0%B4&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&regions=5277398&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	 
	 
    $str_replace_region = "5277398";// красноярский край
    $str_replace_search = "%D0%BE%D0%B4%D0%B5%D0%B6%D0%B4";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BE%D0%B4%D0%B5%D0%B6%D0%B4"; // одежд
    $search[]= "%D0%BE%D0%B1%D1%83%D0%B2"; // обув
    $search[]= "%D1%84%D1%83%D1%80%D0%BD%D0%B8%D1%82%D1%83%D1%80"; // фурнитур
    $search[]= "%D1%80%D0%BE%D0%B1%D0%B0"; // роба
    $search[]= "%D0%B2%D0%BE%D0%B5%D0%BD"; // воен
    $search[]= "%D1%81%D0%BF%D0%B5%D1%86%D0%BE%D0%B4%D0%B5%D0%B6%D0%B4"; // спецодежд
    $search[]= "%D1%81%D0%BF%D0%B5%D1%86+%D0%BE%D0%B4%D0%B5%D0%B6%D0%B4"; // спец одежд
    

    $region[] = "5277398"; // красноярский край
    

    $active_sheet = 0;
    $name_sheet = "SibirShuesCompany";
    $Fname= "SibirShuesCompany";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function VodniyMir (){
	  $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B1%D0%B0%D1%81%D1%81%D0%B5%D0%B9%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&regions=5277390&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "VodniyMir";
    $Fname="VodniyMir";
    $NumberOfPages = 1;
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function SmartTestKostroma(){
     $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=13.01.2017&publishDateTo=&regions=5277324&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Kostroma";
    $NumberOfPages = 10;
    $Fname="Kostroma";
    SmartSingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}