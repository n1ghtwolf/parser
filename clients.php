<?php
function ASC3(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Smeta";
    $Fname="ASC3";
    $NumberOfPages = 1;
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Kostroma(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277324&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Kostroma";
    $NumberOfPages = 4;
    $Fname="Kostroma";
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Jaroslavl(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277334&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Jaroslavl";
    $NumberOfPages= 3;
    $Fname= "Jaroslavl";
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Ivanovo(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277322&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Ivanovo";
    $NumberOfPages= 2;
    $Fname= "Ivanovo";
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Vologda(){
    $url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277340&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
    $active_sheet = 0;
    $name_sheet = "Vologda";
    $NumberOfPages= 2;
    $Fname= "Vologda";
    SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function KomSistemEx(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277320&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

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
function Evelina(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BF%D0%B8%D1%82%D0%B0%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_10&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277382&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


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
function Lintorg(){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BD%D0%B0%D0%BF%D0%BE%D0%BB+%D0%BF%D0%BE%D0%BA%D1%80%D1%8B%D1%82&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_10&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277378&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


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
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%80%D0%B5%D0%BC%D0%BE%D0%BD%D1%82&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=2000000&priceTo=&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277335&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


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
function AutoSearchKOM (){
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277320&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


    /*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
    $search[]= "%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80"; // арматур
    $search[]= "%D1%82%D1%80%D1%83%D0%B1"; // труб
    $search[]= "%D0%BC%D1%83%D1%84%D1%82"; // муфт
    $search[]= "%D0%BA%D1%80%D0%B0%D0%BD+%D1%88%D0%B0%D1%80"; // кран шар
    $search[]= "%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85"; // сантех
    $search[]= "%D0%B4%D0%B5%D1%82%D0%B0%D0%BB+%D1%81%D0%BE%D0%B5%D0%B4"; // детали соед
    $time =	time();
    $sort[] = "sortBy=UPDATE_DATE";
    $sort[] = "sortBy=PUBLISH_DATE";
    $sort[] = "sortBy=UPDATE_PRICE";
    $sort[] = "sortBy=RELEVANCE";
    $old = "05.09.2016";
    $olddate = date("d.m.y.D");
    $region[] = "5277320"; //Владимирская
    $region[]= "5277370"; //Нижегородская
    /*if (strpos($olddate,"Sun") == TRUE) {

        $newdate =date('d.m.Y', strtotime('-2 day'));
        echo "обнаружено воскресенье, выставляю дату". $newdate ."\n";
        $url= str_replace($old,$newdate,$url);
    }
    else
    {
        $newdate = date("d.m.Y");
        $url =str_replace($old,$newdate,$url);
        echo "Воскресенье не обнаружено, выставляю текущую дату " . $newdate;



    }*/
    $NumberOfPages = 1;
    foreach ($region as $reg){
        $url = str_replace("5277320",$reg,$url);
        foreach ($search as $se){

            $uri = str_replace("%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80",$se,$url);


            foreach	($sort as $s)
            {
                $url1=str_replace("sortBy=UPDATE_DATE",$s,$uri);
                //echo $url1 . "</br>";
                $result = get_web_page($url1);
                if (($result['errno'] != 0 )||($result['http_code'] != 200))
                {
                    echo $result['errmsg'];

                }
                else
                {
                    $page = $result['content'];
                }
                preg_match_all('/<td class="descriptTenderTd">(.+?)href="(.*?)"/s',$page,$smet);

                if($NumberOfPages>1)
                {
                    for($i=0;$i<$NumberOfPages;$i++)
                    {
                        sleep(rand(3,5));
                        $replace = "pageNumber=".$i;
                        $url2=str_replace($match1,$match,$url1);
                        echo $url2."</br>";

                        $result = get_web_page($url2);
                        if (($result['errno'] != 0 )||($result['http_code'] != 200))
                        {
                            echo $result['errmsg'];

                        }
                        else
                        {
                            $page = $result['content'];
                        }

                        preg_match_all('/<td class="descriptTenderTd">(.+?)href="(.*?)"/s',$page,$smet);
                        $smeta[]= $smet[2];
                    }
                }
                $smeta[] = $smet[2];
                sleep(rand(3,5));
            }

        }}
    //$smeta[] = $smet[2];


    ?><pre><?print_r($smeta); ?></pre><?
    $result = array();
    foreach($smeta as $v)
    {$result = array_merge($result,$v);}

    $result = array_unique($result);


    ?><pre><?print_r($result); ?></pre><?



    AutoinputAfterAutoSearch($result);
    echo "Выполнение функции заняло " .$time - time(). " секунд";//выдает милисекунды

}
function Capital (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B4%D0%BE%D1%80%D0%BE%D0%B3&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&publishDateFrom=16.11.2016&publishDateTo=&regions=5277373&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


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
function GlavKadastr (){
	 $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BA%D0%B0%D0%B4%D0%B0%D1%81%D1%82%D1%80&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&publishDateFrom=16.11.2016&publishDateTo=&regions=5277321&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";


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
    $url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%92%D0%9E%D0%9B%D0%A1&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_10&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277335&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BC%D0%BE%D1%81%D1%8D%D0%BD%D0%B5%D1%80%D0%B3%D0%BE&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_10&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=16.11.2016&publishDateTo=&regions=5277335&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS


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