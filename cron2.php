<?php
include 'config.php';
ds(''.$domain.'/20.php');
ds(''.$domain.'/21.php');
ds(''.$domain.'/22.php');
ds(''.$domain.'/23.php');
ds(''.$domain.'/24.php');
ds(''.$domain.'/25.php');
ds(''.$domain.'/26.php');
ds(''.$domain.'/27.php');
ds(''.$domain.'/28.php');
function ds($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>