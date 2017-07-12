<? 

function get_web_page( $url )
{
  $uagent = "Opera/9.80 (Windows NT 6.1; WOW64) Presto/2.12.388 Version/12.14";

  $ch = curl_init ( $url );

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   // ���������� ���-��������
  curl_setopt($ch, CURLOPT_HEADER, 0);           // �� ���������� ���������
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);   // ��������� �� ����������
  curl_setopt($ch, CURLOPT_ENCODING, "");        // ������������ ��� ���������
  curl_setopt($ch, CURLOPT_USERAGENT, $uagent);  // useragent
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120); // ������� ����������
  curl_setopt($ch, CURLOPT_TIMEOUT, 120);        // ������� ������
  curl_setopt($ch, CURLOPT_MAXREDIRS, 10);       // ��������������� ����� 10-��� ���������
  //curl_setopt($ch, CURLOPT_PROXY, '85.26.146.169:80');
  $content = curl_exec( $ch );
  $err     = curl_errno( $ch );
  $errmsg  = curl_error( $ch );
  $header  = curl_getinfo( $ch );
  curl_close( $ch );

  $header['errno']   = $err;
  $header['errmsg']  = $errmsg;
  $header['content'] = $content;
  return $header;
}


	$result = get_web_page($url);
		if (($result['errno'] != 0 )||($result['http_code'] != 200))
    {
			echo $result['errmsg'];
	}
		else
	{
			$page = $result['content'];
	
	}

//AutoDetectLaw ($url,$page);




?>