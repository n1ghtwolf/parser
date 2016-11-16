<?

function AutoWriteToFile ($arr_final)
{

	
			$fp = fopen('tender.csv','a');
			      fputs( $fp, b"\xEF\xBB\xBF" ); //как стало (были битые ссылки - это попытка исправить)

			           foreach ($arr_final as $fields)
                            {
				                fputcsv($fp, $fields,";");
                            }

				 fclose($fp);
				 unset ($arr_final,$arr,$_POST);
				
	
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
							sleep(rand(8,12));
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
		
		sleep(rand(18,30));
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

function ExcelInput($arr_final,$active_sheet=0,$name_sheet="TestSmeta",$Fname="tenders",$i=1){
	?><pre><?print_r($arr_final);?></pre><?
	require_once ('PHPExcel.php');
	require_once('PHPExcel/Writer/Excel5.php');
	    $xls = new PHPExcel();
		$xls->setActiveSheetIndex($active_sheet);
		$sheet = $xls->getActiveSheet();
		$sheet->setTitle($name_sheet);
			foreach($arr_final as $value)
				{
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
function GatherLinks ($smeta,$name_sheet,$active_sheet,$Fname,$i = 1)
{
	
 $smeta =array_unique($smeta);
 echo "обнаружено записей" .sizeof($smeta);
 ?><pre><?print_r($smeta); ?></pre><?
 
	foreach ($smeta as $parse ) 
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
					else 
						{
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
			add($arr_final,$Fname);
		
			
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
function select()
{	
	
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
	$mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'Закупка у единственного поставщика';");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'Закупка у единственного поставщика (подрядчика, исполнителя)';");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'СБ-АСТ: Закупка у единственного источника';");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'СБ: Закупка у единственного источника';");
    $mysqli->query ("DELETE FROM `all` WHERE `type` LIKE 'Закупка у единственного источника';");
	LazyDel();
    $mysqli->query ("DELETE FROM `all` WHERE `link` = '';");
	$sql="SELECT * FROM `all`";
	$res = mysqli_query($mysqli,$sql);
		while($user = mysqli_fetch_assoc($res))
		{
			$tender[]=$user;
			echo "<pre>";
			print_r($user);
			echo "</pre>";
		}
	DbExport($tender);
}
function add($arr_final,$Fname)
{	
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
	for ($j=0;$j<count($arr_final);$j++)
  {
	   
   $mysqli->query("INSERT INTO `all` (`link`,`client`,`date_ann`,`finance_source`,`type`,`order`,`cost`,`city`)  VALUES ('{$arr_final[$j][0]}','{$Fname}','{$arr_final[$j][2]}','{$arr_final[$j][3]}','{$arr_final[$j][4]}','{$arr_final[$j][6]}','{$arr_final[$j][7]}','{$arr_final[$j][5]}');");
 }
 
  $mysqli->close();
  
}
function DbExport($user,$active_sheet=0,$name_sheet="TestSmeta",$Fname="tenders",$i=1){
	require_once ('PHPExcel.php');
	require_once('PHPExcel/Writer/Excel5.php');
	    $xls = new PHPExcel();
		$xls->setActiveSheetIndex($active_sheet);
		$sheet = $xls->getActiveSheet();
		$sheet->setTitle($name_sheet);
		
			foreach($user as $value)
				{
					$sheet->setCellValue('A'.$i, $value['link']);
					$sheet->setCellValue('B'.$i, $value['client']);
					$sheet->setCellValue('C'.$i, $value['date_ann']);
					$sheet->setCellValue('D'.$i, $value['finance_source']);
					$sheet->setCellValue('E'.$i, $value['type']);
					$sheet->setCellValue('F'.$i, $value['city']);
					$sheet->setCellValue('G'.$i, $value['order']);
					$sheet->setCellValue('H'.$i, $value['cost']);
					
					$sheet->getCell('A'.$i)->getHyperlink()->setUrl($value['link']);
					$i++;
				}
		$objWriter = new PHPExcel_Writer_Excel5($xls);
		$objWriter->save($Fname.'.xls');
}
function LazyDel()
{	
	
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%принтер%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%бензин%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%сканер%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%запасных частей%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%лекарств%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%медикамент%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%расходных материал%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%медицинского оборудования%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%лифт%' AND client !='ASC3';");
	
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%антивирус%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%ГСМ%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%горюче смазочных материал%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%горюче-смазочных материал%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%пробирок%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%лабораторных исследован%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по физической охране%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Приобретение жилого помещения%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Приобретение жилых помещений%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%канцелярских товаров%';");
	
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%бумаги%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%картридж%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%семинар%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%протез%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%диагностическ%';"	);
	
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Услуги по охране%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%спецодежд%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%диспанцеризац%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%перчаток%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%неисключительной%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%вакцин%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%медицинских изделий%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%приобретение благоустроенного жилого помещения%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%услуг по проведению бактериологических и вирусологических исследований%';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%Поставка%' AND client = 'Vologda';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%автомобил%' AND client = 'Vologda';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%древесин%' AND client = 'Vologda';");
	$mysqli->query ("DELETE FROM `all` WHERE `order` LIKE '%транспорт%' AND client = 'Vologda';");

	
   
	
}
