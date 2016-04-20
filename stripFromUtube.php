<?php
 //stripSiufromUtube.php

$sourcefile=$argv[1];

$s=file_get_contents($sourcefile);
 
 $op="";
 
  //$pattern='/data-video-id\=\".(.*)\"/';
  $pattern='/https:\/\/www\.youtube\.com\/watch\?v\=(.*)<\/a><span/';
  
            preg_match_all( $pattern, $s, $matches);
                if ($matches!= array()) { 
                   print_r($matches[1]);
                   
                   foreach ( $matches[1] as $e ){
                       //echo $e."\n";
                       $op .='https://www.youtube.com/watch?v='.substr($e, 0 ,12)."\n"; 
                       echo 'https://www.youtube.com/watch?v='.substr($e, 0 ,12)."\n"; 
                   file_put_contents( '/Users/michael/feedyoutube.txt', $op );
                   }
                   exit();
                 }
  
  
  function simpleFind ( $str , $searh, $end ) {
        $t1 = strpos( $str , $searh )+ strlen($searh);
        
        if ($t1 ===false ) {
            return "";
            }else{
                $t2 = strpos( $str , $end, $t1 )  ;
                
                if ($t2 ===false ) {  return ""; } else {
                    return substr( $str, $t1, $t2 - $t1 ); 
            }
        }
   
  }
 
 ?>
