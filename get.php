<?php
//  header("Content-Type: application/json; charset=UTF-8");
 $curl = curl_init();
  
 curl_setopt_array($curl, array(
   CURLOPT_URL => "https://api.aiforthai.in.th/tlexplus?text=ผมรักคุณ",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => array(
     "Apikey: TTH6paIqrwJrmArUNLgz1Gzd4h9bk9NK"
   )
 ));
  
 $response = curl_exec($curl);
 $err = curl_error($curl);


  
 curl_close($curl);




 if ($err) {
   echo "cURL Error #:" . $err;
 } else {
//    echo $response ;
    $arr = json_decode($response,true);
    array_walk_recursive($arr, function($item, $key) {
    echo "{$key} {$item} <br>";
   });
 }

  
 ?>