<?php
include 'config.php';
ds(''.$domain.'/1.php');
ds(''.$domain.'/2.php');
ds(''.$domain.'/3.php');
ds(''.$domain.'/4.php');
ds(''.$domain.'/5.php');
ds(''.$domain.'/6.php');
ds(''.$domain.'/7.php');
ds(''.$domain.'/8.php');
ds(''.$domain.'/9.php');
ds(''.$domain.'/10.php');
function ds($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>