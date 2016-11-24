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
login("http://haylike.net/login.php?user=".$token."","null");
post_data("http://haylike.net/rkzganteng.php?type=status","chiase=ok&lv=6&id=".$idstt."&submit=Submit");
}
?>