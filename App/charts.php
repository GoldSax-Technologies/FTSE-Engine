<?PHP

$file_handle = fopen("alert.txt", "rb");
$c = 0;
while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);
$parts = explode(':', $line_of_text);

$tc[$c] = $parts[0] ;
$c++;
}
$c--;
$c--;

for ( $i = 0; $i <= $c; $i++ ) {
 echo "&c".$i."=".$tc[$c];
 
$c--;
}

fclose($file_handle);

?>