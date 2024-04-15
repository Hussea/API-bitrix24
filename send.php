<?php



if(isset($_POST['submit']))
{
   

$url ="https://b24-wp4dlq.bitrix24.ru/rest/1/vlbuz29a3psr8myg/crm.deal.add";

$inf1 = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
$inf2 = filter_var($_POST['coomnt'],FILTER_SANITIZE_STRING);
$inf3 = filter_var($_POST['tliphon'],FILTER_SANITIZE_STRING);
if(empty($inf1) or empty($inf2) or empty($inf3))
{
    
    header('location:index.php');
}
else{
$data_array = array(
    "fields" => array(
        "TITLE" => $inf1,
        "COMMENTS" => $inf2,
        "CONTACT_ID" => $inf3
    )
);

$data = http_build_query($data_array);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
    echo $e;
}else{
    $decoded = json_decode($resp);
    foreach($decoded as $key => $val){
        echo $key . ':' . print_r($val, true)  . '<br>';
    }
}

curl_close($ch);
}
 }
header('location:index.php');
?>








