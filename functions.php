<?

















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
							sleep(rand(4,8));
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
							sleep(rand(3,6));
						}
					}
		
		sleep(rand(4,9));
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
					preg_match('/"notice_orderName">\s*(.*?)</ms',$page,$arr3);
					//preg_match('/"notice_orderName">(.*)</',$page,$arr3);
					preg_match_all('/Место нахождения(.*\n.*?<td>.+?,.+?,)(.+?),.*/',$page,$arr4);?><br/><?
					preg_match ("/Дата и время окончания подачи.*?(\d{2}.\d{2}.\d{4}\s\d{2}:\d{2})/s",$page,$arr8);	
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
									7 => $arr5[1],
									8 => $arr8[1]
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
					//preg_match('/Адрес места нахождения.*?<td>.*?г (\w+),.+?</su',$page,$arr4);
					preg_match ("/Дата и время окончания подачи.*?(\d{2}.\d{2}.\d{4}.*?\s\d{2}:\d{2})/s",$page,$arr8);
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
									//5 => $arr4[1],				
									6 => $arr3[1],
									8 => $arr8[1]		
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
				sleep(rand(4,8));
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
					$sheet->setCellValue('I'.$i, $value['EndOfOpen']);
					
					$sheet->getCell('A'.$i)->getHyperlink()->setUrl($value['link']);
					$i++;
				}
		$objWriter = new PHPExcel_Writer_Excel5($xls);
		$objWriter->save($Fname.'.xls');
}


function SmartMultiLine ($url,$name_sheet,$active_sheet,$Fname,$search,$region,$str_replace_search,$str_replace_region,$NumberOfPages=1){

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


	SmartDbAdd($smeta);
	count_records();
	GetLink($name_sheet,$active_sheet,$Fname);
    //GatherLinks($result,$name_sheet,$active_sheet,$Fname);
    $time = microtime(true) - $start;
    printf('Скрипт выполнялся %.4F сек.', $time/60);
}
function SmartSingleLineSearch ($url,$name_sheet,$active_sheet,$NumberOfPages=6,$Fname)//для поиска где не нужно менять ключевые слова(смета,кострома,ярик,иваново,вологда)
{
    $start = microtime(true);


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

	
	
	preg_match_all('/<strong>\s+(.+?)\s+<\/strong>.+?class="orange.*?">(.+?)<.+?<strong>.+?\s+(.+?)\s+<.+?"descriptTenderTd".+?href="(.+?)".+?<dd>\s+(.+?)\s+<\/dd>\s+<\/dl>\s+<\/td>.+?Размещено:.+?(\d{2}\.\d{2}\.\d{4})</s',$page,$res,PREG_SET_ORDER);
        $smeta[] = $res;
        if($NumberOfPages>1)
        {
            for($i=2;$i<=$NumberOfPages;$i++)
            {
                sleep(rand(8,12));
                $replace = "pageNumber=".$i;
                $pattern = "pageNumber=1";
                $url2=str_replace($pattern,$replace,$url1);
                echo $url2."</br>";
				preg_match('/region_regions.+?>(.+?)</s',$page,$city);// city [1] !!!
	
	
	preg_match_all('/<strong>\s+(.+?)\s+<\/strong>.+?class="orange.*?">(.+?)<.+?<strong>.+?\s+(.+?)\s+<.+?"descriptTenderTd".+?href="(.+?)".+?<dd>\s+(.+?)\s+<\/dd>\s+<\/dl>\s+<\/td>.+?Размещено:.+?(\d{2}\.\d{2}\.\d{4})</s',$page,$res,PREG_SET_ORDER);

                $result = get_web_page($url2);
                if (($result['errno'] != 0 )||($result['http_code'] != 200))
                {
                    echo $result['errmsg'];

                }
                else
                {
                    $page = $result['content'];
                }

                ;
                $smeta[]= $res;
                sleep(rand(6,9));
            }
        }

        sleep(rand(5,10));
    }


for ($i=0;$i<count($smeta);$i++){
		for ($j=0;$j<count($smeta[$i]);$j++){
		
	unset($smeta[$i][$j][0]);}}
	//echo "<br/>"."записей перед добавлением в базу" . count($smeta);
 // echo "<pre>";
//print_r($smeta);
    //echo "</pre>";
    SmartDbAdd($smeta);
	count_records();
	GetLink($name_sheet,$active_sheet,$Fname);
	//test_link();

    $time = microtime(true) - $start;
    printf('Скрипт выполнялся %.2F мин.', $time/60);
}
function SmartMultiDistrikts ($url,$name_sheet,$active_sheet,$Fname,$search,$district,$str_replace_search,$str_replace_district,$NumberOfPages=1){

    $start = microtime(true);

    $sort[] = "sortBy=UPDATE_DATE";
    $sort[] = "sortBy=PUBLISH_DATE";
    $sort[] = "sortBy=UPDATE_PRICE";
    $sort[] = "sortBy=RELEVANCE";


    foreach ($district as $reg)
    {
        $url2 = str_replace($str_replace_district,$reg,$url);
        foreach ($search as $se)
        {

            $uri = str_replace($str_replace_search,$se,$url2);
            echo $uri . "</br>";
            ob_flush();
            flush();

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

	
	
	preg_match_all('/<strong>\s+(.+?)\s+<\/strong>.+?class="orange.*?">(.+?)<.+?<strong>.+?\s+(.+?)\s+<.+?"descriptTenderTd".+?href="(.+?)".+?<dd>\s+(.+?)\s+<\/dd>\s+<\/dl>\s+<\/td>.+?Размещено:.+?(\d{2}\.\d{2}\.\d{4})</s',$page,$res,PREG_SET_ORDER);
        $smeta[] = $res;
        if($NumberOfPages>1)
        {
            for($i=2;$i<=$NumberOfPages;$i++)
            {
                sleep(rand(8,12));
                $replace = "pageNumber=".$i;
                $pattern = "pageNumber=1";
                $url2=str_replace($pattern,$replace,$url1);
                echo $url2."</br>";
				preg_match('/region_regions.+?>(.+?)</s',$page,$city);// city [1] !!!
	
	
	preg_match_all('/<strong>\s+(.+?)\s+<\/strong>.+?class="orange.*?">(.+?)<.+?<strong>.+?\s+(.+?)\s+<.+?"descriptTenderTd".+?href="(.+?)".+?<dd>\s+(.+?)\s+<\/dd>\s+<\/dl>\s+<\/td>.+?Размещено:.+?(\d{2}\.\d{2}\.\d{4})</s',$page,$res,PREG_SET_ORDER);

                $result = get_web_page($url2);
                if (($result['errno'] != 0 )||($result['http_code'] != 200))
                {
                    echo $result['errmsg'];

                }
                else
                {
                    $page = $result['content'];
                }

                ;
                $smeta[]= $res;
                sleep(rand(6,9));
            }
        }

        sleep(rand(5,10));
	}}}


for ($i=0;$i<count($smeta);$i++){
		for ($j=0;$j<count($smeta[$i]);$j++){
		
	unset($smeta[$i][$j][0]);}}
	//echo "<br/>"."записей перед добавлением в базу" . count($smeta);
  echo "<pre>";
print_r($smeta);
    echo "</pre>";
   SmartDbAddBest($smeta);
	count_records_best();		
	//GetLink($name_sheet,$active_sheet,$Fname);
	//test_link();

    $time = microtime(true) - $start;
    printf('Скрипт выполнялся %.2F мин.', $time/60);
}

function SmartDbAdd($smeta){
        $mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");


 for ($i=0;$i<count($smeta);$i++){
		for ($j=0;$j<count($smeta[$i]);$j++)
  {
	   echo "</br>";
	//print ("INSERT INTO `all` (`link`,`type`,`order`)  VALUES ('{$smeta[$i][$j][4]}','{$smeta[$i][$j][1]}','{$smeta[$i][$j][5]}');");
	
   $mysqli->query("INSERT INTO `kostroma` (`link`,`type`,`order`)  VALUES ('{$smeta[$i][$j][4]}','{$smeta[$i][$j][1]}','{$smeta[$i][$j][5]}');");
 }}
 
  $mysqli->close();
}
function SmartDbAddBest($smeta){
        $mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");


 for ($i=0;$i<count($smeta);$i++){
		for ($j=0;$j<count($smeta[$i]);$j++)
  {
	   echo "</br>";
	//print ("INSERT INTO `all` (`link`,`type`,`order`)  VALUES ('{$smeta[$i][$j][4]}','{$smeta[$i][$j][1]}','{$smeta[$i][$j][5]}');");
	print ("INSERT INTO `best` (`link`,`type`,`order`)  VALUES ('{$smeta[$i][$j][4]}','{$smeta[$i][$j][1]}','{$smeta[$i][$j][5]}');");
   $mysqli->query("INSERT INTO `best` (`link`,`type`,`order`)  VALUES ('{$smeta[$i][$j][4]}','{$smeta[$i][$j][1]}','{$smeta[$i][$j][5]}');");
   sleep(1);
 }}
 
  $mysqli->close();
}
function count_records_best(){
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
	//LazyDelKostroma();
	 $sql="SELECT `link` FROM `best`";
    $res = mysqli_query($mysqli,$sql);
		$tender = array();
		while($user = mysqli_fetch_assoc($res))
			{
				extract($user);
				$tender[]=$link;
				
				
			}
			$tender=array_unique($tender);
			echo "<br/>"."Количество записей:";
			echo "<br/>" . count($tender);
			//echo "<pre>";
				//print_r($tender);
				//echo "</pre>";
				}

function GetLink ($name_sheet,$active_sheet,$Fname){
    $mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `type` LIKE 'Закупка у единственного поставщика';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `type` LIKE 'Закупка у единственного поставщика (подрядчика, исполнителя)';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `type` LIKE 'СБ-АСТ: Закупка у единственного источника';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `type` LIKE 'СБ: Закупка у единственного источника';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `type` LIKE 'Закупка у единственного источника';");
    $mysqli->query ("DELETE FROM `kostroma` WHERE `type` LIKE 'Закупка у единственного поставщика (подрядчика, исполнителя) с учетом положений ст. 111 Закона № 44-ФЗ';");
    LazyDelKostroma();
    //LazyDel();
    $mysqli->query ("DELETE FROM `kostroma` WHERE `link` = '';");
    $sql="SELECT `link` FROM `kostroma`";
    $res = mysqli_query($mysqli,$sql);
		$tender = array();
		while($user = mysqli_fetch_assoc($res))
			{
				extract($user);
				$tender[]=$link;
				
				
			}
			$tender=array_unique($tender);
			echo "<pre>";
				print_r($tender);
				echo "</pre>";
	$mysqli->query ("DELETE FROM `kostroma`;");
	GatherLinks($tender,$name_sheet,$active_sheet,$Fname);
	

}
function count_records(){
	$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
	//LazyDelKostroma();
	 $sql="SELECT `link` FROM `kostroma`";
    $res = mysqli_query($mysqli,$sql);
		$tender = array();
		while($user = mysqli_fetch_assoc($res))
			{
				extract($user);
				$tender[]=$link;
				
				
			}
			$tender=array_unique($tender);
			echo "<br/>"."Количество записей:";
			echo "<br/>" . count($tender);
			//echo "<pre>";
				//print_r($tender);
				//echo "</pre>";
}
function GetDataFromFile(){
	$handle = @fopen("file.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        $file[]= $buffer;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
	echo "<pre>";
	print_r ($file);
	echo "</pre>";
	$name_sheet = "Soslooow";
	$active_sheet = 0;
	$Fname = "Soslooow";
	GatherLinks ($file,$name_sheet,$active_sheet,$Fname);
}
}



	function readExelFile(){
		require_once ('PHPExcel.php');
		$filepath = "Z:\home\localhost\www\parser/tenders.xls";
//require_once «PHPExcel.php»; //подключаем наш фреймворк
$ar=array(); // инициализируем массив
$inputFileType = PHPExcel_IOFactory::identify($filepath);  // узнаем тип файла, excel может хранить файлы в разных форматах, xls, xlsx и другие
$objReader = PHPExcel_IOFactory::createReader($inputFileType); // создаем объект для чтения файла
$objPHPExcel = $objReader->load($filepath); // загружаем данные файла в объект
$ar = $objPHPExcel->getActiveSheet()->toArray(); // выгружаем данные из объекта в массив



$mysqli = new mysqli('localhost', 'root','', 'tenders') or mysqli_connect_error("Подключение невозможно: ");
foreach($ar as $ar_colls){

    $mysqli->query("INSERT INTO `sort` (`link`,`client`,`date_ann`,`finance_source`,`type`,`order`,`cost`,`city`,`EndOfOpen`)  VALUES ('{$ar_colls[0]}','$ar_colls[1]','{$ar_colls[2]}','{$ar_colls[3]}','{$ar_colls[4]}','{$ar_colls[6]}','{$ar_colls[7]}','{$ar_colls[5]}','{$ar_colls[8]}');");
  
}
$mysqli->query ("DELETE FROM `sort` WHERE `link` = '';");
AutoClientsChange();
    $sql="SELECT * FROM `sort` ORDER BY `client`";
    $res = mysqli_query($mysqli,$sql);
    while($user = mysqli_fetch_assoc($res))
    {
        $tender[]=$user;
        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }
	
    DbExport($tender,$active_sheet=0,$name_sheet="sort",$Fname="sorted");
	$mysqli->close();
}
  


