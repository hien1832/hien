<?php
include 'config.php';
ds(''.$domain.'/11.php');
ds(''.$domain.'/12.php');
ds(''.$domain.'/13.php');
ds(''.$domain.'/14.php');
ds(''.$domain.'/15.php');
ds(''.$domain.'/16.php');
ds(''.$domain.'/17.php');
ds(''.$domain.'/18.php');
ds(''.$domain.'/19.php');
function ds($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>