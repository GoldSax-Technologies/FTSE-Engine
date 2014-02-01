<?php
$quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=INDEXFTSE:ASX');
$parts = explode('"', $quote);
$a = 7;
$b = 15;

$json = str_replace(",","",$parts[15]);

$avgp = "30.05"; 
$high = "33330.19";
$low = "29.62";
 
  echo "&L=".$json."&N=FTSE&"; 
$temp = file_get_contents("FTSETEMP.txt", "r");
  

if ($json != $temp ) {
$mhigh = ($avgp + $high)/2;
$mlow = ($avgp + $low)/2;
$llow = ($low - (($avgp - $low)/2));
$hhigh = ($high + (($high - $avgp)/2));
$diff = $json  - $temp;
$diff = number_format($diff, 2, '.', '');
$avgp = number_format($avgp, 2, '.', '');
if ( $json > $temp ) { 
if ( ($json > $mhigh ) && ($json < $high)) { echo "&sign=au" ; }
if ( ($json < $mlow ) && ($json > $low)) { echo "&sign=ad" ; }
if ( $json < $llow ) { echo "&sign=as" ; }
if ( $json > $hhigh ) { echo "&sign=al" ; } 
 if ( ($json < $hhigh) && ($json > $high)) { echo "&sign=auu" ; }
if ( ($json > $llow) && ($json < $low)) { echo "&sign=add" ; }
//else { echo "&sign=a" ; } 
$filedish = fopen("malert.txt", "a+");
            $write = fputs($filedish, "FTSE:".$json. ":Moving up:".$diff.":".$high.":".$low.":".$avgp."\r\n");
		fclose( $filedish );}
if ( $json < $temp ) { 
 if ( ($json >$mhigh) && ($json < $high)) { echo "&sign=bu" ; }
if ( ($json < $mlow) && ($json > $low)) { echo "&sign=bd" ; }
if ( $json < $llow ) { echo "&sign=bs" ; }
if ( $json > $hhigh ) { echo "&sign=bl" ; } 
 if ( ($json < $hhigh) && ($json > $high)) { echo "&sign=buu" ; }
if ( ($json > $llow) && ($json < $low)) { echo "&sign=bdd" ; }
// else { echo "&sign=b" ; }
 $filedish = fopen("malert.txt", "a+");
            $write = fputs($filedish, "FTSE:".$json. ":Moving down:".$diff.":".$high.":".$low.":".$avgp."\r\n");
		fclose( $filedish );}
$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$filename= 'FTSE.txt'; 
$file = fopen($filename, "a+" );

fwrite( $file, $json.":".$time."\r\n" ); 

fclose( $file ); 

if (($json > $mhigh ) && ($temp<= $mhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($json - $low) * (200000/$json);
$risk = (int)$risk;
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "FTSE:".$json. ":Approaching:PHIGH:".$high.":Buy Cost:".$risk."\r\n");
		fclose( $filedash );
		
			
     }   
if (($json < $mhigh ) && ($temp>= $mhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json) * (200000/$json);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "FTSE:". $json.":Moving Down:PHIGH:".$high.":short Cost:".$risk."\r\n");
		fclose( $filedash );
     }   
if (($json > $mlow ) && ($temp<= $mlow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($json - $low) * (200000/$json);
$risk = (int)$risk;
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "FTSE:".$json. ":Moving Up:PLOW:".$low.":Buy Cost:".$risk."\r\n");
		fclose( $filedash );
		
			
     }   
if (($json < $mlow ) && ($temp>= $mlow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json) * (200000/$json);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "FTSE:". $json.":Approaching:PLOW:".$low.":short Cost:".$risk."\r\n");
		fclose( $filedash );
     }   
if (($json > $high ) && ($temp<= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($json - $low) * (200000/$json);
$risk = (int)$risk;
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "FTSE:".$json. ":Breaking:PHIGH:".$high.":Buy Cost:".$risk."\r\n");
		fclose( $filedash );
		
			
     }   
if (($json > $hhigh ) && ($temp<= $hhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
$risk = ($json - $low) * (200000/$json);
$risk = (int)$risk;
          $filedash = fopen("alert.txt", "a+");
            $wrote = fputs($filedash, "FTSE:".$json. ":Moving Beyond:PHIGH:".$high.":Buy Cost:".$risk."\r\n");
		fclose( $filedash );
		
			
     }   
if (($json < $hhigh ) && ($temp>= $hhigh ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("alert.txt", "a+");
             $wrote = fputs($filedash, "FTSE:". $json. ":Coming near:PHIGH:".$high.":Buy Cost:".$risk."\r\n");
		fclose( $filedash );
   
     }   
if (($json < $high ) && ($temp>= $high ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
     
         $filedash = fopen("alert.txt", "a+");
             $wrote = fputs($filedash, "FTSE:". $json. ":Retracing:PHIGH:".$high."\r\n");
		fclose( $filedash );
   
     }   
if (($json < $llow ) && ($temp>= $llow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json) * (200000/$json);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "FTSE:". $json.":Breaking Beyond:PLOW:".$low.":short Cost:".$risk."\r\n");
		fclose( $filedash );
     }   
if (($json < $low ) && ($temp>= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json) * (200000/$json);
$risk = (int)$risk;
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
         $wrote = fputs($filedash, "FTSE:". $json.":Breaking:PLOW:".$low.":short Cost:".$risk."\r\n");
		fclose( $filedash );
     }   
if (($json > $llow ) && ($temp<= $llow ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "FTSE:". $json.":Coming near:PLOW:".$low.":short Cost:".$risk."\r\n");
	fclose( $filedash );
     }   
if (($json > $low ) && ($temp<= $low ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;

$time = date('h:i:s',$new_time);
    $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "FTSE:". $json.":Retracing:PLOW:".$low."\r\n");
	fclose( $filedash );
     }   

if (($json > $avgp ) && ($temp<= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($json - $low) * (200000/$json);
$risk = (int)$risk;
$avgp = number_format($avgp, 2, '.', '');
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
     $wrote = fputs($filedash, "FTSE:".$json. ":Sliding up:PAVG:".$avgp.":Buy Cost:".$risk."\r\n");
	fclose( $filedash );
     }   

if (($json < $avgp ) && ($temp>= $avgp ))
      {$my_time = date('h:i:s',time());
$seconds2add = 19800;

$new_time= strtotime($my_time);
$new_time+=$seconds2add;
$risk = ($high - $json) * (200000/$json);
$risk = (int)$risk;
$avgp = number_format($avgp, 2, '.', '');
$time = date('h:i:s',$new_time);
     $filedash = fopen("alert.txt", "a+");
        $wrote = fputs($filedash, "FTSE:".$json. ":Sliding down:PAVG:".$avgp.":Short Cost:".$risk."\r\n");
	fclose( $filedash );	 
     }   
}
$filedash = fopen("FTSETEMP.txt", "w");
        $wrote = fputs($filedash,  $json);
	fclose( $filedash );

//echo "&chg=".$json_output['cp']."&"; 
?>
