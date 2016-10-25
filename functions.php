<?
function AutoDetectLaw ($url,$page)
{
	if(strpos($url,'223')==true){
	//fz223ch1($page);
	$data ='http://zakupki.gov.ru/223/purchase/public/purchase/info/';
	$data2='&epz=true&style44=false';
	$data1='lot-list.html?noticeId=';
	preg_match_all("/\d+/",$url,$arr1);
	$url = $data . $data1 . $arr1[0][1] . $data2;
	$result1 = get_web_page($url);
	$page1 = $result1['content'];
	fz223($page,$page1);
	
}

else fz44($page);
}
function AutoWriteToFile ($arr_final)
{
	/*$arr_final[0][0]=$parse;//razobratsa s HYPERLINK
	$arr_final[0][1]="1"; 
	$arr_final[0][2]=$arr[0][0];	
	$arr_final[0][3]=$arr[0][5];
	$arr_final[0][4]=$arr[0][1];
	$arr_final[0][5]=$arr[0][3];
	$arr_final[0][6]=$arr[0][2];
	$arr_final[0][7]=$arr[0][4];
	*/
	
			$fp = fopen('tender.csv','a');
			
			fputs( $fp, b"\xEF\xBB\xBF" ); //как стало (были битые ссылки - это попытка исправить)
			
			
			//fputs( $fp, "\xEF\xBB\xBF" ); как было 
			foreach ($arr_final as $fields) 
{
				fputcsv($fp, $fields,";");
}

				fclose($fp);
				unset ($arr_final,$arr,$_POST);
				
	
}


function WriteToFile($arr)
{
	
	$arr_final[0][0]=$_POST['url'];//razobratsa s HYPERLINK
	$arr_final[0][1]=$_POST['client']; 
	$arr_final[0][2]=$arr[0][0];	
	$arr_final[0][3]=$arr[0][5];
	$arr_final[0][4]=$arr[0][1];
	$arr_final[0][5]=$arr[0][3];
	$arr_final[0][6]=$arr[0][2];
	$arr_final[0][7]=$arr[0][4];
	$str= $arr_final[0][6];
	
	$search = array ("'<script[^>]*?>.*?</script>'si",  // Вырезает javaScript 
                 "'<[\/\!]*?[^<>]*?>'si",           // Вырезает HTML-теги 
                 "'([\r\n])[\s]+'",                 // Вырезает пробельные символы 
                 "'&(quot|#34);'i",                 // Заменяет HTML-сущности 
                 "'&(amp|#38);'i", 
                 "'&(lt|#60);'i", 
                 "'&(gt|#62);'i", 
                 "'&(nbsp|#160);'i", 
                 "'&(iexcl|#161);'i", 
                 "'&(cent|#162);'i", 
                 "'&(pound|#163);'i", 
                 "'&(copy|#169);'i", 
                 "'&#(\d+);'e");                    // интерпретировать как php-код 
 
$replace = "";
	preg_replace($search,$replace,$arr_final);
	
	
		

			$fp = fopen('tender.csv', 'a');

   

			fputs( $fp, b"\xEF\xBB\xBF" ); //как стало (были битые ссылки - это попытка исправить)
			//fputs( $fp, "\xEF\xBB\xBF" ); как было 
			foreach ($arr_final as $fields) 
{
				fputcsv($fp, $fields,";");
}

				fclose($fp);
				unset ($arr_final,$arr,$_POST);
				getCSV();
	
}
function getCSV() 
{
		$data = File("tender.csv");
			echo "<b><i><h2><center>Тендеры</b></i></h2></center>";
			echo "<center><table border=0><tr>";
		$dat_arr = explode(";", $data[0]);

				for ($p=0;$p<count($dat_arr);$p++) 
				{
			echo "<td bgcolor=lightblue><center><b><i>$dat_arr[$p]";
				}
			echo "</tr>";
				for ($i=1;$i<count($data);$i++) 
				{
		$data_array = explode(";", $data[$i]);
			echo "<tr>";
				for ($f=0;$f<count($data_array);$f++) 
				{ 
			echo "<td bgcolor=lightblue><center><b><i>$data_array[$f]";
				}
			echo "</tr>";
				}
			echo "</table></center>";
			/*==>Подщет кол-ва строк импортируемых каждый раз в каждой строке, пока что неактуально <==*/
		/*$f = fopen("tender.csv", "rt") or die("Ошибка!");
				for ($i=0; $data=fgetcsv($f,1000,";"); $i++) 
				{
		$num = count($data);
			echo "<h3>Строка номер $i (полей: $num):</h3>";
				for ($c=0; $c<$num; $c++)
			print "[$c]: $data[$c]<br>"; 
				}
		fclose($f);*/
}
function fz44($page)
{
			global $arr;
				preg_match	('/Размещено:(.\d{2}\.\d{2}\.\d{4})/',$page,$arr1); ?><br/><?
				preg_match('/Способ определения поставщика (.*\n[^)])(\s+)(<td>)(.*)(<)/',$page,$arr2);
				preg_match('/"notice_orderName">(.*)</',$page,$arr3);
				preg_match_all('/Место нахождения(.*\n.*?<td>.+?,.+?,)(.+?),.*/',$page,$arr4);?><br/><?
				//preg_match_all('/цена контракта(.*\n)(.*<td>)(.*)(<)/',$page,$arr5);?><br/><?
				preg_match('/цена контракта.*?<td>\s*(.*?)\s*</s',$page,$arr5);?><br/><?
				preg_match("/Источник финансирования.*?<td>\s*(.*?)\s*</s",$page,$arr6);?><br/><? 
				preg_match ("/Дата и время окончания подачи.*?(\d{2}.\d{2}.\d{4}\s\d{2}:\d{2})/s",$page,$arr8);	
				
	
		
					$arr= array(
								array(
									0 => $arr1[1],
									1 => $arr2[4],
									2 => $arr3[1],
									3 => $arr4[2][0],
									4 => $arr5[1],
									5 => $arr6[1],
									6 => $arr8[1]
														));?><br/><?
		
}

function fz223($page,$page1)
{
		global $arr;
			preg_match('/Размещено(.\d{2}\.\d{2}\.\d{4})/',$page,$arr1);?><br/><?
			preg_match('/Способ размещения закупки.*(\n.*)(\n\s+)(.*\S+)/',$page,$arr2);
			preg_match('/Наименование закупки<\/td>\s*<td>\s+(.*)\S+/',$page,$arr3);//должно работать, проверить
			preg_match('/Адрес места нахождения(.*\n.*?<td>.+?,)(.+?),.*/',$page,$arr4);
			preg_match ("/Дата и время окончания подачи.*?(\d{2}.\d{2}.\d{4}.*?\s\d{2}:\d{2})/s",$page,$arr8);
			preg_match ('/(\s+)([\d\s\d]+\S\d+.*?)&nbsp;Российский рубль/',$page1,$arr5);//
			preg_match ('/записей:.*?<strong>(.*?)\s*</',$page1,$lots);

				$arr= array(
							array(
									0 => $arr1[1],
									1 => $arr2[3],
									2 => $arr3[1],
									3 => $arr4[2],
									6 => $arr8[1]
														));

			if ($lots[1]>1)
{
									$lots1[0]= "лотов";
									$lots[1].=$lots1[0];
									$arr5[2]= $lots[1];
									$arr[0][4] = $arr5[2];	

}
			else {
									$arr[0][4]= $arr5[2];
			$arr[0][5]=$arr6[0]=" ";}
									
}
function AutoSearchASC3 (){
	$start = microtime(true);
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	/*$old = "31.08.2016";
	$olddate = date("d.m.y.D");
		if (strpos($olddate,"Sun") == TRUE) {
	
	$newdate =date('d.m.Y.D', strtotime('-2 day'));
	echo "обнаружено воскресенье, выставляю дату".$newdate."\n";
	ob_flush();
	flush();
	sleep(1);
	  str_replace($old,$newdate,$url);
}
		else 
{
	$newdate = date("d.m.Y");
	echo "Воскресенье не обнаружено, выставляю текущую дату " . $newdate;
	ob_flush();
	flush();
	sleep(1);
	
	
	str_replace($old,$newdate,$url);
	
	
}*/
	$time =	time();
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	
	$NumberOfPages = 1;
			foreach	($sort as $s)
	{
	$url1=str_replace("sortBy=UPDATE_DATE",$s,$url);
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
	
	//$smeta[] = $smet[2];
	
?><pre><?print_r($smeta); ?></pre><?
$result = array(); 
foreach($smeta as $v) 
{$result = array_merge($result,$v);} 
	//$smeta = array_merge($smeta[0],$smeta[1],$smeta[2],$smeta[3]);
	//$smeta = array_unique($smeta);
	$result = array_unique($result);
								
								
	?><pre><?print_r($result); ?></pre><?
	
	AutoinputAfterAutoSearch($result);
	$time = microtime(true) - $start;
printf('Скрипт выполнялся %.4F сек.', $time/60);
 	
}
function AutoSearchATLAS (){
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B8%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277323&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	
	/*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
	$search[]= "%D0%B8%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80"; // инженер
	$search[]= "%D0%BA%D0%B0%D0%B4%D0%B0%D1%81%D1%82%D1%80"; // кадастр
	$search[]= "%D0%BC%D0%B5%D0%B6%D0%B5%D0%B2"; // межев
	$search[]= "%D0%B7%D0%B5%D0%BC"; // зем
	$search[]= "%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87+%D0%BF%D0%BB%D0%B0%D0%BD"; // технич план
	$time =	time();
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
$old = "05.09.2016";
 $olddate = date("d.m.y.D");
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
foreach ($search as $se){
	
	$uri = str_replace("%D0%B8%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80",$se,$url);
	echo $uri;
	ob_flush();
	flush();
	
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
	
}
	//$smeta[] = $smet[2];
	
	
?><pre><?print_r($smeta); ?></pre><?
	$smeta = array_merge($smeta[0],$smeta[1],$smeta[2],$smeta[3],$smeta[4],$smeta[5],$smeta[6],$smeta[7],$smeta[8],$smeta[9],$smeta[10],$smeta[11],$smeta[12],$smeta[13],$smeta[14],$smeta[15],$smeta[16],$smeta[17],$smeta[18],$smeta[19]);

	
	
	$smeta = array_unique($smeta);
					?><pre><?print_r($smeta); ?></pre><?				
								

	
	AutoinputAfterAutoSearch($smeta);
	echo "Выполнение функции заняло " .$time - time(). " секунд";//выдает милисекунды
 	
}
function AutoSearchKOM (){
	$url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277320&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	
	
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
function AutoSearchKostroma(){
	$start = microtime(true);
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277324&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	$old = "24.10.2016";
	/*$olddate = date("d.m.y.D");
		if (strpos($olddate,"Sun") == TRUE) {
	
	$newdate =date('d.m.Y.D', strtotime('-2 day'));
	echo "Oбнаружено воскресенье, выставляю дату".$newdate."\n";
	ob_flush();
	flush();
	sleep(1);
	  $url =str_replace($old,$newdate,$url);
}
		else 
{
	$newdate = date("d.m.Y");
	echo "Воскресенье не обнаружено, выставляю текущую дату " . $newdate;
	ob_flush();
	flush();
	sleep(1);
	
	
	$url =str_replace($old,$newdate,$url);
	
	
}*/
	
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	
	$NumberOfPages = 3;
			foreach	($sort as $s)
	{
	$url1=str_replace("sortBy=UPDATE_DATE",$s,$url);
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
		$smeta[] = $smet[2];
	if($NumberOfPages>1)
	{
		for($i=2;$i<=$NumberOfPages;$i++)
		{
					sleep(rand(3,5));
					$replace = "pageNumber=".$i;
					$pattern = "pageNumber=1";
					$url2=str_replace($pattern,$replace,$url1);	
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
		sleep(rand(3,5));
		}
	}
	
	
	sleep(rand(3,5));
	}
	
	//$smeta[] = $smet[2];
	
?><pre><?print_r($smeta); ?></pre><?
$result = array(); 
foreach($smeta as $v) 
{$result = array_merge($result,$v);} 
	//$smeta = array_merge($smeta[0],$smeta[1],$smeta[2],$smeta[3]);
	//$smeta = array_unique($smeta);
	$result = array_unique($result);
								
								
	?><pre><?print_r($result); ?></pre><?
	
	AutoinputAfterAutoSearch($result);
	$time = microtime(true) - $start;
printf('Скрипт выполнялся %.4F сек.', $time);
	}
	function AutoSearchKrigin (){
	$start = microtime(true);
	$url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%BE%D0%BA%D0%BE%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=90000&priceTo=5000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277320&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";

	
	
	/*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
	$search[]= "%D0%BE%D0%BA%D0%BE%D0%BD"; // окон
	$search[]= "%D0%B4%D0%B2%D0%B5%D1%80"; // двер
	$search[]= "%D0%BF%D0%B2%D1%85"; // пвх
	$search[]= "%D0%B0%D0%BB%D1%8E%D0%BC%D0%B8%D0%BD"; // алюмин
	$search[]= "%D0%B2%D0%B8%D1%82%D1%80%D0%B0%D0%B6"; // витраж
	$search[]= "%D0%B2%D1%85%D0%BE%D0%B4%D0%BD+%D0%B3%D1%80%D1%83%D0%BF"; // входн груп
	$search[]= "%D1%84%D0%B0%D1%81%D0%B0%D0%B4"; // фасад
	$search[]= "%D0%BE%D1%81%D1%82%D0%B5%D0%BA%D0%BB"; // остекл
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	$old = "05.09.2016";
 $olddate = date("d.m.y.D");
 $region[] = "5277320"; //Владимирская
 $region[]= "5277330"; //смоленская
 $region[]= "5277334"; //ярик
 $region[]= "5277333"; //тула
 $region[]= "5277327"; //мос обл
 $region[]= "5277335"; //мск
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
foreach ($region as $reg)
{
		$url2 = str_replace("5277320",$reg,$url);
	foreach ($search as $se)
	{
	
		$uri = str_replace("%D0%BE%D0%BA%D0%BE%D0%BD",$se,$url2);
	
		echo $uri . "</br>";
		ob_flush();
		flush();
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
	
}
}
	//$smeta[] = $smet[2];
	
	
?><pre><?print_r($smeta); ?></pre><?
	$result = array(); 
foreach($smeta as $v) 
{$result = array_merge($result,$v);} 
	
	$result = array_unique($result);
								
								
					?><pre><?print_r($result); ?></pre><?				
								

	
	AutoinputAfterAutoSearch($result);
	$time = microtime(true) - $start;
printf('Скрипт выполнялся %.4F сек.', $time/60);
 	
}
	function AutosearchJaroslavl(){
		$start = microtime(true);
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277334&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	$old = "24.10.2016";
	/*$olddate = date("d.m.y.D");
		if (strpos($olddate,"Sun") == TRUE) {
	
	$newdate =date('d.m.Y.D', strtotime('-2 day'));
	echo "Oбнаружено воскресенье, выставляю дату".$newdate."\n";
	ob_flush();
	flush();
	sleep(1);
	  $url =str_replace($old,$newdate,$url);
}
		else 
{
	$newdate = date("d.m.Y");
	echo "Воскресенье не обнаружено, выставляю текущую дату " . $newdate;
	ob_flush();
	flush();
	sleep(1);
	
	
	$url =str_replace($old,$newdate,$url);
	
	
}*/
	
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	
	$NumberOfPages = 4;
			foreach	($sort as $s)
	{
	$url1=str_replace("sortBy=UPDATE_DATE",$s,$url);
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
		$smeta[] = $smet[2];
	if($NumberOfPages>1)
	{
		for($i=2;$i<=$NumberOfPages;$i++)
		{
					sleep(rand(3,5));
					$replace = "pageNumber=".$i;
					$pattern = "pageNumber=1";
					$url2=str_replace($pattern,$replace,$url1);	
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
		sleep(rand(3,5));
		}
	}
	
	
	sleep(rand(3,5));
	}
	
	//$smeta[] = $smet[2];
	
?><pre><?print_r($smeta); ?></pre><?
$result = array(); 
foreach($smeta as $v) 
{$result = array_merge($result,$v);} 
	//$smeta = array_merge($smeta[0],$smeta[1],$smeta[2],$smeta[3]);
	//$smeta = array_unique($smeta);
	$result = array_unique($result);
								
								
	?><pre><?print_r($result); ?></pre><?
	
	AutoinputAfterAutoSearch($result);
	$time = microtime(true) - $start;
printf('Скрипт выполнялся %.4F сек.', $time);
	}
	function AutosearchIvanovo(){
		$start = microtime(true);
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277322&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	$old = "24.10.2016";
	$olddate = date("d.m.y.D");
		/*if (strpos($olddate,"Sun") == TRUE) {
	
	$newdate =date('d.m.Y.D', strtotime('-2 day'));
	echo "Oбнаружено воскресенье, выставляю дату".$newdate."\n";
	ob_flush();
	flush();
	sleep(1);
	  $url =str_replace($old,$newdate,$url);
}
		else 
{
	$newdate = date("d.m.Y");
	echo "Воскресенье не обнаружено, выставляю текущую дату " . $newdate;
	ob_flush();
	flush();
	sleep(1);
	
	
	$url =str_replace($old,$newdate,$url);
	
	
}*/
	
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	
	$NumberOfPages = 3;
			foreach	($sort as $s)
	{
	$url1=str_replace("sortBy=UPDATE_DATE",$s,$url);
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
		$smeta[] = $smet[2];
	if($NumberOfPages>1)
	{
		for($i=2;$i<=$NumberOfPages;$i++)
		{
					sleep(rand(3,5));
					$replace = "pageNumber=".$i;
					$pattern = "pageNumber=1";
					$url2=str_replace($pattern,$replace,$url1);	
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
		sleep(rand(3,5));
		}
	}
	
	
	sleep(rand(3,5));
	}
	
	//$smeta[] = $smet[2];
	
?><pre><?print_r($smeta); ?></pre><?
$result = array(); 
foreach($smeta as $v) 
{$result = array_merge($result,$v);} 
	//$smeta = array_merge($smeta[0],$smeta[1],$smeta[2],$smeta[3]);
	//$smeta = array_unique($smeta);
	$result = array_unique($result);
								
								
	?><pre><?print_r($result); ?></pre><?
	
	AutoinputAfterAutoSearch($result);
	$time = microtime(true) - $start;
printf('Скрипт выполнялся %.4F сек.', $time);
	}
	function AutosearchVologda(){
		$start = microtime(true);
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277340&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	$old = "24.10.2016";
	/*$olddate = date("d.m.y.D");
		if (strpos($olddate,"Sun") == TRUE) {
	
	$newdate =date('d.m.Y.D', strtotime('-2 day'));
	echo "Oбнаружено воскресенье, выставляю дату".$newdate."\n";
	ob_flush();
	flush();
	sleep(1);
	  $url =str_replace($old,$newdate,$url);
}
		else 
{
	$newdate = date("d.m.Y");
	echo "Воскресенье не обнаружено, выставляю текущую дату " . $newdate;
	ob_flush();
	flush();
	sleep(1);
	
	
	$url =str_replace($old,$newdate,$url);
	
	
}
	*/
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	
	$NumberOfPages = 4;
			foreach	($sort as $s)
	{
	$url1=str_replace("sortBy=UPDATE_DATE",$s,$url);
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
		$smeta[] = $smet[2];
	if($NumberOfPages>1)
	{
		for($i=2;$i<=$NumberOfPages;$i++)
		{
					sleep(rand(3,5));
					$replace = "pageNumber=".$i;
					$pattern = "pageNumber=1";
					$url2=str_replace($pattern,$replace,$url1);	
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
		sleep(rand(3,5));
		}
	}
	
	
	sleep(rand(3,5));
	}
	
	//$smeta[] = $smet[2];
	
?><pre><?print_r($smeta); ?></pre><?
$result = array(); 
foreach($smeta as $v) 
{$result = array_merge($result,$v);} 
	//$smeta = array_merge($smeta[0],$smeta[1],$smeta[2],$smeta[3]);
	//$smeta = array_unique($smeta);
	$result = array_unique($result);
								
								
	?><pre><?print_r($result); ?></pre><?
	
	AutoinputAfterAutoSearch($result);
	$time = microtime(true) - $start;
printf('Скрипт выполнялся %.4F сек.', $time);
	}
function AutoinputAfterAutoSearch ($smeta)
{
	
								$smeta =array_unique($smeta);
								//$smeta = ksort($smeta);
								echo "обнаружено записей" .sizeof($smeta);
								?><pre><?print_r($smeta); ?></pre><?
								$i=1;
				foreach ($smeta as $key=>$parse ) // доделать: исключение при З.У.Е.Д , оптимизировать
			{
					if (strpos($parse,"http://zakupki.gov.ru") === FALSE )
					{
								$add = "http://zakupki.gov.ru";
								$url =$add.$parse;
								$res = get_web_page ($url);
								$page = $res['content'];
								//AutoDetectLawForSearch($url,$page);
								
										preg_match	('/Размещено:(.\d{2}\.\d{2}\.\d{4})/',$page,$arr1); ?><br/><?
										preg_match('/Способ определения поставщика (.*\n[^)])(\s+)(<td>)(.*)(<)/',$page,$arr2);
										preg_match('/"notice_orderName">(.*)</',$page,$arr3);
										preg_match_all('/Место нахождения(.*\n.*?<td>.+?,.+?,)(.+?),.*/',$page,$arr4);?><br/><?
										preg_match('/цена контракта.*?<td>\s*(.*?)\s*</s',$page,$arr5);?><br/><?
										//preg_match_all('/цена контракта(.*\n)(.*<td>)(.*)(<)/',$page,$arr5);?><br/><?
										preg_match("/Источник финансирования.*?<td>\s*(.*?)\s*</s",$page,$arr6);?><br/><? 
										//preg_match ("/Дата и время окончания подачи.*?(\d{2}.\d{2}.\d{4}\s\d{2}:\d{2})/s",$page,$arr8);	

		
						$arr= array(
									array(
																			
										0 => $url,
										1 => "1",
										2 => $arr1[1],
										3 => $arr6[1],
										4 => $arr2[4],
										5 => $arr4[2][0],
										6 => $arr3[1],
										7 => $arr5[1]
										));
													$arr_final[]=$arr[0];	
														//AutoWriteToFile($arr,$url);
								
										
					}
					else 
					{
								$res = get_web_page ($parse);
								$page = $res['content'];
								$data ='http://zakupki.gov.ru/223/purchase/public/purchase/info/';
								$data2='&epz=true&style44=false';
								$data1='lot-list.html?noticeId=';
								preg_match_all("/\d+/",$parse,$arr1);
								$url = $data . $data1 . $arr1[0][1] . $data2;
								$result1 = get_web_page($url);
								$page1 = $result1['content'];
								
									preg_match('/Размещено(.\d{2}\.\d{2}\.\d{4})/',$page,$arr1);?><br/><?
									preg_match('/Способ размещения закупки.*(\n.*)(\n\s+)(.*\S+)/',$page,$arr2);
									preg_match('/Наименование закупки<\/td>\s*<td>\s+(.*)\S+/',$page,$arr3);//должно работать, проверить
									preg_match('/Адрес места нахождения(.*\n.*?<td>.+?,)(.+?),.*/',$page,$arr4);
									//preg_match ("/Дата и время окончания подачи.*?(\d{2}.\d{2}.\d{4}.*?\s\d{2}:\d{2})/s",$page,$arr8);
									preg_match ('/(\s+)([\d\s\d]+\S\d+.*?)&nbsp;Российский рубль/',$page1,$arr5);//
									preg_match ('/записей:.*?<strong>(.*?)\s*</',$page1,$lots);

				$arr= array(
							array(
									
									0 => $parse,				
									1 => "1",				
									2 => $arr1[1],				
									3 => "",				
									4 => $arr2[3],				
									5 => $arr4[2],				
									6 => $arr3[1]				
													));

			if ($lots[1]>1)
{
									$lots1[0]= "лотов";
									$lots[1].=$lots1[0];
									$arr5[2]= $lots[1];
									$arr[0][7] = $arr5[2];	

}
			else {
									$arr[0][7]= $arr5[2];
									//$arr[0][5]=$arr6[0]="";
									}
								
								$arr_final[] = $arr[0];
														
				//AutoWriteToFile($arr,$url);
								
								
								
					} 
				echo $parse . " добавлена, " . " обработано записей " .$i ." из " . sizeof($smeta) ." </br> " ;	
				ob_flush();
				flush();
				$i++;
				sleep(rand(2,10));
			}
			
			//return $arr_final;
			AutoWriteToFile($arr_final);
			//ExcelInput($arr_final);
			getCSV();
}
function SingleLineSearch ($url,$name_sheet,$active_sheet,$NumberOfPages=1,$Fname)//для поиска где не нужно менять ключевые слова(смета,кострома,ярик,иваново,вологда)
{ 
	$start = microtime(true);
	/*$old = "31.08.2016";
	$olddate = date("d.m.y.D");
		if (strpos($olddate,"Sun") == TRUE) {
	
	$newdate =date('d.m.Y.D', strtotime('-2 day'));
	echo "обнаружено воскресенье, выставляю дату".$newdate."\n";
	ob_flush();
	flush();
	sleep(1);
	  str_replace($old,$newdate,$url);
}
		else 
{
	$newdate = date("d.m.Y");
	echo "Воскресенье не обнаружено, выставляю текущую дату " . $newdate;
	ob_flush();
	flush();
	sleep(1);
	
	
	str_replace($old,$newdate,$url);
	
	
}*/
	
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	
	
	
		foreach	($sort as $s)
{
		$url1=str_replace("sortBy=UPDATE_DATE",$s,$url);
	
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
		$smeta[] = $smet[2];
				if($NumberOfPages>1)
					{
						for($i=2;$i<=$NumberOfPages;$i++)
						{
							sleep(rand(4,7));
							$replace = "pageNumber=".$i;
							$pattern = "pageNumber=1";
							$url2=str_replace($pattern,$replace,$url1);	
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
							sleep(rand(6,9));
						}
					}
		
		sleep(rand(15,30));
}
	
	
	
?><pre><?print_r($smeta); ?></pre><?
		$result = array(); 
		foreach($smeta as $v) 
{$result = array_merge($result,$v);} 
	
	$result = array_unique($result);
								
								
?><pre><?print_r($result); ?></pre><?
	
	
 	GatherLinks($result,$name_sheet,$active_sheet,$Fname);
	
	$time = microtime(true) - $start;
	printf('Скрипт выполнялся %.2F мин.', $time/60);
}
function ASC3(){
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	$active_sheet = 0;
	$name_sheet = "Smeta";
	$Fname="ASC3";
	$NumberOfPages = 1;
	SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Kostroma(){
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277324&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	$active_sheet = 0;
	$name_sheet = "Kostroma";
	$NumberOfPages = 4;
	$Fname="Kostroma";
	SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Jaroslavl(){
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277334&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	$active_sheet = 0;
	$name_sheet = "Jaroslavl";
	$NumberOfPages= 3;
	$Fname= "Jaroslavl";
	SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Ivanovo(){
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277322&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	$active_sheet = 0;
	$name_sheet = "Ivanovo";
	$NumberOfPages= 2;
	$Fname= "Ivanovo";
	SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function Vologda(){
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=&morphology=on&pageNumber=1&sortDirection=false&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277340&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	$active_sheet = 0;
	$name_sheet = "Vologda";
	$NumberOfPages= 4;
	$Fname= "Vologda";
	SingleLineSearch($url,$name_sheet,$active_sheet,$NumberOfPages,$Fname);
}
function KomSistemEx(){
	$url="http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.10.2016&publishDateTo=&regions=5277320&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
	
	$str_replace_region = "5277320";
	$str_replace_search = "%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80";
	/*---ПРОВЕРИТЬ ЗАМЕНУ ПОИСКОВОЙ СТРОКИ --- */
	$search[]= "%D0%B0%D1%80%D0%BC%D0%B0%D1%82%D1%83%D1%80"; // арматур
	$search[]= "%D1%82%D1%80%D1%83%D0%B1"; // труб
	$search[]= "%D0%BC%D1%83%D1%84%D1%82"; // муфт
	$search[]= "%D0%BA%D1%80%D0%B0%D0%BD+%D1%88%D0%B0%D1%80"; // кран шар
	$search[]= "%D1%81%D0%B0%D0%BD%D1%82%D0%B5%D1%85"; // сантех
	$search[]= "%D0%B4%D0%B5%D1%82%D0%B0%D0%BB+%D1%81%D0%BE%D0%B5%D0%B4"; // детали соед
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	$region[] = "5277320"; //Владимирская
    $region[]= "5277370"; //Нижегородская
	$active_sheet = 0;
	$name_sheet = "KomSistemEx";
	//$NumberOfPages= 2;
	$Fname= "KomSistemEx";
	MultiLine($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region,$NumberOfPages=2);
	
}
function ExcelInput($arr_final,$active_sheet=0,$name_sheet="TestSmeta",$Fname="tenders",$i=1){
	?><pre><?print_r($arr_final);?></pre><?
require_once ('PHPExcel.php');
require_once('PHPExcel/Writer/Excel5.php');
	$xls = new PHPExcel();//РАБОТАЕТ, добавить к основе 
		$xls->setActiveSheetIndex($active_sheet); // можно передавать индекс в функцию вместо велосипедов
		$sheet = $xls->getActiveSheet();
		$sheet->setTitle($name_sheet);
		foreach($arr_final as $value){
		$sheet->setCellValue('A'.$i, $value[0]);
		$sheet->setCellValue('B'.$i, $value[1]);
		$sheet->setCellValue('C'.$i, $value[2]);
		$sheet->setCellValue('D'.$i, $value[3]);
		$sheet->setCellValue('E'.$i, $value[4]);
		$sheet->setCellValue('F'.$i, $value[5]);
		$sheet->setCellValue('G'.$i, $value[6]);
		$sheet->setCellValue('H'.$i, $value[7]);
		$sheet->getCell('A'.$i)->getHyperlink()->setUrl($value[0]);
		$i++;
		}
		$objWriter = new PHPExcel_Writer_Excel5($xls);
			$objWriter->save($Fname.'.xls');
}
function GatherLinks ($smeta,$name_sheet,$active_sheet,$Fname)
{
	
								$smeta =array_unique($smeta);
								echo "обнаружено записей" .sizeof($smeta);
								?><pre><?print_r($smeta); ?></pre><?
								$i = 1;
				foreach ($smeta as $parse ) // З.У.Е.Д будет через БД или др способ
			{
					if (strpos($parse,"http://zakupki.gov.ru") === FALSE )
					{
								$add = "http://zakupki.gov.ru";
								$url =$add.$parse;
								$res = get_web_page ($url);
								$page = $res['content'];
								
										preg_match	('/Размещено:(.\d{2}\.\d{2}\.\d{4})/',$page,$arr1); ?><br/><?
										preg_match('/Способ определения поставщика (.*\n[^)])(\s+)(<td>)(.*)(<)/',$page,$arr2);
										preg_match('/"notice_orderName">(.*)</',$page,$arr3);
										preg_match_all('/Место нахождения(.*\n.*?<td>.+?,.+?,)(.+?),.*/',$page,$arr4);?><br/><?
										preg_match('/цена контракта.*?<td>\s*(.*?)\s*</s',$page,$arr5);?><br/><?
										preg_match("/Источник финансирования.*?<td>\s*(.*?)\s*</s",$page,$arr6);?><br/><? 
											

		
						$arr= array(
									array(
																			
										0 => $url,
										1 => "1",
										2 => $arr1[1],
										3 => $arr6[1],
										4 => $arr2[4],
										5 => $arr4[2][0],
										6 => $arr3[1],
										7 => $arr5[1]
										));
													$arr_final[]=$arr[0];	
														
								
										
					}
					else 
					{
								$res = get_web_page ($parse);
								$page = $res['content'];
								$data ='http://zakupki.gov.ru/223/purchase/public/purchase/info/';
								$data2='&epz=true&style44=false';
								$data1='lot-list.html?noticeId=';
								preg_match_all("/\d+/",$parse,$arr1);
								$url = $data . $data1 . $arr1[0][1] . $data2;
								$result1 = get_web_page($url);
								$page1 = $result1['content'];
								
									preg_match('/Размещено(.\d{2}\.\d{2}\.\d{4})/',$page,$arr1);?><br/><?
									preg_match('/Способ размещения закупки.*(\n.*)(\n\s+)(.*\S+)/',$page,$arr2);
									preg_match('/Наименование закупки<\/td>\s*<td>\s+(.*)\S+/',$page,$arr3);//должно работать, проверить
									preg_match('/Адрес места нахождения(.*\n.*?<td>.+?,)(.+?),.*/',$page,$arr4);
									preg_match ('/(\s+)([\d\s\d]+\S\d+.*?)&nbsp;Российский рубль/',$page1,$arr5);//
									preg_match ('/записей:.*?<strong>(.*?)\s*</',$page1,$lots);

				$arr= array(
							array(
									
									0 => $parse,				
									1 => "1",				
									2 => $arr1[1],				
									3 => "",				
									4 => $arr2[3],				
									5 => $arr4[2],				
									6 => $arr3[1]				
													));

			if ($lots[1]>1)
{
									$lots1[0]= "лотов";
									$lots[1].=$lots1[0];
									$arr5[2]= $lots[1];
									$arr[0][7] = $arr5[2];	

}
			else {
									$arr[0][7]= $arr5[2];
									//$arr[0][5]=$arr6[0]="";
									}
								
								$arr_final[] = $arr[0];
														
				
								
								
								
					} 
				echo $parse . " добавлена, " . " обработано записей " .$i  ." из " . sizeof($smeta) ." </br> " ;	
				ob_flush();
				flush();
				$i++;
				sleep(rand(5,20));
			}
			
			ExcelInput($arr_final,$active_sheet,$name_sheet,$Fname);
			
		
			
}	
function MultiLine ($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region,$NumberOfPages=1){
	$start = microtime(true);
	
	
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	
	
foreach ($region as $reg)
{
		$url2 = str_replace($str_replace_region,$reg,$url);
	foreach ($search as $se)
	{
	
		$uri = str_replace($str_replace_search,$se,$url2);
	
		echo $uri . "</br>";
		ob_flush();
		flush();
		foreach	($sort as $s)
		{
		$url1=str_replace("sortBy=UPDATE_DATE",$s,$uri);
		echo $url1 . "</br>";
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
		$smeta[] = $smet[2];
			if($NumberOfPages>1)
		{
			for($i=0;$i<$NumberOfPages;$i++)
			{
					sleep(rand(5,7));
					$replace = "pageNumber=".$i;
					$url3=str_replace($match1,$match,$url1);	
					echo $url3."</br>";
		
		$result = get_web_page($url3);
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
	
	sleep(rand(5,7));
}
	
}
}
	
	
	
?><pre><?print_r($smeta); ?></pre><?
	$result = array(); 
foreach($smeta as $v) 
{$result = array_merge($result,$v);} 
	
	$result = array_unique($result);
								
								
					?><pre><?print_r($result); ?></pre><?				
								

	
	GatherLinks($result,$name_sheet,$active_sheet,$Fname);
	$time = microtime(true) - $start;
printf('Скрипт выполнялся %.4F сек.', $time/60);
 	
}
