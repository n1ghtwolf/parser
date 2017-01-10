<?
function Lintorg(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BD%D0%B0%D0%BF%D0%BE%D0%BB+%D0%BF%D0%BE%D0%BA%D1%80%D1%8B%D1%82&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_10&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=02.12.2016&publishDateTo=&regions=5277378&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


    $str_replace_region = "5277378";
    $str_replace_search = "%D0%BD%D0%B0%D0%BF%D0%BE%D0%BB+%D0%BF%D0%BE%D0%BA%D1%80%D1%8B%D1%82";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BD%D0%B0%D0%BF%D0%BE%D0%BB+%D0%BF%D0%BE%D0%BA%D1%80%D1%8B%D1%82"; // напол покрыт
    $search[]= "%D0%BB%D0%B8%D0%BD%D0%BE%D0%BB%D0%B5%D1%83%D0%BC"; // линолеум
    $search[]= "%D1%81%D1%82%D1%80%D0%BE%D0%B9+%D0%BC%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%B0%D0%BB"; // строй материал
    $search[]= "%D0%BF%D0%BE%D0%BB%D0%BE%D0%B2"; // полов

    $region[] = "5277378"; // Курганская обл
    $region[]= "5277383"; // Свердловская обл
    $region[]= "5277380"; // Челябинская обл

    $active_sheet = 0;
    $name_sheet = "Lintorg";
    $Fname= "Lintorg";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function MosStroyRost(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=2000000&priceTo=&currencyId=1&publishDateFrom=02.12.2016&publishDateTo=&regions=5277335&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


    $str_replace_region = "5277335";
    $str_replace_search = "%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82"; // ремонт
    $search[]= "%D0%B7%D0%B0%D0%BC%D0%B5%D0%BD%D0%B0"; // замена
    

    $region[] = "5277335"; // мск
    $region[]= "5277327"; // мск обл
    

    $active_sheet = 0;
    $name_sheet = "MosStroyRost";
    $Fname= "MosStroyRost";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}

function Capital (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B4%D0%BE%D1%80%D0%BE%D0%B3&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&publishDateFrom=02.12.2016&publishDateTo=&regions=5277373&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


    $str_replace_region = "5277373";//пермь
    $str_replace_search = "%D0%B4%D0%BE%D1%80%D0%BE%D0%B3";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%B4%D0%BE%D1%80%D0%BE%D0%B3"; // дорог
    $search[]= "%D0%B4%D0%BE%D1%80%D0%BE%D0%B6"; // дорож
    $search[]= "%D1%81%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D0%BD"; // содержан
    

    $region[] = "5277373"; // пермь
    

    $active_sheet = 0;
    $name_sheet = "Capital";
    $Fname= "Capital";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function StroyTexProject (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B4%D0%B5%D0%B7%D0%B8%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&publishDateFrom=02.12.2016&publishDateTo=&regions=5277354&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


    $str_replace_region = "5277354";//пермь
    $str_replace_search = "%D0%B4%D0%B5%D0%B7%D0%B8%D0%BD";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%B4%D0%B5%D0%B7%D0%B8%D0%BD"; // дезин
    $search[]= "%D0%B4%D0%B5%D1%80%D0%B0%D1%82"; // дерат
    $search[]= "%D1%85%D0%B8%D0%BC%D1%87%D0%B8%D1%81%D1%82"; // химчист
    $search[]= "%D1%87%D0%B8%D1%81%D1%82"; // чист
    

    $region[] = "5277354"; // ставропольский край
    

    $active_sheet = 0;
    $name_sheet = "StroyTexProject";
    $Fname= "StroyTexProject";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function GlavKadastr (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BA%D0%B0%D0%B4%D0%B0%D1%81%D1%82%D1%80&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&publishDateFrom=02.12.2016&publishDateTo=&regions=5277321&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


    $str_replace_region = "5277321";//воронеж
    $str_replace_search = "%D0%BA%D0%B0%D0%B4%D0%B0%D1%81%D1%82%D1%80";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BA%D0%B0%D0%B4%D0%B0%D1%81%D1%82%D1%80"; // кадастр
    $search[]= "%D0%BC%D0%B5%D0%B6%D0%B5%D0%B2%D0%B0"; // межева
    $search[]= "%D0%BE%D1%86%D0%B5%D0%BD%D0%BA"; // оценк
    $search[]= "%D0%B3%D0%B5%D0%BE%D0%B4%D0%B5%D0%B7%D0%B8%D1%87"; // геодезич
    

    $region[] = "5277321"; // воронеж
    

    $active_sheet = 0;
    $name_sheet = "GlavKadastr";
    $Fname= "GlavKadastr";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function StroyInjProject(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%92%D0%9E%D0%9B%D0%A1&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_10&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=02.12.2016&publishDateTo=&regions=5277335&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	


    $str_replace_region = "5277335";
    $str_replace_search = "%D0%92%D0%9E%D0%9B%D0%A1"; 
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%92%D0%9E%D0%9B%D0%A1"; // ВОЛС
    $search[]= "%D0%92%D0%BE%D0%BB%D0%BE%D0%BA%D0%BE%D0%BD+%D0%9E%D0%BF%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA+%D0%9B%D0%B8%D0%BD"; // Волс незашифр
    $search[]= "%D0%92%D0%BE%D0%BB%D0%BE%D0%BA%D0%BE%D0%BD%D0%BD%D0%BE-%D0%9E%D0%BF%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5+%D0%9B%D0%B8%D0%BD"; // Волс с дефисом
    $search[]= "%D0%BF%D1%80%D0%BE%D0%BA%D0%BB%D0%B0%D0%B4"; // проклад
    $search[]= "%D0%B4%D0%B5%D0%BC%D0%BE%D0%BD%D1%82%D0%B0%D0%B6"; // демонтаж
    $search[]= "%D0%9C%D0%B5%D0%B4%D0%BD+%D0%9B%D0%B8%D0%BD+%D0%A1%D0%B2%D1%8F%D0%B7"; // медные линии связи
    $search[]= "%D0%B0%D0%B1%D0%BE%D0%BD%D0%B5%D0%BD%D1%82+%D0%BE%D0%B1%D1%81%D0%BB%D1%83%D0%B6"; // абонент обслуж
    $search[]= "%D0%90%D0%92%D0%90%D0%A0%D0%98%D0%99%D0%9D%D0%9E-%D0%92%D0%9E%D0%A1%D0%A1%D0%A2%D0%90%D0%9D%D0%9E%D0%92%D0%98%D0%A2%D0%95%D0%9B%D0%AC%D0%9D%D0%AB%D0%95+%D0%A0%D0%90%D0%91%D0%9E%D0%A2%D0%AB"; // аварийно-восст работы капс
    $search[]= "%D0%B0%D0%B2%D0%B0%D1%80%D0%B8%D0%B9%D0%BD+%D0%B2%D0%BE%D1%81%D1%81%D1%82+%D1%80%D0%B0%D0%B1%D0%BE%D1%82"; // аварийно-восст работы сокр
    $search[]= "%D0%BB%D0%B8%D0%BD+%D1%81%D0%B2%D1%8F%D0%B7"; // лин связ
    $search[]= "%D0%BA%D0%B0%D0%B1+%D1%81%D0%B2%D1%8F%D0%B7"; // каб связ
    $search[]= "%D0%B8%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80"; // инженер
    $search[]= "%D1%81%D0%B1%D0%B5%D1%80%D0%B1%D0%B0%D0%BD%D0%BA"; // сбербанк
    $search[]= "%D0%A2%D0%B0%D1%82%D0%BD%D0%B5%D1%84%D1%82"; // татнефть
    $search[]= "%D0%BC%D0%BE%D1%81%D1%8D%D0%BD%D0%B5%D1%80%D0%B3%D0%BE"; // мосенерго
	
	
    

    $region[] = "5277335"; // мск
    $region[]= "5277327"; // мск обл
    

    $active_sheet = 0;
    $name_sheet = "StroyInjProject";
    $Fname= "StroyInjProject";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function KomSistemEx(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=02.12.2016&publishDateTo=&regions=5277320&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

    $str_replace_region = "5277320";
    $str_replace_search = "%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80"; // арматур
    $search[]= "%D1%82%D1%80%D1%83%D0%B1"; // труб
    $search[]= "%D0%BC%D1%83%D1%84%D1%82"; // муфт
    $search[]= "%D0%BA%D1%80%D0%B0%D0%BD+%D1%88%D0%B0%D1%80"; // кран шар
    $search[]= "%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85"; // сантех
    $search[]= "%D0%B4%D0%B5%D1%82%D0%B0%D0%BB+%D1%81%D0%BE%D0%B5%D0%B4"; // детали соед

    $region[] = "5277320"; //Владимирская
    $region[]= "5277370"; //Нижегородская
    $active_sheet = 0;
    $name_sheet = "KomSistemEx";
    $Fname= "KomSistemEx";
    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}