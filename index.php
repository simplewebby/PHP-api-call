<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://dna.magnetmail.net/ApiAdapter/Rest/GetDetailedTracking/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\n\"SessionID\":\"4E8EF5E9-B0BF-4458-82E1-61FD59316E3E\",\n\"UserID\":\"userID\",\n\"MessageID\":18952215,\n\"Page\":1,\n\"RecordsPerPage\":2000,\n\"ReportType\":\"unsubscribed\",\n\"FromDate\":\"07/10/2020\",\n\"ToDate\":\"07/21/2020\"\n}\n\n",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic pass",
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$xml = simplexml_load_string($response);
$json = json_encode($xml);
$array = json_decode($json,TRUE);
foreach($array as $errors){
    
    foreach($errors as $info ){
       
        foreach($info as $three){
            
            foreach($three as $i => $values){
                
                //echo $i.' -- '.$values.'<br />';
                foreach($values as $t => $vals) {
                  //  echo $t .'--'. $val .'<br/>';
                    

                
                }
                
            }
            
        }
    }
}


echo '<pre>';
print_r($array);


/* function array_depth(array $array) {
    $max_depth = 1;

    foreach ($array as $value) {
        if (is_array($value)) {
            $depth = array_depth($value) + 1;

            if ($depth > $max_depth) {
                $max_depth = $depth;
            }
        }
    }

    return $max_depth;

}
echo array_depth($array); */
?>



