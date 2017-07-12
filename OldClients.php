<?
function TrionStroyKom (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BB%D1%8D%D0%BF&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=5000000&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&regions=5277380&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	 
	 
    $str_replace_region = "5277380";// челябинск
    $str_replace_search = "%D0%BB%D1%8D%D0%BF"; //лэп
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BB%D1%8D%D0%BF"; // лэп
    $search[]= "%D0%BC%D0%BE%D0%BD%D1%82%D0%B0%D0%B6+%D0%BC%D0%B5%D1%82%D0%B0%D0%BB"; // монтаж метал
    $search[]= "%D0%BE%D1%81%D0%B2%D0%B5%D1%89"; // освещ
    $search[]= "%D0%B4%D0%B5%D1%80%D0%B5%D0%B2"; // дерев
    $search[]= "%D1%84%D0%B0%D1%81%D0%B0%D0%B4"; // фасад
   
    

    $region[] = "5277380"; // челябинск
    

    $active_sheet = 0;
    $name_sheet = "TrionStroyKom";
    $Fname= "TrionStroyKom";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function Megatrans (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B0%D1%81%D1%81%D0%B0%D0%B6%D0%B8%D1%80+&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&regions=5277338&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	 
	 

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
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BE%D0%B4%D0%B5%D0%B6%D0%B4&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&regions=5277398&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	 
	 
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
	  $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B1%D0%B0%D1%81%D1%81%D0%B5%D0%B9%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&regions=5277390&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "VodniyMir";
    $Fname="VodniyMir";
    $NumberOfPages = 1;
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function energoprom (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%83%D0%B3%D0%BB%D0%B5%D1%80%D0%BE%D0%B4&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&districts=5277377%2C+5277362%2C+5277348%2C+5277317%2C+9371527%2C+5277399%2C+5277384%2C+5277336&regions=&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	 
	 
    $str_replace_region = "";// вся россия,поидее должно менять
    $str_replace_search = "%D1%83%D0%B3%D0%BB%D0%B5%D1%80%D0%BE%D0%B4";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%83%D0%B3%D0%BB%D0%B5%D1%80%D0%BE%D0%B4"; // углеродосодерж материал
    $search[]= "%D0%B3%D0%B8%D0%B4%D1%80%D0%BE%D0%B0%D0%BD%D1%82%D1%80%D0%B0%D1%86%D0%B8%D1%82"; // гидроантрацит
    $search[]= "%D0%B0%D0%BD%D1%82%D1%80%D0%B0%D1%86%D0%B8%D1%82"; // антрацит
    $search[]= "%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%82"; // графит
  
    

    $region[] = ""; // красноярский край
    

    $active_sheet = 0;
    $name_sheet = "energoprom";
    $Fname= "energoprom";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}

function ZemGeoCom (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BA%D0%B0%D0%B4%D0%B0%D1%81%D1%82%D1%80&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&regions=5277374&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	 
	 

    $str_replace_region = "5277374";// самара
    $str_replace_search = "%D0%BA%D0%B0%D0%B4%D0%B0%D1%81%D1%82%D1%80"; //кадастр
	
	
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BA%D0%B0%D0%B4%D0%B0%D1%81%D1%82%D1%80"; // кадастр
    $search[]= "%D0%BC%D0%B5%D0%B6%D0%B5%D0%B2"; // межев
    $search[]= "%D0%B7%D0%B5%D0%BC"; // зем
    $search[]= "%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87+%D0%BF%D0%BB%D0%B0%D0%BD"; // технич план
    $search[]= "%D1%82%D0%BE%D0%BF%D0%BE%D0%B3%D1%80%D0%B0%D1%84"; // топограф
    $search[]= "%D0%BF%D0%B0%D1%81%D0%BF%D0%BE%D1%80%D1%82"; // паспорт

    

    $region[] = "5277374";// самара
    $region[] = "5277375"; // саратов
    $region[] = "5277371"; // оренбург
    $region[] = "5277376"; // оренбург
	
	

  
    

    $active_sheet = 0;
    $name_sheet = "Argus";
    $Fname= "Argus";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}function StroyGroup (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D1%8F%D0%BD%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&regions=5277335&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	 
	 
    $str_replace_region = "5277335";// мск
    $str_replace_search = "%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D1%8F%D0%BD%D0%BD"; //деревянн
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D1%8F%D0%BD%D0%BD"; // деревянн
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2+%D0%BB%D0%B5%D1%81%D1%82%D0%BD%D0%B8%D1%86"; // производств лестниц
    $search[]= "%D0%BC%D0%B0%D0%BB+%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80+%D0%BE%D0%B1"; // мал архитектур об

    

    $region[] = "5277335"; // мск
    $region[] = "5277327"; // мск обл
    $region[] = "5277329"; // разянь обл
    $region[] = "5277332"; // тверь обл
    

    $active_sheet = 0;
    $name_sheet = "StroyGroup";
    $Fname= "StroyGroup";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function Primorskiy (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B8%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&regions=5277401&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	 
	
	 
    $str_replace_region = "5277401";// приморский край
    $str_replace_search = "%D0%B8%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80"; //инженер
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%B8%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80"; // инженер
    $search[]= "%D0%BD%D0%B0%D1%80%D1%83%D0%B6%D0%BD+%D1%81%D0%B5%D1%82"; // наружн сет
    $search[]= "%D0%BA%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0%D1%86"; // канализац
    $search[]= "%D0%B2%D0%BE%D0%B4%D0%BE%D0%BF%D1%80"; // водопр
    $search[]= "%D1%82%D0%B5%D0%BF%D0%BB+%D1%81%D0%B5%D1%82"; // тепл сет

    

    $region[] = "5277401"; // приморский край
  
    

    $active_sheet = 0;
    $name_sheet = "Primorskiy";
    $Fname= "Primorskiy";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}function EuroExp (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=1000000&priceTo=&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&districts=5277377%2C+5277362%2C+5277348%2C+5277317%2C+9371527%2C+5277399%2C+5277384%2C+5277336&regions=&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	 
	 
	 
	 
    $str_replace_region = "";// 
    $str_replace_search = "%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD"; //дизайн
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD"; // дизайн
    $search[]= "%D1%8D%D0%BA%D1%81%D0%BA%D0%BB%D1%8E%D0%B7%D0%B8%D0%B2"; // эксклюзив
    $search[]= "%D0%B2%D1%8B%D1%81%D1%82%D0%B0%D0%B2%D0%BE%D1%87%D0%BD"; // выставоч
    $search[]= "%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86"; // организац
    $search[]= "%D0%B2%D1%8B%D1%81%D1%82%D0%B0%D0%B2%D0%BA"; // выставк
   
   
    

    $region[] = ""; // 
    

    $active_sheet = 0;
    $name_sheet = "EuroExp";
    $Fname= "EuroExp";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function Nazarov (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B7&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=true&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.02.2017&publishDateTo=&regions=5277335&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	 
	 
	
	 
    $str_replace_region = "5277335";// мск
    $str_replace_region = "5277335";// мск
    $str_replace_search = "%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B7";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B7"; // перевоз
    $search[]= "%D0%BF%D0%B0%D1%81%D1%81%D0%B0%D0%B6%D0%B8%D1%80"; // пассажир
 
    

    $region[] = "5277335"; // мск
    $region[] = "5277327"; // мск обл
    

    $active_sheet = 0;
    $name_sheet = "Nazarov";
    $Fname= "Nazarov";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
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
function ASC3CFO(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=23.03.2017&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D1%81%D0%BC%D0%B5%D1%82%D0%BD";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%81%D0%BC%D0%B5%D1%82%D0%BD"; // сметн
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "ASC3CFO";
    $Fname= "ASC3CFO";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function ASC3SZP(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=23.03.2017&publishDateTo=&districts=5277336&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D1%81%D0%BC%D0%B5%D1%82%D0%BD";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%81%D0%BC%D0%B5%D1%82%D0%BD"; // сметн
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "ASC3SZP";
    $Fname= "ASC3SZP";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
	function ASC3SOUTH(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=23.03.2017&publishDateTo=&districts=9371527&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D1%81%D0%BC%D0%B5%D1%82%D0%BD";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%81%D0%BC%D0%B5%D1%82%D0%BD"; // сметн
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "ASC3SOUTH";
    $Fname= "ASC3SOUTH";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}	function ASC3PRIVOL(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=23.03.2017&publishDateTo=&districts=5277362&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D1%81%D0%BC%D0%B5%D1%82%D0%BD";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%81%D0%BC%D0%B5%D1%82%D0%BD"; // сметн
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "ASC3PRIVOL";
    $Fname= "ASC3PRIVOL";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}function ASC3KRIM(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.03.2017&publishDateTo=&regions=8408974&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "8408974";
    $str_replace_search = "%D1%81%D0%BC%D0%B5%D1%82%D0%BD";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D1%81%D0%BC%D0%B5%D1%82%D0%BD"; // сметн
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = "8408974"; //крым
  

    $active_sheet = 0;
    $name_sheet = "ASC3KRIM";
    $Fname= "ASC3KRIM";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function Lika (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BE%D0%B3%D1%80%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=&priceTo=&currencyId=1&publishDateFrom=23.03.2017&publishDateTo=&regions=5277373&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	 
	 
    $str_replace_region = "5277373";// пермский край
    $str_replace_search = "%D0%BE%D0%B3%D1%80%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86"; //организац
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BE%D0%B3%D1%80%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86"; // организац
    $search[]= "%D0%BF%D0%B8%D1%82%D0%B0%D0%BD"; // питан
   
    

    $region[] = "5277373"; // пермский край
    

    $active_sheet = 0;
    $name_sheet = "Lika";
    $Fname= "Lika";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function ASC3(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=23.03.2017&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	
	
    $active_sheet = 0;
    $name_sheet = "Smeta";
    $Fname="ASC3";
    $NumberOfPages = 1;
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function BestPIR(){
	 $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%80&strictEqual=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=5277362%2C+5277317%2C+9371527%2C+5277336&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D0%B8%D1%80";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
   $search[]= "%D0%BF%D0%B8%D1%80"; // пир
    //$search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    //$search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "BestPIR";
    $Fname= "BestPIR";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);
}
function Best1(){
	 $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_district = "5277317";
    $str_replace_search = "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    //$search[]= "%D0%BF%D0%B8%D1%80"; // пир
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $district[] = "5277317"; //ЦФО
    $district[] = "5277336"; //СЗП
    $district[] = "9371527"; //Южный
    $district[] = "5277362"; //Приволжский
  

    $active_sheet = 0;
    $name_sheet = "Best";
    $Fname= "Best";
	
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
  
    $mysqli->query ("DELETE FROM `kostroma` ;");
    $mysqli->query ("DELETE FROM `best` ;");
    
	SmartMultiDistrikts ($url,$name_sheet,$active_sheet,$Fname,$search,$district,$str_replace_search,$str_replace_district);
}
function BestPrivol(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=200000000000&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=5277362&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
   //$search[]= "%D0%BF%D0%B8%D1%80"; // пир
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "BestPrivol";
    $Fname= "BestPrivol";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function BestSouth(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=200000000000&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=9371527&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
   //$search[]= "%D0%BF%D0%B8%D1%80"; // пир
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "BestSouth";
    $Fname= "BestSouth";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function BestCFO(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=200000000000&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
   //$search[]= "%D0%BF%D0%B8%D1%80"; // пир
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "BestCFO";
    $Fname= "BestCFO";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function BestSZP(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=200000000000&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=5277336&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
   //$search[]= "%D0%BF%D0%B8%D1%80"; // пир
    $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "BestSZP";
    $Fname= "BestSZP";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function ASC3CFO(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%80&strictEqual=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=200000000000&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D0%B8%D1%80";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
   $search[]= "%D0%BF%D0%B8%D1%80"; // пир
    //$search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    //$search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "ASC3CFO";
    $Fname= "ASC3CFO";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function ASC3SZP(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%80&strictEqual=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=200000000000&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=5277336&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D0%B8%D1%80";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D0%B8%D1%80"; // пир
   // $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    //$search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "ASC3SZP";
    $Fname= "ASC3SZP";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
	function ASC3SOUTH(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%80&strictEqual=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=200000000000&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=9371527&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D0%B8%D1%80";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D0%B8%D1%80"; // пир
   // $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    //$search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "ASC3SOUTH";
    $Fname= "ASC3SOUTH";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}	function ASC3PRIVOL(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%80&strictEqual=false&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=200000000000&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&districts=5277362&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "";
    $str_replace_search = "%D0%BF%D0%B8%D1%80";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
   $search[]= "%D0%BF%D0%B8%D1%80"; // пир
   // $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    //$search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = ""; //Ямало-ненецкий
  

    $active_sheet = 0;
    $name_sheet = "ASC3PRIVOL";
    $Fname= "ASC3PRIVOL";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}
function ASC3KRIM(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%80&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=500000&priceTo=&currencyId=1&publishDateFrom=22.05.2017&publishDateTo=&regions=8408974&af=true&ca=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	

	
	$str_replace_region = "8408974";
    $str_replace_search = "%D0%BF%D0%B8%D1%80";
    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%BF%D0%B8%D1%80"; // пир
   $search[]= "%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82"; // проект
    $search[]= "%D0%BF%D0%B5%D1%80%D0%B5%D0%BF%D0%BB%D0%B0%D0%BD"; // переплан

    $region[] = "8408974"; //крым
  

    $active_sheet = 0;
    $name_sheet = "BestKRIM";
    $Fname= "BestKRIM";

    MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region);

}