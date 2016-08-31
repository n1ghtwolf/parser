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
function AutoWriteToFile ($arr,$parse)
{
	$arr_final[0][0]=$parse;//razobratsa s HYPERLINK
	$arr_final[0][1]="1"; 
	$arr_final[0][2]=$arr[0][0];	
	$arr_final[0][3]=$arr[0][5];
	$arr_final[0][4]=$arr[0][1];
	$arr_final[0][5]=$arr[0][3];
	$arr_final[0][6]=$arr[0][2];
	$arr_final[0][7]=$arr[0][4];
	preg_replace("&#034","",$arr_final[0][6]);
	
	
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
 
$replace = array ("", 
                  "", 
                  "\\1", 
                  "\"", 
                  "&", 
                  "<", 
                  ">", 
                  " ", 
                  chr(161), 
                  chr(162), 
                  chr(163), 
                  chr(169), 
                  "chr(\\1)");
	preg_replace($search,$replace,$arr_final[0][6]);
	
	
		

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
function AutoSearch (){
	$url= "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&openMode=USE_DEFAULT_PARAMS&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&orderNumber=&placingWaysList=&placingWaysList223=&priceFrom=0&priceTo=&currencyId=&participantName=&publishDateFrom=25.08.2016&publishDateTo=&updateDateFrom=&updateDateTo=&customerTitle=&customerCode=&customerFz94id=&customerFz223id=&customerInn=&agencyTitle=&agencyCode=&agencyFz94id=&agencyFz223id=&agencyInn=&districts=&regions=&af=on&ca=on&pc=on&deliveryAddress=&sortBy=UPDATE_DATE";
	
	$sort[] = "sortBy=UPDATE_DATE";	
	$sort[] = "sortBy=PUBLISH_DATE";	
	$sort[] = "sortBy=UPDATE_PRICE";	
	$sort[] = "sortBy=RELEVANCE";
	
foreach	($sort as $s){
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
	preg_match('/currentPage">(.*)</',$page,$matches);
	//print_r($match);
	$match = "{$matches[1]}";
	while ($match==$replace){
		
		//sleep(10);
		$search = "pageNumber=".$match;
		$replace++;
		$replace = "pageNumber=".$replace;
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
	preg_match('/currentPage">(.*)</',$page,$matches);
	$match = $mathes[1];
	 
	preg_match_all('/<td class="descriptTenderTd">(.+?)href="(.*?)"/s',$page,$smet);
		$smeta[]= $smet[2];
		
	}
	
	$smeta[] = $smet[2];
	sleep(10);
}

	//$smeta = array_merge($smeta[0],$smeta[1],$smeta[2],$smeta[3]);
	
								
								
	?><pre><?print_r($smeta); ?></pre><?
	
	
	
	
}
function searchASC3 ()
{
	$url = "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=26.08.2016&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
		$result = get_web_page($url);
			if (($result['errno'] != 0 )||($result['http_code'] != 200))
    {
				echo $result['errmsg'];
	}
			else
	{
				$page = $result['content'];
	}
	
								preg_match_all('/<td class="descriptTenderTd">(.+?)href="(.*?)"/s',$page,$smet);
								$smeta = $smet[2];
								array_unique($smeta);
								echo "обнаружено записей" .sizeof($smeta);
								?><pre><?print_r($smeta); ?></pre><?
				foreach ($smeta as $parse) // ОНО РАБОТАЕТ УХТЫ кхм... доделать: исключение при З.У.Е.Д , оптимизировать, найти причину переодических сбоев и проскоков в функции , а также понять почему не передавались данные, хотя предположительно нужно просто ретурны поставить...
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
														));
									AutoWriteToFile($arr,$url);
								
										sleep(10);
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
								
								AutoWriteToFile($arr,$parse);
								
								sleep(10);
								
					} 
					
			}
			getCSV();
}

	
	
	

