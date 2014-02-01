<?php

function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 
$Start = getTime();

$scz[0] = "HSBA.L";
$scz[1] = "RDSA.L";
$scz[2] = "BP.L";
$scz[3] = "VOD.L";
$scz[4] = "GSK.L";
$scz[5] = "AZN.L";
$scz[6] = "BARC.L";
$scz[7] = "BATS.L";
$scz[8] = "RIO.L";
$scz[9] = "BLT.L";
$scz[10] = "BG.L";
$scz[11] = "TSCO.L";
$scz[12] = "STAN.L";
$scz[13] = "RBS.L";
$scz[14] = "LLOY.L";
$scz[15] = "XTR.L";
$scz[16] = "AAL.L";
$scz[17] = "DGE.L";
$scz[18] = "SAB.L";
$scz[19] = "ULVR.L";
$scz[20] = "RB.L";
$scz[21] = "IMT.L";
$scz[22] = "NG.L";
$scz[23] = "PRU.L";
$scz[24] = "CNA.L";
$scz[25] = "AV.L";
$scz[26] = "BA.L";
$scz[27] = "SSE.L";
$scz[28] = "ENRC.L";
$scz[29] = "BSY.L";
$scz[30] = "TLW.L";
$scz[31] = "RR.L";
$scz[32] = "ANTO.L";
$scz[33] = "ABF.L";
$scz[34] = "WPP.L";
$scz[35] = "PSON.L";
$scz[36] = "CGL.L";
$scz[37] = "LRE.L";
$scz[38] = "RKH.L";
$scz[39] = "DES.L";
$scz[40] = "BOR.L";
$scz[41] = "ITV.L";
$scz[42] = "FOGL.L";
$scz[43] = "BDEV.L";
$scz[44] = "GKP.L";
$scz[45] = "POG.L";
$scz[46] = "YELL.L";
$scz[47] = "TW.L";
$scz[48] = "PTEC.L";
$scz[49] = "MLC.L";
$scz[50] = "LGEN.L";
$scz[51] = "VOG.L";
$scz[52] = "BNC.L";
$scz[53] = "VED.L";
$scz[54] = "BAB.L";
$scz[55] = "GFS.L";
$scz[56] = "BKG.L";
$scz[57] = "SAND.L";







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





$day = date("d");

$month = date("m");
$year = date("Y");

for ( $i = 0; $i <= 57; $i++) { 
$url = "http://ichart.finance.yahoo.com/table.csv?s=".$scz[$i]."&d=".$month."&e=".$day."&f=".$year."&g=d&a=".$month."&b=".$day."&c=2000&ignore=.csv";
$file = $sc[$i].".csv"; echo $sc[$i]."Downloading....";
copy ( $url, $file );
}
$End = getTime(); 

echo "&T= ".number_format(($End - $Start),2)." secs";

?>