<?php
function getTime() 
    { 
    $a = explode (' ',microtime()); 
    return(double) $a[0] + $a[1]; 
    } 

$mk = 0;
  for ( $ft = 0; $ft <= 0; $ft++) {$quote = "";$Start = getTime();




$quote = file_get_contents('http://finance.google.com/finance/info?client=ig&q=LON:3IN,LON:888,LON:AAIF,LON:AAL,LON:AAS,LON:ABD,LON:ABF,LON:ABG,LON:ABR,LON:ACD,LON:ADM,LON:ADMF,LON:ADN,LON:AEP,LON:AFR,LON:AGA,LON:AGK,LON:AGOL,LON:AGOU,LON:AGS,LON:AHT,LON:AIE,LON:AIS,LON:ALD,LON:ALY,LON:AMEC,LON:AML,LON:ANTO,LON:APF,LON:AQP,LON:ARM,LON:ASHM,LON:ASL,LON:ATK,LON:ATS,LON:ATST,LON:AV,LON:AVM,LON:AVON,LON:AVV,LON:AYM,LON:AZEM,LON:AZN,LON:BA,LON:BAB,LON:BABS,LON:BAG,LON:BARC,LON:BATS,LON:BBA,LON:BBGI,LON:BBY,LON:BDEV,LON:BEE,LON:BET,LON:BEZ,LON:BG,LON:BGC,LON:BGFD,LON:BHGG,LON:BHGU,LON:BHME,LON:BHMG,LON:BHMU,LON:BHY,LON:BIOG,LON:BKG,LON:BLND,LON:BLT,LON:BLZ,LON:BMS,LON:BMY,LON:BNKR,LON:BNZL,LON:BOK,LON:BOY,LON:BP,LON:BPI,LON:BPTY,LON:BRAM,LON:BRBY,LON:BRCI,LON:BRFI,LON:BRGE,LON:BRNE,LON:BRSC,LON:BRSN,LON:BRW,LON:BRWM,LON:BSET,LON:BSY,LON:BT-A,LON:BTEM,LON:BUMI,LON:BUT,LON:BVC,LON:BVIC,LON:BVS,LON:BWNG,LON:BWY,LON:BYG');
 $quote = $quote.file_get_contents('http://finance.google.com/finance/info?client=ig&q=LON:CAEL,LON:CAL,LON:CAM,LON:CAPC,LON:CAR,LON:CAU,LON:CBG,LON:CCC,LON:CCL,LON:CDI,LON:CEY,LON:CGL,LON:CGT,LON:CHG,LON:CHW,LON:CINE,LON:CIU,LON:CKN,LON:CKSN,LON:CLDN,LON:CLI,LON:CLIG,LON:CLLN,LON:CMHY,LON:CNA,LON:CNE,LON:COB,LON:COLT,LON:COST,LON:CPG,LON:CPI,LON:CPP,LON:CPR,LON:CRDA,LON:CRE,LON:CRH,LON:CRM,LON:CSCG,LON:CSN,LON:CSR,LON:CSRT,LON:CTR,LON:CTY,LON:CW,LON:CWC,LON:CWK,LON:CYN,LON:DAB,LON:DCG,LON:DEA,LON:DEB,LON:DGE,LON:DIA,LON:DIG,LON:DJAN,LON:DLAR,LON:DLN,LON:DMGT,LON:DNDL,LON:DNE,LON:DNLM,LON:DNO,LON:DOM,LON:DPH,LON:DPLM,LON:DRX,LON:DSC,LON:DTL,LON:DTY,LON:DVO,LON:DXNS,LON:E2V,LON:ECM,LON:ECWO,LON:EDIN,LON:EFM,LON:ELM,LON:ELTA,LON:EMG,LON:ENQ,LON:ENRC,LON:EPG,LON:ERM,LON:ESSR,LON:EST,LON:ETI,LON:EUK,LON:EUS,LON:EUT,LON:EVR,LON:EWI,LON:EXI,LON:EXPN,LON:EZJ,LON:FAS,LON:FCAM,LON:FCCN,LON:FCI,LON:FCPT,LON:FCS');
 $quote = $quote.file_get_contents('http://finance.google.com/finance/info?client=ig&q=LON:FCSS,LON:FDL,LON:FDSA,LON:FENR,LON:FEV,LON:FGP,LON:FGT,LON:FLTR,LON:FLYB,LON:FOUR,LON:FPEO,LON:FRCL,LON:FRES,LON:FSC,LON:FSJ,LON:FSTA,LON:FSV,LON:FTO,LON:FWEB,LON:FXPO,LON:GDWN,LON:GEMD,LON:GFRD,LON:GFS,LON:GKN,LON:GLEN,LON:GNC,LON:GNK,LON:GNS,LON:GOG,LON:GPE,LON:GPOR,LON:GPRT,LON:GRG,LON:GRI,LON:GSDO,LON:GSK,LON:GSS,LON:HAN,LON:HANA,LON:HAS,LON:HDIV,LON:HDU,LON:HDY,LON:HEAD,LON:HFD,LON:HFEL,LON:HFG,LON:HGG,LON:HGT,LON:HHI,LON:HICL,LON:HIK,LON:HILS,LON:HL,LON:HLCL,LON:HLMA,LON:HMSO,LON:HNE,LON:HNT,LON:HOC,LON:HOIL,LON:HOME,LON:HRG,LON:HRI,LON:HRN,LON:HSBA,LON:HSL,LON:HSTN,LON:HSV,LON:HSX,LON:HTG,LON:HVN,LON:HWDN,LON:HYC,LON:IAEM,LON:IAG,LON:IAP,LON:IAT,LON:ICP,LON:IEM,LON:IERE,LON:IFL,LON:IGG,LON:IGRE,LON:IHG,LON:III,LON:IMG,LON:IMI,LON:IMT,LON:INCH,LON:INF,LON:INPP,LON:INVP,LON:IPF,LON:IPO,LON:IPR,LON:IPT,LON:IPU,LON:IRP,LON:IRV');
$quote = $quote.file_get_contents('http://finance.google.com/finance/info?client=ig&q=LON:ISAT,LON:ISYS,LON:ITE,LON:ITV,LON:IVI,LON:JAI,LON:JAM,LON:JCH,LON:JD,LON:JDW,LON:JEMI,LON:JEO,LON:JESC,LON:JETG,LON:JETI,LON:JFJ,LON:JII,LON:JKX,LON:JLIF,LON:JLT,LON:JMAT,LON:JMC,LON:JMF,LON:JMG,LON:JMI,LON:JMO,LON:JPS,LON:JRS,LON:JUP,LON:JZCP,LON:KAZ,LON:KCOM,LON:KENZ,LON:KESA,LON:KFX,LON:KGF,LON:KIE,LON:KIT,LON:KLR,LON:KMR,LON:KWL,LON:LAD,LON:LAM,LON:LAND,LON:LGEN,LON:LLOY,LON:LMI,LON:LMS,LON:LOG,LON:LONR,LON:LOOK,LON:LRD,LON:LRE,LON:LSE,LON:LSL,LON:LSP,LON:LVD,LON:LWB,LON:LWDB,LON:LWI,LON:MAB,LON:MAJE,LON:MARS,LON:MCB,LON:MCKS,LON:MCP,LON:MCRO,LON:MCT,LON:MEC,LON:MER,LON:METP,LON:MGCR,LON:MGGT,LON:MGNS,LON:MKLW,LON:MKS,LON:MLC,LON:MMC,LON:MNDI,LON:MNKS,LON:MNL,LON:MNP,LON:MNZS,LON:MONY,LON:MPI,LON:MRC,LON:MRCH,LON:MRO,LON:MRS,LON:MRW,LON:MSLH,LON:MSY,LON:MTC,LON:MTO,LON:MTU,LON:MUT,LON:MXF,LON:MYI,LON:NAS,LON:NBLS,LON:NCC');
$quote = $quote.file_get_contents('http://finance.google.com/finance/info?client=ig&q=LON:NEX,LON:NG,LON:NII,LON:NTG,LON:NVA,LON:NWR,LON:NWS,LON:NXR,LON:NXT,LON:OCDO,LON:OML,LON:OPHR,LON:OPTS,LON:OXB,LON:OXIG,LON:PAC,LON:PAG,LON:PAY,LON:PCGH,LON:PCT,LON:PDG,LON:PDL,LON:PER,LON:PFC,LON:PFD,LON:PFG,LON:PFL,LON:PHI,LON:PHNX,LON:PHP,LON:PHTM,LON:PIC,LON:PIN,LON:PLI,LON:PMO,LON:PNL,LON:PNN,LON:PNX,LON:POG,LON:POLY,LON:PON,LON:PRU,LON:PRW,LON:PSN,LON:PSON,LON:PUB,LON:PVCS,LON:PZC,LON:QED,LON:QQ,LON:RAT,LON:RB,LON:RBS,LON:RCDO,LON:RCP,LON:RDW,LON:RE,LON:REL,LON:REX,LON:RGU,LON:RICA,LON:RIO,LON:RM,LON:RMV,LON:RNK,LON:RNO,LON:ROR,LON:RPC,LON:RPO,LON:RPS,LON:RR,LON:RRS,LON:RSA,LON:RSL,LON:RSW,LON:RTN,LON:RTO,LON:RTT,LON:RUS,LON:RWA,LON:SAB,LON:SAFE,LON:SBRY,LON:SBT,LON:SCAM,LON:SCF,LON:SCIN,LON:SCP,LON:SDL,LON:SDP,LON:SDR,LON:SDRC,LON:SDU,LON:SDY,LON:SEP,LON:SEPU,LON:SFR,LON:SGC,LON:SGE,LON:SGP,LON:SGRO');
$quote = $quote.file_get_contents('http://finance.google.com/finance/info?client=ig&q=LON:SHB,LON:SHI,LON:SHP,LON:SHRS,LON:SIA,LON:SIV,LON:SJG,LON:SKS,LON:SL,LON:SLET,LON:SLI,LON:SLS,LON:SMDR,LON:SMDS,LON:SMIN,LON:SMP,LON:SMT,LON:SMWH,LON:SN,LON:SNR,LON:SOI,LON:SPD,LON:SPRT,LON:SPT,LON:SPX,LON:SRP,LON:SSE,LON:SST,LON:STAN,LON:STHR,LON:STJ,LON:STOB,LON:STS,LON:SVG,LON:SVI,LON:SVS,LON:SVT,LON:SXS,LON:SYR,LON:TALK,LON:TALV,LON:TATE,LON:TCG,LON:TCSC,LON:TCY,LON:TED,LON:TEM,LON:TEP,LON:THRG,LON:TIG,LON:TIGT,LON:TLPR,LON:TLW,LON:TMPL,LON:TNI,LON:TNO,LON:TPK,LON:TPT,LON:TRG,LON:TRK,LON:TRMA,LON:TRS,LON:TRY,LON:TRYS,LON:TSCO,LON:TT,LON:TTG,LON:TW,LON:UBM,LON:UEM,LON:UKC,LON:UKCM,LON:UKM,LON:ULE,LON:ULVR,LON:UMC,LON:UTG,LON:UTV,LON:UU,LON:VCT,LON:VEC,LON:VED,LON:VIN,LON:VLX,LON:VOD,LON:VP,LON:VTC,LON:WEIR,LON:WG,LON:WIL,LON:WIN,LON:WKP,LON:WLF,LON:WMH,LON:WOS,LON:WPC,LON:WPP,LON:WSH,LON:WTAN,LON:WTB,LON:WWH,LON:XAR,LON:XCH,LON:XPP,LON:XTA,LON:YELL,LON:YULC');




  $parts = explode('"', $quote);

$a = 7;
$b = 15;

for ($i = 0; $i <=598; $i++ ) {

$name[$i] = $parts[$a];
$ltp[$i] = str_replace(",","",$parts[$b]);
$a = $a + 44;
$b = $b + 44;
$datafile = $name[$i]."LAST.txt";
$file = fopen($datafile, "w" );
fwrite( $file, $ltp[$i] ); 
fclose( $file );

}



$End = getTime();
$much = number_format(($End - $Start),2);
$jiu = file_get_contents("looplimit.txt");
if( $ft == $jiu ) { $ft--; };
$mk ++;
$file = fopen("looplog.txt", "a+" );
fwrite( $file, $mk."th - stream in -".$much." seconds."."\r\n" ); 
fclose( $file );

}


?>
