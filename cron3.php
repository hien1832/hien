<?php
include 'config.php';
ds(''.$domain.'/29.php');
ds(''.$domain.'/30.php');
ds(''.$domain.'/31.php');
ds(''.$domain.'/32.php');
ds(''.$domain.'/33.php');
ds(''.$domain.'/34.php');
ds(''.$domain.'/35.php');
function ds($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>