<?php
header("Content-type:text/html;application/json;charset=utf-8");
    $curl = curl_init();
     $url = "https://route.showapi.com/255-1?page=2&showapi_appid=31504&showapi_timestamp=20170205210105&title=&type=&showapi_sign=2536390722c78b498f56b568916df2e7";
    curl_setopt($curl,CURLOPT_URL, $url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    $resp = curl_exec($curl);
    curl_close($curl);
	$json  = json_decode($resp);
	echo $resp;
?>