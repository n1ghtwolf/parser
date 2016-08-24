<?

function WriteToFile($arr)
{
	?><pre><?print_r ($arr);?></pre><?
	$arr_final[0][0]=$_POST['url'];//razobratsa s HYPERLINK
	$arr_final[0][1]=$_POST['client']; 
	$arr_final[0][2]=$arr[0][0];	
	$arr_final[0][3]=$arr[0][5];
	$arr_final[0][4]=$arr[0][1];
	$arr_final[0][5]=$arr[0][3];
	$arr_final[0][6]=$arr[0][2];
	$arr_final[0][7]=$arr[0][4];
	
		?><pre><?print_r($arr_final);?></pre><?

			$fp = fopen('tender.csv', 'a');
			fputs( $fp, b"\xEF\xBB\xBF" ); //как стало (были битые ссылки - это попытка исправить)
			//fputs( $fp, "\xEF\xBB\xBF" ); как было 
			foreach ($arr_final as $fields) 
{
				fputcsv($fp, $fields,";");
}

				fclose($fp);
				unset ($arr_final,$arr,$_POST);
				
	
}
function fz44($page)
{
			global $arr;
				preg_match	('/Размещено:(.\d{2}\.\d{2}\.\d{4})/',$page,$arr1); ?><br/><?
				preg_match('/Способ определения поставщика (.*\n[^)])(\s+)(<td>)(.*)(<)/',$page,$arr2);
				preg_match('/"notice_orderName">(.*)</',$page,$arr3);
				preg_match_all('/Место нахождения(.*\n.*?<td>.+?,.+?,)(.+?),.*/',$page,$arr4);?><br/><?
				preg_match_all('/цена контракта(.*\n)(.*<td>)(.*)(<)/',$page,$arr5);?><br/><?
				preg_match("/Источник финансирования.*?<td>\s*(.*?)\s*</s",$page,$arr6);?><br/><? 
				preg_match ("/Дата и время окончания подачи.*?(\d{2}.\d{2}.\d{4}\s\d{2}:\d{2})/s",$page,$arr8);	
	
		
					$arr= array(
								array(
									0 => $arr1[1],
									1 => $arr2[4],
									2 => $arr3[1],
									3 => $arr4[2][0],
									4 => $arr5[3][0],
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
			else 
									$arr[0][4]= $arr5[2];
									$arr[0][5]=$arr6[0]=" ";
}
function search ($surl){
	
	
}
function searchASC3 (){
	$url = "http://zakupki.gov.ru/epz/order/extendedsearch/results.html?searchString=%D1%81%D0%BC%D0%B5%D1%82%D0%BD&morphology=on&pageNumber=1&sortDirection=true&recordsPerPage=_50&showLotsInfoHidden=false&fz44=on&fz223=on&priceFrom=0&priceTo=200000000000&currencyId=1&publishDateFrom=24.08.2016&publishDateTo=&districts=5277317&regions=&af=true&ca=true&pc=true&sortBy=UPDATE_DATE&openMode=USE_DEFAULT_PARAMS";
		$result = get_web_page($url);
			if (($result['errno'] != 0 )||($result['http_code'] != 200))
    {
				echo $result['errmsg'];
	}
			else
	{
				$page = $result['content'];
	}
	
	preg_match_all('/<td class="descriptTenderTd">.+?href="(.*?)">/s',$page,$smet);
	
	print_r($smet);
	
	
	
	
	
}
