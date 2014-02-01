<?php
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

$sc[0] = "HSBA";
$sc[1] = "RDSA";
$sc[2] = "BP";
$sc[3] = "VOD";
$sc[4] = "GSK";
$sc[5] = "AZN";
$sc[6] = "BARC";
$sc[7] = "BATS";
$sc[8] = "RIO";
$sc[9] = "BLT";
$sc[10] = "BG";
$sc[11] = "TSCO";
$sc[12] = "STAN";
$sc[13] = "RBS";
$sc[14] = "LLOY";
$sc[15] = "XTR";
$sc[16] = "AAL";
$sc[17] = "DGE";
$sc[18] = "SAB";
$sc[19] = "ULVR";
$sc[20] = "RB";
$sc[21] = "IMT";
$sc[22] = "NG";
$sc[23] = "PRU";
$sc[24] = "CNA";
$sc[25] = "AV";
$sc[26] = "BA";
$sc[27] = "SSE";
$sc[28] = "ENRC";
$sc[29] = "BSY";
$sc[30] = "TLW";
$sc[31] = "RR";
$sc[32] = "ANTO";
$sc[33] = "ABF";
$sc[34] = "WPP";
$sc[35] = "PSON";
$sc[36] = "CGL";
$sc[37] = "LRE";
$sc[38] = "RKH";
$sc[39] = "DES";
$sc[40] = "BOR";
$sc[41] = "ITV";
$sc[42] = "FOGL";
$sc[43] = "BDEV";
$sc[44] = "GKP";
$sc[45] = "POG";
$sc[46] = "YELL";
$sc[47] = "TW";
$sc[48] = "PTEC";
$sc[49] = "MLC";
$sc[50] = "LGEN";
$sc[51] = "VOG";
$sc[52] = "BNC";
$sc[53] = "VED";
$sc[54] = "BAB";
$sc[55] = "GFS";
$sc[56] = "BKG";
$sc[57] = "SAND";

$cont = file_get_contents('yuk.txt');
$stop = ".";
for ( $i = 0; $i <= 57; $i++ ) {
$conti = str_replace("XRFGYUT",$sc[$i],$cont);
$filename= "tab.php"; //The name of your .txt file
$file = fopen($filename, "a+" );
fwrite( $file, $conti."\r\n" ); //Write the data input box to the .txt file.
fclose( $file ); //Close the file from further editing
}
$End = getTime(); 
echo "&T= ".number_format(($End - $Start),2)." secs";
echo "&result=Updated in....";
?>