<?php
include 'curl.php';
include 'config.php';
$token = file_get_contents("".$linktoken."");  
$feed=json_decode(file_get_contents('https://graph.facebook.com/'.$id_like.'/feed?access_token='.$token.'&limit=1'),true); //Limit Id 1 Status
for($i=0;$i<count($feed[data]);$i++){ // Parse ID
$id = $feed[data][$i][id];  
$sllike = $feed[data][$i][likes][count]; 
} 
$curllike = explode("_", $id);
$iduser= $curllike[0];
$idstt= $curllike[1];    
if($sllike <= $limitlike){
login("http://freelikesnow.net/verify.php?user=".$token."","null");
post_data("http://freelikesnow.net/liker.php?type=custom","id=".$idstt."&submit=Submit");
}
?>