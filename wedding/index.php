<!DOCTYPE html>
<html>
<head>

<title>이정근 & 신효진 | My Wedding Page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">
     
  </script>
  <style type="text/css">
  body {
/*
		scrollbar-face-color: #ffffff;
		scrollbar-shadow-color: silver;
		scrollbar-highlight-color: #ffffff;
		scrollbar-3dlight-color: silver;
		scrollbar-darkshadow-color:#eeeeee;
		scrollbar-track-color:#dddddd;
		scrollbar-arrow-color: silver;
*/
 		font-family:굴림;
 		font-size: 9pt;
 		color: #555555;
 		line-height:14pt
 	}
	</style>
</head>
<body>
<img src="./wedding01.jpg" border="0"><br>
<?


function ddayCount($future_year,$future_month,$future_day,$future_hour,$future_min,$future_sec,$comment,$type){

    //if ( $future_year <= date("Y") ) { $future_year = date("Y")+1; }

    $now = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));

	 $future = mktime($future_hour,$future_min,$future_sec,$future_month,$future_day,$future_year);

	 $day = floor( ($future - $now) / 86400 );

    $hour = floor( (($future - $now)%(60*60*24))/(60*60) );

    $min = floor( ((($future - $now)%(60*60*24))%(60*60))/(60) );

    $sec = floor( (((($future - $now)%(60*60*24))%(60*60))%(60)) );

    if ($hour < 10) $hour = "0".$hour;

    if ($min < 10) $min = "0".$min;

    if ($sec < 10) $sec = "0".$sec;

    $afterhour = strtotime("+2 hours", $future);




    if ($future >= $now)

    {

        if ($type == 'CountDown')

        {

            return $day." <span class=\"LightYellow\">일 </span> ".$hour." <span class=\"LightYellow\">시간 </span> ".$min." <span class=\"LightYellow\">분 </span> ".$sec."초 ";

        }

        else

        {

            return "<span class=\" uppercase\">D</span> <span class=\"LightYellow\">-</span> ".++$day."";

        }

    }

    else if ($future <= $now)

    {

        if ($future < $afterhour)

        {

            return "<span class=\"LightYellow\">".$comment."</span> 날..";

        }

    }

}

?>
결혼식까지 
<?
echo ddayCount(2012,10,27,13,0,0,"결혼식","CountDown");
?>
남았습니다.
<br>
<img src="./wedding03.jpg" border="0"><br>
<img src="./wedding04.jpg" border="0"><br>
<img src="./wedding02.jpg" border="0"><br>
<img src="./wedding05.jpg" border="0"><br>
<b>남원출발 전세버스 : 왕정동 이마트앞 7시30분</b>
<p>

신랑(이정근) : 011-9647-3887<br>
신부(신효진) : 010-7314-7587<p>
<a href="mailto:cjred77@gmail.com">cjred77@gmail.com</a><p>
</body>
</html>
