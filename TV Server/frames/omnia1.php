<!DOCTYPE html>
<html>
	<head>
		<title>Philips Line Overview</title>
		<style>
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			td, th {
			  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			}

			tr:nth-child(even) {
			  background-color: #dddddd;
			}
			
			hr.line {
			  border: 10px solid blue;
			  border-radius: 5px;
			}
		</style>
	</head>
	<body>
	
		<?php
		$servername = "161.84.15.7";
		$username = "CMND";
		$password = "cmnd";
		$dbname = "PRODUCTIONTRACER";
		$port = "1433";
		$data =date("Ymd");
		$data2 =date("Y/m/d");
		$data3 = date('Y/m/d',strtotime("-1 days"));
		
//------------------------------------------------------------------------------------------------------------------------------------		
		$I1 = 0;
		$J1 = 0;
		$K1 = 0;
		$L1 = 0;
		$M1 = 0;
		$N1 = 0;
		$O1 = 0;
		$P1 = 0;
//---------------------SHIFT 1 Omnia 1---------------------		
		$Q1 = 0;
		$R1 = 0;
		$S1 = 0;
		$T1 = 0;
		$U1 = 0;
		$V1 = 0;
		$W1 = 0;
		$X1 = 0;
//---------------------SHIFT 2 Omnia 1---------------------
		$A1 = 0;
		$B1 = 0;
		$C1 = 0;
		$D1 = 0;
		$E1 = 0;
		$F1 = 0;
		$G1 = 0;
		$H1 = 0;
//---------------------SHIFT 3 Omnia 1---------------------

//------------------------------------------------------------------------------------------------------------------------------------
		$I2 = 0;
		$J2 = 0;
		$K2 = 0;
		$L2 = 0;
		$M2 = 0;
		$N2 = 0;
		$O2 = 0;
		$P2 = 0;
//---------------------SHIFT 1 Omnia 2---------------------		
		$Q2 = 0;
		$R2 = 0;
		$S2 = 0;
		$T2 = 0;
		$U2 = 0;
		$V2 = 0;
		$W2 = 0;
		$X2 = 0;
//---------------------SHIFT 2 Omnia 2---------------------
		$A2 = 0;
		$B2 = 0;
		$C2 = 0;
		$D2 = 0;
		$E2 = 0;
		$F2 = 0;
		$G2 = 0;
		$H2 = 0;
//---------------------SHIFT 3 Omnia 2---------------------

//------------------------------------------------------------------------------------------------------------------------------------
		$I3 = 0;
		$J3 = 0;
		$K3 = 0;
		$L3 = 0;
		$M3 = 0;
		$N3 = 0;
		$O3 = 0;
		$P3 = 0;
//---------------------SHIFT 1 PHOENIX---------------------		
		$Q3 = 0;
		$R3 = 0;
		$S3 = 0;
		$T3 = 0;
		$U3 = 0;
		$V3 = 0;
		$W3 = 0;
		$X3 = 0;
//---------------------SHIFT 2 PHOENIX---------------------
		$A3 = 0;
		$B3 = 0;
		$C3 = 0;
		$D3 = 0;
		$E3 = 0;
		$F3 = 0;
		$G3 = 0;
		$H3 = 0;
//---------------------SHIFT 3 PHOENIX---------------------
//------------------------------------------------------------------------------------------------------------------------------------
		$I4 = 0;
		$J4 = 0;
		$K4 = 0;
		$L4 = 0;
		$M4 = 0;
		$N4 = 0;
		$O4 = 0;
		$P4 = 0;
//---------------------SHIFT 1 INCANTO---------------------		
		$Q4 = 0;
		$R4 = 0;
		$S4 = 0;
		$T4 = 0;
		$U4 = 0;
		$V4 = 0;
		$W4 = 0;
		$X4 = 0;
//---------------------SHIFT 2 INCANTO---------------------
		$A4 = 0;
		$B4 = 0;
		$C4 = 0;
		$D4 = 0;
		$E4 = 0;
		$F4 = 0;
		$G4 = 0;
		$H4 = 0;
//---------------------SHIFT 3 INCANTO---------------------
//------------------------------------------------------------------------------------------------------------------------------------
		$I5 = 0;
		$J5 = 0;
		$K5 = 0;
		$L5 = 0;
		$M5 = 0;
		$N5 = 0;
		$O5 = 0;
		$P5 = 0;
//---------------------SHIFT 1 MINUTO---------------------		
		$Q5 = 0;
		$R5 = 0;
		$S5 = 0;
		$T5 = 0;
		$U5 = 0;
		$V5 = 0;
		$W5 = 0;
		$X5 = 0;
//---------------------SHIFT 2 MINUTO---------------------
		$A5 = 0;
		$B5 = 0;
		$C5 = 0;
		$D5 = 0;
		$E5 = 0;
		$F5 = 0;
		$G5 = 0;
		$H5 = 0;
//---------------------SHIFT 3 MINUTO---------------------
//------------------------------------------------------------------------------------------------------------------------------------

		$connectioninfo = array ( "Database"=>"PRODUCTIONTRACER", "UID"=>"CMND", "PWD"=>"cmnd");
		
		$conn = sqlsrv_connect($servername, $connectioninfo);
		
		if( $conn === false ) {
			die( print_r( sqlsrv_errors(), true));
		} else {
			//print "Good DB Connection: $conn<br>";
		}
//------------------------------------------------------------------------------------------------------------------------------------
		$II = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '7' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$JJ = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '8' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$KK = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '9' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$LL = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '10' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$MM = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '11' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$NN = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '12' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$OO = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '13' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$PP = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '14' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 1 Omnia 1---------------------
		$QQ = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '15' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$RR = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '16' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$SS = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '17' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$TT = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '18' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$UU = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '19' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$VV = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '20' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$WW = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '21' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		$XX = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '22' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 2 Omnia 1---------------------
		$AA = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '23' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data - 1) ";
		$BB = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '0' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data - 1) ";
		$CC = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '1' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data - 1) ";
		$DD = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '2' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data - 1) ";
		$EE = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '3' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data - 1) ";
		$FF = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '4' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data - 1) ";
		$GG = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '5' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data - 1) ";
		$HH = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '6' AND name = 'SOG300-OMNIA' AND DataRaportarii = ($data - 1) ";
		//---------------------SHIFT 3 Omnia 1---------------------
		
//------------------------------------------------------------------------------------------------------------------------------------	

		$II2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '7' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$JJ2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '8' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$KK2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '9' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$LL2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '10' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$MM2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '11' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$NN2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '12' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$OO2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '13' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$PP2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '14' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 1 Omnia 2---------------------
		$QQ2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '15' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$RR2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '16' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$SS2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '17' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$TT2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '18' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$UU2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '19' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$VV2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '20' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$WW2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '21' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		$XX2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '22' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 2 Omnia 2---------------------
		$AA2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '23' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data - 1) ";
		$BB2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '0' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data - 1) ";
		$CC2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '1' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data - 1) ";
		$DD2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '2' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data - 1) ";
		$EE2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '3' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data - 1) ";
		$FF2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '4' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data - 1) ";
		$GG2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '5' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data - 1) ";
		$HH2 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '6' AND name = 'SOG301-OMNIA2' AND DataRaportarii = ($data - 1) ";
		//---------------------SHIFT 3 Omnia 2---------------------
		
//------------------------------------------------------------------------------------------------------------------------------------

		$II3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '7' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$JJ3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '8' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$KK3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '9' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$LL3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '10' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$MM3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '11' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$NN3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '12' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$OO3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '13' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$PP3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '14' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 1 Phoenix---------------------
		$QQ3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '15' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$RR3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '16' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$SS3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '17' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$TT3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '18' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$UU3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '19' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$VV3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '20' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$WW3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '21' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		$XX3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '22' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 2 Phoenix---------------------
		$AA3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '23' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data - 1) ";
		$BB3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '0' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data - 1) ";
		$CC3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '1' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data - 1) ";
		$DD3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '2' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data - 1) ";
		$EE3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '3' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data - 1) ";
		$FF3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '4' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data - 1) ";
		$GG3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '5' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data - 1) ";
		$HH3 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '6' AND name = 'SOG302-PHOENIX' AND DataRaportarii = ($data - 1) ";
		//---------------------SHIFT 3 Phoenix---------------------
		
//------------------------------------------------------------------------------------------------------------------------------------

		$II4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '7' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$JJ4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '8' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$KK4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '9' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$LL4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '10' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$MM4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '11' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$NN4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '12' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$OO4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '13' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$PP4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '14' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 1 INCANTO---------------------
		$QQ4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '15' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$RR4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '16' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$SS4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '17' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$TT4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '18' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$UU4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '19' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$VV4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '20' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$WW4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '21' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		$XX4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '22' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 2 INCANTO---------------------
		$AA4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '23' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data - 1) ";
		$BB4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '0' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data - 1) ";
		$CC4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '1' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data - 1) ";
		$DD4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '2' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data - 1) ";
		$EE4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '3' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data - 1) ";
		$FF4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '4' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data - 1) ";
		$GG4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '5' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data - 1) ";
		$HH4 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '6' AND name = 'SOG600-XELSIS' AND DataRaportarii = ($data - 1) ";
		//---------------------SHIFT 3 INCANTO---------------------

//------------------------------------------------------------------------------------------------------------------------------------

		$II5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '7' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$JJ5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '8' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$KK5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '9' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$LL5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '10' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$MM5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '11' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$NN5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '12' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$OO5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '13' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$PP5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '14' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 1 MINUTO---------------------
		$QQ5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '15' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$RR5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '16' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$SS5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '17' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$TT5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '18' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$UU5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '19' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$VV5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '20' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$WW5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '21' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		$XX5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '22' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data) ";
		//---------------------SHIFT 2 MINUTO---------------------
		$AA5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '23' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data - 1) ";
		$BB5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '0' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data - 1) ";
		$CC5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '1' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data - 1) ";
		$DD5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '2' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data - 1) ";
		$EE5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '3' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data - 1) ";
		$FF5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '4' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data - 1) ";
		$GG5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '5' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data - 1) ";
		$HH5 = "SELECT QtaProd FROM View_TV_CMND WHERE Ora24H = '6' AND name = 'SOG400-Xsmall-UCell1' AND DataRaportarii = ($data - 1) ";
		//---------------------SHIFT 3 MINUTO---------------------

//------------------------------------------------------------------------------------------------------------------------------------


		$result = sqlsrv_query($conn, $II);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $I1) { /*echo "$I1";*/ } }
		
		$result = sqlsrv_query($conn, $JJ);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $J1) { /*echo "$J1";*/ } }
		
		$result = sqlsrv_query($conn, $KK);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $K1) { /*echo "$K1";*/ } }
		
		$result = sqlsrv_query($conn, $LL);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $L1) { /*echo "$L1";*/ } }
		
		$result = sqlsrv_query($conn, $MM);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $M1) { /*echo "$M1";*/ } }
		
		$result = sqlsrv_query($conn, $NN);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $N1) { /*echo "$N1";*/ } }
		
		$result = sqlsrv_query($conn, $OO);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $O1) { /*echo "$O1";*/ } }
		
		$result = sqlsrv_query($conn, $PP);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $P1) { /*echo "$P1";*/ } }
		//---------------------SHIFT 1 Omnia 1---------------------
		
		$result = sqlsrv_query($conn, $QQ);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $Q1) { /*echo "$Q1";*/ } }
		
		$result = sqlsrv_query($conn, $RR);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $R1) { /*echo "$R1";*/ } }
		
		$result = sqlsrv_query($conn, $SS);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $S1) { /*echo "$S1";*/ } }
		
		$result = sqlsrv_query($conn, $TT);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $T1) { /*echo "$T1";*/ } }
		
		$result = sqlsrv_query($conn, $UU);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $U1) { /*echo "$U1";*/ } }
		
		$result = sqlsrv_query($conn, $VV);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $V1) { /*echo "$V1";*/ } }
		
		$result = sqlsrv_query($conn, $WW);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $W1) { /*echo "$W1";*/ } }
		
		$result = sqlsrv_query($conn, $XX);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $X1) { /*echo "$X1";*/ } }
		
		//---------------------SHIFT 2 Omnia 1---------------------
				
		$result = sqlsrv_query($conn, $AA);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $A1) { /*echo "$A1";*/ } }
		
		$result = sqlsrv_query($conn, $BB);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $B1) { /*echo "$B1";*/ } }
		
		$result = sqlsrv_query($conn, $CC);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $C1) { /*echo "$C1";*/ } }
		
		$result = sqlsrv_query($conn, $DD);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $D1) { /*echo "$D1";*/ } }
		
		$result = sqlsrv_query($conn, $EE);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $E1) { /*echo "$E1";*/ } }
		
		$result = sqlsrv_query($conn, $FF);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $F1) { /*echo "$F1";*/ } }
		
		$result = sqlsrv_query($conn, $GG);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $G1) { /*echo "$G1";*/ } }
		
		$result = sqlsrv_query($conn, $HH);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $H1) { /*echo "$H1";*/ } }
		
		//---------------------SHIFT 3 Omnia 1---------------------

//------------------------------------------------------------------------------------------------------------------------------------

		$result = sqlsrv_query($conn, $II2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $I2) { /*echo "$I2";*/ } }
		
		$result = sqlsrv_query($conn, $JJ2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $J2) { /*echo "$J2";*/ } }
		
		$result = sqlsrv_query($conn, $KK2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $K2) { /*echo "$K2";*/ } }
		
		$result = sqlsrv_query($conn, $LL2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $L2) { /*echo "$L2";*/ } }
		
		$result = sqlsrv_query($conn, $MM2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $M2) { /*echo "$M2";*/ } }
		
		$result = sqlsrv_query($conn, $NN2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $N2) { /*echo "$N2";*/ } }
		
		$result = sqlsrv_query($conn, $OO2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $O2) { /*echo "$O2";*/ } }
		
		$result = sqlsrv_query($conn, $PP2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $P2) { /*echo "$P2";*/ } }
		//---------------------SHIFT 1 Omnia 2---------------------
		
		$result = sqlsrv_query($conn, $QQ2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $Q2) { /*echo "$Q2";*/ } }
		
		$result = sqlsrv_query($conn, $RR2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $R2) { /*echo "$R2";*/ } }
		
		$result = sqlsrv_query($conn, $SS2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $S2) { /*echo "$S2";*/ } }
		
		$result = sqlsrv_query($conn, $TT2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $T2) { /*echo "$T2";*/ } }
		
		$result = sqlsrv_query($conn, $UU2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $U2) { /*echo "$U2";*/ } }
		
		$result = sqlsrv_query($conn, $VV2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $V2) { /*echo "$V2";*/ } }
		
		$result = sqlsrv_query($conn, $WW2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $W2) { /*echo "$W2";*/ } }
		
		$result = sqlsrv_query($conn, $XX2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $X2) { /*echo "$X2";*/ } }
		
		//---------------------SHIFT 2 Omnia 2---------------------
				
		$result = sqlsrv_query($conn, $AA2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $A2) { /*echo "$A2";*/ } }
		
		$result = sqlsrv_query($conn, $BB2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $B2) { /*echo "$B2";*/ } }
		
		$result = sqlsrv_query($conn, $CC2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $C2) { /*echo "$C2";*/ } }
		
		$result = sqlsrv_query($conn, $DD2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $D2) { /*echo "$D2";*/ } }
		
		$result = sqlsrv_query($conn, $EE2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $E2) { /*echo "$E2";*/ } }
		
		$result = sqlsrv_query($conn, $FF2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $F2) { /*echo "$F2";*/ } }
		
		$result = sqlsrv_query($conn, $GG2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $G2) { /*echo "$G2";*/ } }
		
		$result = sqlsrv_query($conn, $HH2);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $H2) { /*echo "$H2";*/ } }
		
		//---------------------SHIFT 3 Omnia 2---------------------
		
//------------------------------------------------------------------------------------------------------------------------------------

		$result = sqlsrv_query($conn, $II3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $I3) { /*echo "$I3";*/ } }
		
		$result = sqlsrv_query($conn, $JJ3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $J3) { /*echo "$J3";*/ } }
		
		$result = sqlsrv_query($conn, $KK3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $K3) { /*echo "$K3";*/ } }
		
		$result = sqlsrv_query($conn, $LL3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $L3) { /*echo "$L3";*/ } }
		
		$result = sqlsrv_query($conn, $MM3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $M3) { /*echo "$M3";*/ } }
		
		$result = sqlsrv_query($conn, $NN3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $N3) { /*echo "$N3";*/ } }
		
		$result = sqlsrv_query($conn, $OO3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $O3) { /*echo "$O3";*/ } }
		
		$result = sqlsrv_query($conn, $PP3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $P3) { /*echo "$P3";*/ } }
		
		//---------------------SHIFT 1 PHOENIX---------------------
		
		$result = sqlsrv_query($conn, $QQ3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $Q3) { /*echo "$Q3";*/ } }
		
		$result = sqlsrv_query($conn, $RR3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $R3) { /*echo "$R3";*/ } }
		
		$result = sqlsrv_query($conn, $SS3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $S3) { /*echo "$S3";*/ } }
		
		$result = sqlsrv_query($conn, $TT3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $T3) { /*echo "$T3";*/ } }
		
		$result = sqlsrv_query($conn, $UU3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $U3) { /*echo "$U3";*/ } }
		
		$result = sqlsrv_query($conn, $VV3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $V3) { /*echo "$V3";*/ } }
		
		$result = sqlsrv_query($conn, $WW3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $W3) { /*echo "$W3";*/ } }
		
		$result = sqlsrv_query($conn, $XX3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $X3) { /*echo "$X3";*/ } }
		
		//---------------------SHIFT 2 PHOENIX---------------------
				
		$result = sqlsrv_query($conn, $AA3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $A3) { /*echo "$A3";*/ } }
		
		$result = sqlsrv_query($conn, $BB3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $B3) { /*echo "$B3";*/ } }
		
		$result = sqlsrv_query($conn, $CC3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $C3) { /*echo "$C3";*/ } }
		
		$result = sqlsrv_query($conn, $DD3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $D3) { /*echo "$D3";*/ } }

		$result = sqlsrv_query($conn, $EE3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $E3) { /*echo "$E3";*/ } }
		
		$result = sqlsrv_query($conn, $FF3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $F3) { /*echo "$F3";*/ } }
		
		$result = sqlsrv_query($conn, $GG3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $G3) { /*echo "$G3";*/ } }
		
		$result = sqlsrv_query($conn, $HH3);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $H3) { /*echo "$H3";*/ } }
		
		//---------------------SHIFT 3 PHOENIX---------------------
		
//------------------------------------------------------------------------------------------------------------------------------------
		
		$result = sqlsrv_query($conn, $II4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $I4) { /*echo "$I4";*/ } }
		
		$result = sqlsrv_query($conn, $JJ4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $J4) { /*echo "$J4";*/ } }
		
		$result = sqlsrv_query($conn, $KK4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $K4) { /*echo "$K4";*/ } }
		
		$result = sqlsrv_query($conn, $LL4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $L4) { /*echo "$L4";*/ } }
		
		$result = sqlsrv_query($conn, $MM4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $M4) { /*echo "$M4";*/ } }
		
		$result = sqlsrv_query($conn, $NN4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $N4) { /*echo "$N4";*/ } }
		
		$result = sqlsrv_query($conn, $OO4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $O4) { /*echo "$O4";*/ } }
		
		$result = sqlsrv_query($conn, $PP4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $P4) { /*echo "$P4";*/ } }
		
		//---------------------SHIFT 1 INCANTO---------------------
		
		$result = sqlsrv_query($conn, $QQ4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $Q4) { /*echo "$Q4";*/ } }
		
		$result = sqlsrv_query($conn, $RR4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $R4) { /*echo "$R4";*/ } }
		
		$result = sqlsrv_query($conn, $SS4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $S4) { /*echo "$S4";*/ } }
		
		$result = sqlsrv_query($conn, $TT4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $T4) { /*echo "$T4";*/ } }
		
		$result = sqlsrv_query($conn, $UU4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $U4) { /*echo "$U4";*/ } }
		
		$result = sqlsrv_query($conn, $VV4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $V4) { /*echo "$V4";*/ } }
		
		$result = sqlsrv_query($conn, $WW4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $W4) { /*echo "$W4";*/ } }
		
		$result = sqlsrv_query($conn, $XX4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $X4) { /*echo "$X4";*/ } }
		
		//---------------------SHIFT 2 INCANTO---------------------
				
		$result = sqlsrv_query($conn, $AA4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $A4) { /*echo "$A4";*/ } }
		
		$result = sqlsrv_query($conn, $BB4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $B4) { /*echo "$B4";*/ } }
		
		$result = sqlsrv_query($conn, $CC4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $C4) { /*echo "$C4";*/ } }
		
		$result = sqlsrv_query($conn, $DD4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $D4) { /*echo "$D4";*/ } }

		$result = sqlsrv_query($conn, $EE4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $E4) { /*echo "$E4";*/ } }
		
		$result = sqlsrv_query($conn, $FF4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $F4) { /*echo "$F4";*/ } }
		
		$result = sqlsrv_query($conn, $GG4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $G4) { /*echo "$G4";*/ } }
		
		$result = sqlsrv_query($conn, $HH4);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $H4) { /*echo "$H4";*/ } }
		
		//---------------------SHIFT 3 INCANTO---------------------
		
//------------------------------------------------------------------------------------------------------------------------------------

		
		$result = sqlsrv_query($conn, $II5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $I5) { /*echo "$I5";*/ } }
		
		$result = sqlsrv_query($conn, $JJ5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $J5) { /*echo "$J5";*/ } }
		
		$result = sqlsrv_query($conn, $KK5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $K5) { /*echo "$K5";*/ } }
		
		$result = sqlsrv_query($conn, $LL5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $L5) { /*echo "$L5";*/ } }
		
		$result = sqlsrv_query($conn, $MM5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $M5) { /*echo "$M5";*/ } }
		
		$result = sqlsrv_query($conn, $NN5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $N5) { /*echo "$N5";*/ } }
		
		$result = sqlsrv_query($conn, $OO5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $O5) { /*echo "$O5";*/ } }
		
		$result = sqlsrv_query($conn, $PP5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $P5) { /*echo "$P5";*/ } }
		
		//---------------------SHIFT 1 MINUTO---------------------
		
		$result = sqlsrv_query($conn, $QQ5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $Q5) { /*echo "$Q5";*/ } }
		
		$result = sqlsrv_query($conn, $RR5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $R5) { /*echo "$R5";*/ } }
		
		$result = sqlsrv_query($conn, $SS5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $S5) { /*echo "$S5";*/ } }
		
		$result = sqlsrv_query($conn, $TT5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $T5) { /*echo "$T5";*/ } }
		
		$result = sqlsrv_query($conn, $UU5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $U5) { /*echo "$U5";*/ } }
		
		$result = sqlsrv_query($conn, $VV5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $V5) { /*echo "$V5";*/ } }
		
		$result = sqlsrv_query($conn, $WW5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $W5) { /*echo "$W5";*/ } }
		
		$result = sqlsrv_query($conn, $XX5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $X5) { /*echo "$X5";*/ } }
		
		//---------------------SHIFT 2 MINUTO---------------------
				
		$result = sqlsrv_query($conn, $AA5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $A5) { /*echo "$A5";*/ } }
		
		$result = sqlsrv_query($conn, $BB5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $B5) { /*echo "$B5";*/ } }
		
		$result = sqlsrv_query($conn, $CC5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $C5) { /*echo "$C5";*/ } }
		
		$result = sqlsrv_query($conn, $DD5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $D5) { /*echo "$D5";*/ } }

		$result = sqlsrv_query($conn, $EE5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $E5) { /*echo "$E5";*/ } }
		
		$result = sqlsrv_query($conn, $FF5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $F5) { /*echo "$F5";*/ } }
		
		$result = sqlsrv_query($conn, $GG5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $G5) { /*echo "$G5";*/ } }
		
		$result = sqlsrv_query($conn, $HH5);
		while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {	foreach ($row as $H5) { /*echo "$H5";*/ } }
		
		//---------------------SHIFT 3 MINUTO---------------------
//------------------------------------------------------------------------------------------------------------------------------------
		
		if ($I1 == NULL) {$I = 0; } else {$I = "$I1";};
		if ($J1 == NULL) {$J = 0; } else {$J = "$J1";};
		if ($K1 == NULL) {$K = 0; } else {$K = "$K1";};
		if ($L1 == NULL) {$L = 0; } else {$L = "$L1";};
		if ($M1 == NULL) {$M = 0; } else {$M = "$M1";};
		if ($N1 == NULL) {$N = 0; } else {$N = "$N1";};
		if ($O1 == NULL) {$O = 0; } else {$O = "$O1";};
		if ($P1 == NULL) {$P = 0; } else {$P = "$P1";};
//---------------------SHIFT 1  Omnia 1---------------------		
		if ($Q1 == NULL) {$Q = 0; } else {$Q = "$Q1";};
		if ($R1 == NULL) {$R = 0; } else {$R = "$R1";};
		if ($S1 == NULL) {$S = 0; } else {$S = "$S1";};
		if ($T1 == NULL) {$T = 0; } else {$T = "$T1";};
		if ($U1 == NULL) {$U = 0; } else {$U = "$U1";};
		if ($V1 == NULL) {$V = 0; } else {$V = "$V1";};
		if ($W1 == NULL) {$W = 0; } else {$W = "$W1";};
		if ($X1 == NULL) {$X = 0; } else {$X = "$X1";};
//---------------------SHIFT 2 Omnia 1---------------------
		if ($A1 == NULL) {$A = 0; } else {$A = "$A1";};
		if ($B1 == NULL) {$B = 0; } else {$B = "$B1";};
		if ($C1 == NULL) {$C = 0; } else {$C = "$C1";};
		if ($D1 == NULL) {$D = 0; } else {$D = "$D1";};
		if ($E1 == NULL) {$E = 0; } else {$E = "$E1";};
		if ($F1 == NULL) {$F = 0; } else {$F = "$F1";};
		if ($G1 == NULL) {$G = 0; } else {$G = "$G1";};
		if ($H1 == NULL) {$H = 0; } else {$H = "$H1";};
//---------------------SHIFT 3 Omnia 1---------------------



		if ($I2 == NULL) {$I2 = 0; } else {$I2 = "$I2";};
		if ($J2 == NULL) {$J2 = 0; } else {$J2 = "$J2";};
		if ($K2 == NULL) {$K2 = 0; } else {$K2 = "$K2";};
		if ($L2 == NULL) {$L2 = 0; } else {$L2 = "$L2";};
		if ($M2 == NULL) {$M2 = 0; } else {$M2 = "$M2";};
		if ($N2 == NULL) {$N2 = 0; } else {$N2 = "$N2";};
		if ($O2 == NULL) {$O2 = 0; } else {$O2 = "$O2";};
		if ($P2 == NULL) {$P2 = 0; } else {$P2 = "$P2";};
//---------------------SHIFT 1  Omnia 2---------------------		
		if ($Q2 == NULL) {$Q2 = 0; } else {$Q2 = "$Q2";};
		if ($R2 == NULL) {$R2 = 0; } else {$R2 = "$R2";};
		if ($S2 == NULL) {$S2 = 0; } else {$S2 = "$S2";};
		if ($T2 == NULL) {$T2 = 0; } else {$T2 = "$T2";};
		if ($U2 == NULL) {$U2 = 0; } else {$U2 = "$U2";};
		if ($V2 == NULL) {$V2 = 0; } else {$V2 = "$V2";};
		if ($W2 == NULL) {$W2 = 0; } else {$W2 = "$W2";};
		if ($X2 == NULL) {$X2 = 0; } else {$X2 = "$X2";};
//---------------------SHIFT 2 Omnia 2---------------------
		if ($A2 == NULL) {$A2 = 0; } else {$A2 = "$A2";};
		if ($B2 == NULL) {$B2 = 0; } else {$B2 = "$B2";};
		if ($C2 == NULL) {$C2 = 0; } else {$C2 = "$C2";};
		if ($D2 == NULL) {$D2 = 0; } else {$D2 = "$D2";};
		if ($E2 == NULL) {$E2 = 0; } else {$E2 = "$E2";};
		if ($F2 == NULL) {$F2 = 0; } else {$F2 = "$F2";};
		if ($G2 == NULL) {$G2 = 0; } else {$G2 = "$G2";};
		if ($H2 == NULL) {$H2 = 0; } else {$H2 = "$H2";};
//---------------------SHIFT 3 Omnia 2---------------------



		if ($I3 == NULL) {$I3 = 0; } else {$I3 = "$I3";};
		if ($J3 == NULL) {$J3 = 0; } else {$J3 = "$J3";};
		if ($K3 == NULL) {$K3 = 0; } else {$K3 = "$K3";};
		if ($L3 == NULL) {$L3 = 0; } else {$L3 = "$L3";};
		if ($M3 == NULL) {$M3 = 0; } else {$M3 = "$M3";};
		if ($N3 == NULL) {$N3 = 0; } else {$N3 = "$N3";};
		if ($O3 == NULL) {$O3 = 0; } else {$O3 = "$O3";};
		if ($P3 == NULL) {$P3 = 0; } else {$P3 = "$P3";};
//---------------------SHIFT 1  PHOENIX---------------------		
		if ($Q3 == NULL) {$Q3 = 0; } else {$Q3 = "$Q3";};
		if ($R3 == NULL) {$R3 = 0; } else {$R3 = "$R3";};
		if ($S3 == NULL) {$S3 = 0; } else {$S3 = "$S3";};
		if ($T3 == NULL) {$T3 = 0; } else {$T3 = "$T3";};
		if ($U3 == NULL) {$U3 = 0; } else {$U3 = "$U3";};
		if ($V3 == NULL) {$V3 = 0; } else {$V3 = "$V3";};
		if ($W3 == NULL) {$W3 = 0; } else {$W3 = "$W3";};
		if ($X3 == NULL) {$X3 = 0; } else {$X3 = "$X3";};
//---------------------SHIFT 2 PHOENIX---------------------
		if ($A3 == NULL) {$A3 = 0; } else {$A3 = "$A3";};
		if ($B3 == NULL) {$B3 = 0; } else {$B3 = "$B3";};
		if ($C3 == NULL) {$C3 = 0; } else {$C3 = "$C3";};
		if ($D3 == NULL) {$D3 = 0; } else {$D3 = "$D3";};
		if ($E3 == NULL) {$E3 = 0; } else {$E3 = "$E3";};
		if ($F3 == NULL) {$F3 = 0; } else {$F3 = "$F3";};
		if ($G3 == NULL) {$G3 = 0; } else {$G3 = "$G3";};
		if ($H3 == NULL) {$H3 = 0; } else {$H3 = "$H3";};
//---------------------SHIFT 3 PHOENIX---------------------
		 
		 
		 
		if ($I4 == NULL) {$I4 = 0; } else {$I4 = "$I4";};
		if ($J4 == NULL) {$J4 = 0; } else {$J4 = "$J4";};
		if ($K4 == NULL) {$K4 = 0; } else {$K4 = "$K4";};
		if ($L4 == NULL) {$L4 = 0; } else {$L4 = "$L4";};
		if ($M4 == NULL) {$M4 = 0; } else {$M4 = "$M4";};
		if ($N4 == NULL) {$N4 = 0; } else {$N4 = "$N4";};
		if ($O4 == NULL) {$O4 = 0; } else {$O4 = "$O4";};
		if ($P4 == NULL) {$P4 = 0; } else {$P4 = "$P4";};
//---------------------SHIFT 1  INCANTO--------------------		
		if ($Q4 == NULL) {$Q4 = 0; } else {$Q4 = "$Q4";};
		if ($R4 == NULL) {$R4 = 0; } else {$R4 = "$R4";};
		if ($S4 == NULL) {$S4 = 0; } else {$S4 = "$S4";};
		if ($T4 == NULL) {$T4 = 0; } else {$T4 = "$T4";};
		if ($U4 == NULL) {$U4 = 0; } else {$U4 = "$U4";};
		if ($V4 == NULL) {$V4 = 0; } else {$V4 = "$V4";};
		if ($W4 == NULL) {$W4 = 0; } else {$W4 = "$W4";};
		if ($X4 == NULL) {$X4 = 0; } else {$X4 = "$X4";};
//---------------------SHIFT 2 INCANTO---------------------
		if ($A4 == NULL) {$A4 = 0; } else {$A4 = "$A4";};
		if ($B4 == NULL) {$B4 = 0; } else {$B4 = "$B4";};
		if ($C4 == NULL) {$C4 = 0; } else {$C4 = "$C4";};
		if ($D4 == NULL) {$D4 = 0; } else {$D4 = "$D4";};
		if ($E4 == NULL) {$E4 = 0; } else {$E4 = "$E4";};
		if ($F4 == NULL) {$F4 = 0; } else {$F4 = "$F4";};
		if ($G4 == NULL) {$G4 = 0; } else {$G4 = "$G4";};
		if ($H4 == NULL) {$H4 = 0; } else {$H4 = "$H4";};
//---------------------SHIFT 3 INCANTO---------------------


		if ($I5 == NULL) {$I5 = 0; } else {$I5 = "$I5";};
		if ($J5 == NULL) {$J5 = 0; } else {$J5 = "$J5";};
		if ($K5 == NULL) {$K5 = 0; } else {$K5 = "$K5";};
		if ($L5 == NULL) {$L5 = 0; } else {$L5 = "$L5";};
		if ($M5 == NULL) {$M5 = 0; } else {$M5 = "$M5";};
		if ($N5 == NULL) {$N5 = 0; } else {$N5 = "$N5";};
		if ($O5 == NULL) {$O5 = 0; } else {$O5 = "$O5";};
		if ($P5 == NULL) {$P5 = 0; } else {$P5 = "$P5";};
//---------------------SHIFT 1  MINUTO--------------------		
		if ($Q5 == NULL) {$Q5 = 0; } else {$Q5 = "$Q5";};
		if ($R5 == NULL) {$R5 = 0; } else {$R5 = "$R5";};
		if ($S5 == NULL) {$S5 = 0; } else {$S5 = "$S5";};
		if ($T5 == NULL) {$T5 = 0; } else {$T5 = "$T5";};
		if ($U5 == NULL) {$U5 = 0; } else {$U5 = "$U5";};
		if ($V5 == NULL) {$V5 = 0; } else {$V5 = "$V5";};
		if ($W5 == NULL) {$W5 = 0; } else {$W5 = "$W5";};
		if ($X5 == NULL) {$X5 = 0; } else {$X5 = "$X5";};
//---------------------SHIFT 2 MINUTO---------------------
		if ($A5 == NULL) {$A5 = 0; } else {$A5 = "$A5";};
		if ($B5 == NULL) {$B5 = 0; } else {$B5 = "$B5";};
		if ($C5 == NULL) {$C5 = 0; } else {$C5 = "$C5";};
		if ($D5 == NULL) {$D5 = 0; } else {$D5 = "$D5";};
		if ($E5 == NULL) {$E5 = 0; } else {$E5 = "$E5";};
		if ($F5 == NULL) {$F5 = 0; } else {$F5 = "$F5";};
		if ($G5 == NULL) {$G5 = 0; } else {$G5 = "$G5";};
		if ($H5 == NULL) {$H5 = 0; } else {$H5 = "$H5";};
//---------------------SHIFT 3 MINUTO---------------------

	
	$totalSCH1O1 = array($I, $J, $K, $L, $M, $N, $O, $P);
	$totalSCH2O1 = array($Q, $R, $S, $T, $U, $V, $W, $X);
	$totalSCH3O1 = array($A, $B, $C, $D, $E, $F, $G, $H);
	
	$totalSCH1O2 = array($I2, $J2, $K2, $L2, $M2, $N2, $O2, $P2);
	$totalSCH2O2 = array($Q2, $R2, $S2, $T2, $U2, $V2, $W2, $X2);
	$totalSCH3O2 = array($A2, $B2, $C2, $D2, $E2, $F2, $G2, $H2);
	
	$totalSCH1O3 = array($I3, $J3, $K3, $L3, $M3, $N3, $O3, $P3);
	$totalSCH2O3 = array($Q3, $R3, $S3, $T3, $U3, $V3, $W3, $X3);
	$totalSCH3O3 = array($A3, $B3, $C3, $D3, $E3, $F3, $G3, $H3);
	
	$totalSCH1IN = array($I4, $J4, $K4, $L4, $M4, $N4, $O4, $P4);
	$totalSCH2IN = array($Q4, $R4, $S4, $T4, $U4, $V4, $W4, $X4);
	$totalSCH3IN = array($A4, $B4, $C4, $D4, $E4, $F4, $G4, $H4);

	$totalSCH1MI = array($I5, $J5, $K5, $L5, $M5, $N5, $O5, $P5);
	$totalSCH2MI = array($Q5, $R5, $S5, $T5, $U5, $V5, $W5, $X5);
	$totalSCH3MI = array($A5, $B5, $C5, $D5, $E5, $F5, $G5, $H5);
	
	$SCH1O1 = array_sum($totalSCH1O1);
	$SCH2O1 = array_sum($totalSCH2O1);
	$SCH3O1 = array_sum($totalSCH3O1);
	
	$SCH1O2 = array_sum($totalSCH1O2);
	$SCH2O2 = array_sum($totalSCH2O2);
	$SCH3O2 = array_sum($totalSCH3O2);
	
	$SCH1O3 = array_sum($totalSCH1O3);
	$SCH2O3 = array_sum($totalSCH2O3);
	$SCH3O3 = array_sum($totalSCH3O3);
	
	$SCH1IN = array_sum($totalSCH1IN);
	$SCH2IN = array_sum($totalSCH2IN);
	$SCH3IN = array_sum($totalSCH3IN);
	
	$SCH1MI = array_sum($totalSCH1MI);
	$SCH2MI = array_sum($totalSCH2MI);
	$SCH3MI = array_sum($totalSCH3MI);
	
	?>
	
		<div class="names">
			<center>
			<!-------TABEL------->
			<table border="1">
			
			<!------SCIMBURI------>
			<tr><td>Linia</td><td>Detalii</td><td colspan="9"><center>Schimbul 1</center></td><td colspan="9"><center>Schimbul 2</center></td><td colspan="9"><center>Schimbul 3 (<?php echo $data3 ?>)</center></td></tr>
			
			<!------ORE------>
			<tr>
				<td>Ore</td><td><?php echo $data2 ?></td>
				<td>07 08</td><td>08 09</td><td>09 10</td><td>10 11</td><td>11 12</td><td>12 13</td><td>13 14</td><td>14 15</td><td>TOTAL</td>
				<td>15 16</td><td>16 17</td><td>17 18</td><td>18 19</td><td>19 20</td><td>20 21</td><td>21 22</td><td>22 23</td><td>TOTAL</td>
				<td>23 00</td><td>00 01</td><td>01 02</td><td>02 03</td><td>03 04</td><td>04 05</td><td>05 06</td><td>06 07</td><td>TOTAL</td>
			</tr>
			
			<!-------SPACE------> 
			<tr><td colspan="29"><br></td></tr>
			
			<!------OMNIA 1------>
			<tr><td rowspan="3"><center>Omnia 1</center></td></tr>
			<tr>
				<td>Target</td>
				<td>96</td><td>96</td><td>96</td><td>62</td><td>96</td><td>96</td><td>77</td><td>87</td><td rowspan="2"><center><?php echo array_sum($totalSCH1O1); ?></center></td>
				<td>96</td><td>96</td><td>96</td><td>62</td><td>96</td><td>96</td><td>77</td><td>87</td><td rowspan="2"><center><?php echo array_sum($totalSCH2O1); ?></center></td>
				<td>96</td><td>96</td><td>96</td><td>62</td><td>96</td><td>96</td><td>77</td><td>87</td><td rowspan="2"><center><?php echo array_sum($totalSCH3O1); ?></center></td>
			</tr>
			<tr>
				<td>Realizat</td>
				

				<!-------SHIFT 1----->
				<?php if($I >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $I; ?> </td> <?php } else if($I < 96 and $I > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $I; ?> </td> <?php } else if($I == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $I ?> </td> <?php } ?>
				<?php if($J >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $J; ?> </td> <?php } else if($J < 96 and $J > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $J; ?> </td> <?php } else if($J == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $J ?> </td> <?php } ?>
				<?php if($K >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $K; ?> </td> <?php } else if($K < 96 and $K > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $K; ?> </td> <?php } else if($K == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $K ?> </td> <?php } ?>
				<?php if($L >= 62) {?> <td style="background-color:#9ACD32"> <?php echo $L; ?> </td> <?php } else if($L < 62 and $L > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $L; ?> </td> <?php } else if($L == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $L ?> </td> <?php } ?>
				<?php if($M >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $M; ?> </td> <?php } else if($M < 96 and $M > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $M; ?> </td> <?php } else if($M == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $M ?> </td> <?php } ?>
				<?php if($N >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $N; ?> </td> <?php } else if($N < 96 and $N > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $N; ?> </td> <?php } else if($N == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $N ?> </td> <?php } ?>
				<?php if($O >= 77) {?> <td style="background-color:#9ACD32"> <?php echo $O; ?> </td> <?php } else if($O < 77 and $O > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $O; ?> </td> <?php } else if($O == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $O ?> </td> <?php } ?>
				<?php if($P >= 87) {?> <td style="background-color:#9ACD32"> <?php echo $P; ?> </td> <?php } else if($P < 87 and $P > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $P; ?> </td> <?php } else if($P == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $P ?> </td> <?php } ?>

				<!-------SHIFT 2----->
				<?php if($Q >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $Q; ?> </td> <?php } else if($Q < 96 and $Q > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $Q; ?> </td> <?php } else if($Q == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $Q ?> </td> <?php } ?>
				<?php if($R >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $R; ?> </td> <?php } else if($R < 96 and $R > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $R; ?> </td> <?php } else if($R == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $R ?> </td> <?php } ?>
				<?php if($S >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $S; ?> </td> <?php } else if($S < 96 and $S > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $S; ?> </td> <?php } else if($S == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $S ?> </td> <?php } ?>
				<?php if($T >= 62) {?> <td style="background-color:#9ACD32"> <?php echo $T; ?> </td> <?php } else if($T < 62 and $T > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $T; ?> </td> <?php } else if($T == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $T ?> </td> <?php } ?>
				<?php if($U >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $U; ?> </td> <?php } else if($U < 96 and $U > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $U; ?> </td> <?php } else if($U == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $U ?> </td> <?php } ?>
				<?php if($V >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $V; ?> </td> <?php } else if($V < 96 and $V > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $V; ?> </td> <?php } else if($V == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $V ?> </td> <?php } ?>
				<?php if($W >= 77) {?> <td style="background-color:#9ACD32"> <?php echo $W; ?> </td> <?php } else if($W < 77 and $W > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $W; ?> </td> <?php } else if($W == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $W ?> </td> <?php } ?>
				<?php if($X >= 87) {?> <td style="background-color:#9ACD32"> <?php echo $X; ?> </td> <?php } else if($X < 87 and $X > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $X; ?> </td> <?php } else if($X == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $X ?> </td> <?php } ?>

				<!------SHIFT 3------>
				<?php if($A >= 96) 	{?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($A < 96 and $A > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } else if($A == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $A ?> </td> <?php } ?>
				<?php if($B >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $B; ?> </td> <?php } else if($B < 96 and $B > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $B; ?> </td> <?php } else if($B == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $B ?> </td> <?php } ?>
				<?php if($C >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $C; ?> </td> <?php } else if($C < 96 and $C > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $C; ?> </td> <?php } else if($C == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $C ?> </td> <?php } ?>
				<?php if($D >= 62) {?> <td style="background-color:#9ACD32"> <?php echo $D; ?> </td> <?php } else if($D < 62 and $D > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $D; ?> </td> <?php } else if($D == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $D ?> </td> <?php } ?>
				<?php if($E >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $E; ?> </td> <?php } else if($E < 96 and $E > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $E; ?> </td> <?php } else if($E == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $E ?> </td> <?php } ?>
				<?php if($F >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $F; ?> </td> <?php } else if($F < 96 and $F > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $F; ?> </td> <?php } else if($F == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $F ?> </td> <?php } ?>
				<?php if($G >= 77) {?> <td style="background-color:#9ACD32"> <?php echo $G; ?> </td> <?php } else if($G < 77 and $G > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $G; ?> </td> <?php } else if($G == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $G ?> </td> <?php } ?>
				<?php if($H >= 87) {?> <td style="background-color:#9ACD32"> <?php echo $H; ?> </td> <?php } else if($H < 87 and $H > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $H; ?> </td> <?php } else if($H == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $H ?> </td> <?php } ?>

			</tr>
			
			<!--------SPACE------->
			<tr><td colspan="29"><br></td></tr>
			
			<!------OMNIA 2------>
			<tr><td rowspan="3"><center>Omnia 2</center></td></tr>
			<tr>
				<td>Target</td>
				<td>96</td><td>96</td><td>96</td><td>62</td><td>96</td><td>96</td><td>77</td><td>87</td><td rowspan="2"><center><?php echo array_sum($totalSCH1O2); ?></center></td>
				<td>96</td><td>96</td><td>96</td><td>62</td><td>96</td><td>96</td><td>77</td><td>87</td><td rowspan="2"><center><?php echo array_sum($totalSCH2O2); ?></center></td>
				<td>96</td><td>96</td><td>96</td><td>62</td><td>96</td><td>96</td><td>77</td><td>87</td><td rowspan="2"><center><?php echo array_sum($totalSCH3O2); ?></center></td>
			</tr>
			<tr>
				<td>Realizat</td>
				

				<!-------SHIFT 1----->
				<?php if($I2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $I2; ?> </td> <?php } else if($I2 < 96 and $I2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $I2; ?> </td> <?php } else if($I2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $I2 ?> </td> <?php } ?>
				<?php if($J2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $J2; ?> </td> <?php } else if($J2 < 96 and $J2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $J2; ?> </td> <?php } else if($J2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $J2 ?> </td> <?php } ?>
				<?php if($K2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $K2; ?> </td> <?php } else if($K2 < 96 and $K2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $K2; ?> </td> <?php } else if($K2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $K2 ?> </td> <?php } ?>
				<?php if($L2 >= 62) {?> <td style="background-color:#9ACD32"> <?php echo $L2; ?> </td> <?php } else if($L2 < 62 and $L2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $L2; ?> </td> <?php } else if($L2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $L2 ?> </td> <?php } ?>
				<?php if($M2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $M2; ?> </td> <?php } else if($M2 < 96 and $M2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $M2; ?> </td> <?php } else if($M2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $M2 ?> </td> <?php } ?>
				<?php if($N2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $N2; ?> </td> <?php } else if($N2 < 96 and $N2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $N2; ?> </td> <?php } else if($N2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $N2 ?> </td> <?php } ?>
				<?php if($O2 >= 77) {?> <td style="background-color:#9ACD32"> <?php echo $O2; ?> </td> <?php } else if($O2 < 77 and $O2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $O2; ?> </td> <?php } else if($O2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $O2 ?> </td> <?php } ?>
				<?php if($P2 >= 87) {?> <td style="background-color:#9ACD32"> <?php echo $P2; ?> </td> <?php } else if($P2 < 87 and $P2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $P2; ?> </td> <?php } else if($P2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $P2 ?> </td> <?php } ?>
				<!-------SHIFT 2----->
				<?php if($Q2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $Q2; ?> </td> <?php } else if($Q2 < 96 and $Q2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $Q2; ?> </td> <?php } else if($Q2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $Q2 ?> </td> <?php } ?>
				<?php if($R2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $R2; ?> </td> <?php } else if($R2 < 96 and $R2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $R2; ?> </td> <?php } else if($R2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $R2 ?> </td> <?php } ?>
				<?php if($S2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $S2; ?> </td> <?php } else if($S2 < 96 and $S2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $S2; ?> </td> <?php } else if($S2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $S2 ?> </td> <?php } ?>
				<?php if($T2 >= 62) {?> <td style="background-color:#9ACD32"> <?php echo $T2; ?> </td> <?php } else if($T2 < 62 and $T2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $T2; ?> </td> <?php } else if($T2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $T2 ?> </td> <?php } ?>
				<?php if($U2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $U2; ?> </td> <?php } else if($U2 < 96 and $U2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $U2; ?> </td> <?php } else if($U2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $U2 ?> </td> <?php } ?>
				<?php if($V2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $V2; ?> </td> <?php } else if($V2 < 96 and $V2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $V2; ?> </td> <?php } else if($V2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $V2 ?> </td> <?php } ?>
				<?php if($W2 >= 77) {?> <td style="background-color:#9ACD32"> <?php echo $W2; ?> </td> <?php } else if($W2 < 77 and $W2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $W2; ?> </td> <?php } else if($W2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $W2 ?> </td> <?php } ?>
				<?php if($X2 >= 87) {?> <td style="background-color:#9ACD32"> <?php echo $X2; ?> </td> <?php } else if($X2 < 87 and $X2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $X2; ?> </td> <?php } else if($X2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $X2 ?> </td> <?php } ?>
				<!------SHIFT 3------>
				<?php if($A2 >= 96)	{?> <td style="background-color:#9ACD32"> <?php echo $A2; ?> </td> <?php } else if($A2 < 96 and $A2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $A2; ?> </td> <?php } else if($A2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $A2 ?> </td> <?php } ?>
				<?php if($B2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $B2; ?> </td> <?php } else if($B2 < 96 and $B2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $B2; ?> </td> <?php } else if($B2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $B2 ?> </td> <?php } ?>
				<?php if($C2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $C2; ?> </td> <?php } else if($C2 < 96 and $C2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $C2; ?> </td> <?php } else if($C2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $C2 ?> </td> <?php } ?>
				<?php if($D2 >= 62) {?> <td style="background-color:#9ACD32"> <?php echo $D2; ?> </td> <?php } else if($D2 < 62 and $D2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $D2; ?> </td> <?php } else if($D2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $D2 ?> </td> <?php } ?>
				<?php if($E2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $E2; ?> </td> <?php } else if($E2 < 96 and $E2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $E2; ?> </td> <?php } else if($E2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $E2 ?> </td> <?php } ?>
				<?php if($F2 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $F2; ?> </td> <?php } else if($F2 < 96 and $F2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $F2; ?> </td> <?php } else if($F2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $F2 ?> </td> <?php } ?>
				<?php if($G2 >= 77) {?> <td style="background-color:#9ACD32"> <?php echo $G2; ?> </td> <?php } else if($G2 < 77 and $G2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $G2; ?> </td> <?php } else if($G2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $G2 ?> </td> <?php } ?>
				<?php if($H2 >= 87) {?> <td style="background-color:#9ACD32"> <?php echo $H2; ?> </td> <?php } else if($H2 < 87 and $H2 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $H2; ?> </td> <?php } else if($H2 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $H2 ?> </td> <?php } ?>

			</tr>
			
			<!--------SPACE------->
			<tr><td colspan="29"><br></td></tr>
			
			<!------PHOENIX------>
			<tr><td rowspan="3"><center>Phoenix</center></td></tr>
			<tr>
				<td>Target</td>
				<td>96</td><td>96</td><td>96</td><td>62</td><td>96</td><td>96</td><td>77</td><td>87</td><td rowspan="2"><center><?php echo array_sum($totalSCH1O3); ?></center></td>
				<td>96</td><td>96</td><td>96</td><td>62</td><td>96</td><td>96</td><td>77</td><td>87</td><td rowspan="2"><center><?php echo array_sum($totalSCH2O3); ?></center></td>
				<td>96</td><td>96</td><td>96</td><td>62</td><td>96</td><td>96</td><td>77</td><td>87</td><td rowspan="2"><center><?php echo array_sum($totalSCH3O3); ?></center></td>
			</tr>
			<tr>
				<td>Realizat</td>
				

				<!-------SHIFT 1----->
				<?php if($I3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $I3; ?> </td> <?php } else if($I3 < 96 and $I3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $I3; ?> </td> <?php } else if($I3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $I3 ?> </td> <?php } ?>
				<?php if($J3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $J3; ?> </td> <?php } else if($J3 < 96 and $J3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $J3; ?> </td> <?php } else if($J3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $J3 ?> </td> <?php } ?>
				<?php if($K3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $K3; ?> </td> <?php } else if($K3 < 96 and $K3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $K3; ?> </td> <?php } else if($K3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $K3 ?> </td> <?php } ?>
				<?php if($L3 >= 62) {?> <td style="background-color:#9ACD32"> <?php echo $L3; ?> </td> <?php } else if($L3 < 62 and $L3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $L3; ?> </td> <?php } else if($L3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $L3 ?> </td> <?php } ?>
				<?php if($M3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $M3; ?> </td> <?php } else if($M3 < 96 and $M3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $M3; ?> </td> <?php } else if($M3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $M3 ?> </td> <?php } ?>
				<?php if($N3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $N3; ?> </td> <?php } else if($N3 < 96 and $N3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $N3; ?> </td> <?php } else if($N3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $N3 ?> </td> <?php } ?>
				<?php if($O3 >= 77) {?> <td style="background-color:#9ACD32"> <?php echo $O3; ?> </td> <?php } else if($O3 < 77 and $O3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $O3; ?> </td> <?php } else if($O3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $O3 ?> </td> <?php } ?>
				<?php if($P3 >= 87) {?> <td style="background-color:#9ACD32"> <?php echo $P3; ?> </td> <?php } else if($P3 < 87 and $P3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $P3; ?> </td> <?php } else if($P3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $P3 ?> </td> <?php } ?>
				<!-------SHIFT 2----->
				<?php if($Q3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $Q3; ?> </td> <?php } else if($Q3 < 96 and $Q3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $Q3; ?> </td> <?php } else if($Q3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $Q3 ?> </td> <?php } ?>
				<?php if($R3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $R3; ?> </td> <?php } else if($R3 < 96 and $R3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $R3; ?> </td> <?php } else if($R3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $R3 ?> </td> <?php } ?>
				<?php if($S3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $S3; ?> </td> <?php } else if($S3 < 96 and $S3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $S3; ?> </td> <?php } else if($S3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $S3 ?> </td> <?php } ?>
				<?php if($T3 >= 62) {?> <td style="background-color:#9ACD32"> <?php echo $T3; ?> </td> <?php } else if($T3 < 62 and $T3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $T3; ?> </td> <?php } else if($T3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $T3 ?> </td> <?php } ?>
				<?php if($U3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $U3; ?> </td> <?php } else if($U3 < 96 and $U3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $U3; ?> </td> <?php } else if($U3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $U3 ?> </td> <?php } ?>
				<?php if($V3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $V3; ?> </td> <?php } else if($V3 < 96 and $V3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $V3; ?> </td> <?php } else if($V3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $V3 ?> </td> <?php } ?>
				<?php if($W3 >= 77) {?> <td style="background-color:#9ACD32"> <?php echo $W3; ?> </td> <?php } else if($W3 < 77 and $W3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $W3; ?> </td> <?php } else if($W3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $W3 ?> </td> <?php } ?>
				<?php if($X3 >= 87) {?> <td style="background-color:#9ACD32"> <?php echo $X3; ?> </td> <?php } else if($X3 < 87 and $X3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $X3; ?> </td> <?php } else if($X3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $X3 ?> </td> <?php } ?>
				<!------SHIFT 3------>
				<?php if($A3 >= 96)	{?> <td style="background-color:#9ACD32"> <?php echo $A3; ?> </td> <?php } else if($A3 < 96 and $A3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $A3; ?> </td> <?php } else if($A3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $A3 ?> </td> <?php } ?>
				<?php if($B3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $B3; ?> </td> <?php } else if($B3 < 96 and $B3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $B3; ?> </td> <?php } else if($B3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $B3 ?> </td> <?php } ?>
				<?php if($C3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $C3; ?> </td> <?php } else if($C3 < 96 and $C3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $C3; ?> </td> <?php } else if($C3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $C3 ?> </td> <?php } ?>
				<?php if($D3 >= 62) {?> <td style="background-color:#9ACD32"> <?php echo $D3; ?> </td> <?php } else if($D3 < 62 and $D3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $D3; ?> </td> <?php } else if($D3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $D3 ?> </td> <?php } ?>
				<?php if($E3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $E3; ?> </td> <?php } else if($E3 < 96 and $E3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $E3; ?> </td> <?php } else if($E3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $E3 ?> </td> <?php } ?>
				<?php if($F3 >= 96) {?> <td style="background-color:#9ACD32"> <?php echo $F3; ?> </td> <?php } else if($F3 < 96 and $F3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $F3; ?> </td> <?php } else if($F3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $F3 ?> </td> <?php } ?>
				<?php if($G3 >= 77) {?> <td style="background-color:#9ACD32"> <?php echo $G3; ?> </td> <?php } else if($G3 < 77 and $G3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $G3; ?> </td> <?php } else if($G3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $G3 ?> </td> <?php } ?>
				<?php if($H3 >= 87) {?> <td style="background-color:#9ACD32"> <?php echo $H3; ?> </td> <?php } else if($H3 < 87 and $H3 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $H3; ?> </td> <?php } else if($H3 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $H3 ?> </td> <?php } ?>
			</tr>
			<!------MORE LINES TO COME----->
			
			<!--------SPACE------->
			<tr><td colspan="29"><hr class="line"></td></tr>

<!-----------------><!------------------------------------------------------------------------------------------------------------------------------------>
			
			<!------OMNIA 1------>
			<tr><td rowspan="3"><center>Incanto</center></td></tr>
			<tr>
				<td>Target</td>
				<td>94</td><td>94</td><td>94</td><td>64</td><td>94</td><td>94</td><td>82</td><td>94</td><td rowspan="2"><center><?php echo array_sum($totalSCH1IN); ?></center></td>
				<td>94</td><td>94</td><td>94</td><td>64</td><td>94</td><td>94</td><td>82</td><td>94</td><td rowspan="2"><center><?php echo array_sum($totalSCH2IN); ?></center></td>
				<td>94</td><td>94</td><td>94</td><td>64</td><td>94</td><td>94</td><td>82</td><td>94</td><td rowspan="2"><center><?php echo array_sum($totalSCH3IN); ?></center></td>
			</tr>
			<tr>
				<td>Realizat</td>
				

				<!-------SHIFT 1----->
				<?php if($I4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $I4; ?> </td> <?php } else if($I4 < 94 and $I4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $I4; ?> </td> <?php } else if($I4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $I4 ?> </td> <?php } ?>
				<?php if($J4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $J4; ?> </td> <?php } else if($J4 < 94 and $J4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $J4; ?> </td> <?php } else if($J4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $J4 ?> </td> <?php } ?>
				<?php if($K4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $K4; ?> </td> <?php } else if($K4 < 94 and $K4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $K4; ?> </td> <?php } else if($K4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $K4 ?> </td> <?php } ?>
				<?php if($L4 >= 64) {?> <td style="background-color:#9ACD32"> <?php echo $L4; ?> </td> <?php } else if($L4 < 64 and $L4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $L4; ?> </td> <?php } else if($L4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $L4 ?> </td> <?php } ?>
				<?php if($M4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $M4; ?> </td> <?php } else if($M4 < 94 and $M4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $M4; ?> </td> <?php } else if($M4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $M4 ?> </td> <?php } ?>
				<?php if($N4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $N4; ?> </td> <?php } else if($N4 < 94 and $N4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $N4; ?> </td> <?php } else if($N4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $N4 ?> </td> <?php } ?>
				<?php if($O4 >= 82) {?> <td style="background-color:#9ACD32"> <?php echo $O4; ?> </td> <?php } else if($O4 < 82 and $O4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $O4; ?> </td> <?php } else if($O4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $O4 ?> </td> <?php } ?>
				<?php if($P4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $P4; ?> </td> <?php } else if($P4 < 94 and $P4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $P4; ?> </td> <?php } else if($P4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $P4 ?> </td> <?php } ?>
				
				<!-------SHIFT 2----->
				<?php if($Q4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $Q4; ?> </td> <?php } else if($Q4 < 94 and $Q4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $Q4; ?> </td> <?php } else if($Q4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $Q4 ?> </td> <?php } ?>
				<?php if($R4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $R4; ?> </td> <?php } else if($R4 < 94 and $R4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $R4; ?> </td> <?php } else if($R4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $R4 ?> </td> <?php } ?>
				<?php if($S4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $S4; ?> </td> <?php } else if($S4 < 94 and $S4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $S4; ?> </td> <?php } else if($S4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $S4 ?> </td> <?php } ?>
				<?php if($T4 >= 64) {?> <td style="background-color:#9ACD32"> <?php echo $T4; ?> </td> <?php } else if($T4 < 64 and $T4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $T4; ?> </td> <?php } else if($T4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $T4 ?> </td> <?php } ?>
				<?php if($U4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $U4; ?> </td> <?php } else if($U4 < 94 and $U4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $U4; ?> </td> <?php } else if($U4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $U4 ?> </td> <?php } ?>
				<?php if($V4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $V4; ?> </td> <?php } else if($V4 < 94 and $V4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $V4; ?> </td> <?php } else if($V4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $V4 ?> </td> <?php } ?>
				<?php if($W4 >= 82) {?> <td style="background-color:#9ACD32"> <?php echo $W4; ?> </td> <?php } else if($W4 < 82 and $W4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $W4; ?> </td> <?php } else if($W4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $W4 ?> </td> <?php } ?>
				<?php if($X4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $X4; ?> </td> <?php } else if($X4 < 94 and $X4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $X4; ?> </td> <?php } else if($X4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $X4 ?> </td> <?php } ?>
				
				<!------SHIFT 3------>
				<?php if($A4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $A4; ?> </td> <?php } else if($A4 < 94 and $A4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $A4; ?> </td> <?php } else if($A4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $A4 ?> </td> <?php } ?>
				<?php if($B4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $B4; ?> </td> <?php } else if($B4 < 94 and $B4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $B4; ?> </td> <?php } else if($B4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $B4 ?> </td> <?php } ?>
				<?php if($C4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $C4; ?> </td> <?php } else if($C4 < 94 and $C4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $C4; ?> </td> <?php } else if($C4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $C4 ?> </td> <?php } ?>
				<?php if($D4 >= 64) {?> <td style="background-color:#9ACD32"> <?php echo $D4; ?> </td> <?php } else if($D4 < 64 and $D4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $D4; ?> </td> <?php } else if($D4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $D4 ?> </td> <?php } ?>
				<?php if($E4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $E4; ?> </td> <?php } else if($E4 < 94 and $E4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $E4; ?> </td> <?php } else if($E4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $E4 ?> </td> <?php } ?>
				<?php if($F4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $F4; ?> </td> <?php } else if($F4 < 94 and $F4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $F4; ?> </td> <?php } else if($F4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $F4 ?> </td> <?php } ?>
				<?php if($G4 >= 82) {?> <td style="background-color:#9ACD32"> <?php echo $G4; ?> </td> <?php } else if($G4 < 82 and $G4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $G4; ?> </td> <?php } else if($G4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $G4 ?> </td> <?php } ?>
				<?php if($H4 >= 94) {?> <td style="background-color:#9ACD32"> <?php echo $H4; ?> </td> <?php } else if($H4 < 94 and $H4 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $H4; ?> </td> <?php } else if($H4 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $H4 ?> </td> <?php } ?>
				
			</tr>
			
				<!--------SPACE------->
			<tr><td colspan="29"><br></td></tr>
			
			<!------OMNIA 1------>
			<tr><td rowspan="3"><center>Minuto</center></td></tr>
			<tr>
				<td>Target</td>
				<td>36</td><td>36</td><td>36</td><td>24</td><td>36</td><td>36</td><td>31</td><td>35</td><td rowspan="2"><center><?php echo array_sum($totalSCH1MI); ?></center></td>
				<td>36</td><td>36</td><td>36</td><td>24</td><td>36</td><td>36</td><td>31</td><td>35</td><td rowspan="2"><center><?php echo array_sum($totalSCH2MI); ?></center></td>
				<td>36</td><td>36</td><td>36</td><td>24</td><td>36</td><td>36</td><td>31</td><td>35</td><td rowspan="2"><center><?php echo array_sum($totalSCH3MI); ?></center></td>
			</tr>
			<tr>
				<td>Realizat</td>
				

				<!-------SHIFT 1----->
				<?php if($I5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $I5; ?> </td> <?php } else if($I5 < 36 and $I5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $I5; ?> </td> <?php } else if($I5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $I5 ?> </td> <?php } ?>
				<?php if($J5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $J5; ?> </td> <?php } else if($J5 < 36 and $J5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $J5; ?> </td> <?php } else if($J5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $J5 ?> </td> <?php } ?>
				<?php if($K5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $K5; ?> </td> <?php } else if($K5 < 36 and $K5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $K5; ?> </td> <?php } else if($K5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $K5 ?> </td> <?php } ?>
				<?php if($L5 >= 24) {?> <td style="background-color:#9ACD32"> <?php echo $L5; ?> </td> <?php } else if($L5 < 24 and $L5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $L5; ?> </td> <?php } else if($L5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $L5 ?> </td> <?php } ?>
				<?php if($M5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $M5; ?> </td> <?php } else if($M5 < 36 and $M5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $M5; ?> </td> <?php } else if($M5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $M5 ?> </td> <?php } ?>
				<?php if($N5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $N5; ?> </td> <?php } else if($N5 < 36 and $N5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $N5; ?> </td> <?php } else if($N5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $N5 ?> </td> <?php } ?>
				<?php if($O5 >= 31) {?> <td style="background-color:#9ACD32"> <?php echo $O5; ?> </td> <?php } else if($O5 < 31 and $O5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $O5; ?> </td> <?php } else if($O5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $O5 ?> </td> <?php } ?>
				<?php if($P5 >= 35) {?> <td style="background-color:#9ACD32"> <?php echo $P5; ?> </td> <?php } else if($P5 < 35 and $P5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $P5; ?> </td> <?php } else if($P5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $P5 ?> </td> <?php } ?>
				
				<!-------SHIFT 2----->
				<?php if($Q5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $Q5; ?> </td> <?php } else if($Q5 < 36 and $Q5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $Q5; ?> </td> <?php } else if($Q5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $Q5 ?> </td> <?php } ?>
				<?php if($R5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $R5; ?> </td> <?php } else if($R5 < 36 and $R5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $R5; ?> </td> <?php } else if($R5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $R5 ?> </td> <?php } ?>
				<?php if($S5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $S5; ?> </td> <?php } else if($S5 < 36 and $S5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $S5; ?> </td> <?php } else if($S5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $S5 ?> </td> <?php } ?>
				<?php if($T5 >= 24) {?> <td style="background-color:#9ACD32"> <?php echo $T5; ?> </td> <?php } else if($T5 < 24 and $T5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $T5; ?> </td> <?php } else if($T5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $T5 ?> </td> <?php } ?>
				<?php if($U5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $U5; ?> </td> <?php } else if($U5 < 36 and $U5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $U5; ?> </td> <?php } else if($U5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $U5 ?> </td> <?php } ?>
				<?php if($V5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $V5; ?> </td> <?php } else if($V5 < 36 and $V5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $V5; ?> </td> <?php } else if($V5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $V5 ?> </td> <?php } ?>
				<?php if($W5 >= 31) {?> <td style="background-color:#9ACD32"> <?php echo $W5; ?> </td> <?php } else if($W5 < 31 and $W5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $W5; ?> </td> <?php } else if($W5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $W5 ?> </td> <?php } ?>
				<?php if($X5 >= 35) {?> <td style="background-color:#9ACD32"> <?php echo $X5; ?> </td> <?php } else if($X5 < 35 and $X5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $X5; ?> </td> <?php } else if($X5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $X5 ?> </td> <?php } ?>
			
				<!------SHIFT 3------>
				<?php if($A5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $A5; ?> </td> <?php } else if($A5 < 36 and $A5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $A5; ?> </td> <?php } else if($A5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $A5 ?> </td> <?php } ?>
				<?php if($B5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $B5; ?> </td> <?php } else if($B5 < 36 and $B5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $B5; ?> </td> <?php } else if($B5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $B5 ?> </td> <?php } ?>
				<?php if($C5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $C5; ?> </td> <?php } else if($C5 < 36 and $C5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $C5; ?> </td> <?php } else if($C5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $C5 ?> </td> <?php } ?>
				<?php if($D5 >= 24) {?> <td style="background-color:#9ACD32"> <?php echo $D5; ?> </td> <?php } else if($D5 < 24 and $D5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $D5; ?> </td> <?php } else if($D5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $D5 ?> </td> <?php } ?>
				<?php if($E5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $E5; ?> </td> <?php } else if($E5 < 36 and $E5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $E5; ?> </td> <?php } else if($E5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $E5 ?> </td> <?php } ?>
				<?php if($F5 >= 36) {?> <td style="background-color:#9ACD32"> <?php echo $F5; ?> </td> <?php } else if($F5 < 36 and $F5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $F5; ?> </td> <?php } else if($F5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $F5 ?> </td> <?php } ?>
				<?php if($G5 >= 31) {?> <td style="background-color:#9ACD32"> <?php echo $G5; ?> </td> <?php } else if($G5 < 31 and $G5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $G5; ?> </td> <?php } else if($G5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $G5 ?> </td> <?php } ?>
				<?php if($H5 >= 35) {?> <td style="background-color:#9ACD32"> <?php echo $H5; ?> </td> <?php } else if($H5 < 35 and $H5 > 0) 	{ ?> <td style="background-color:#FF0000"> <?php echo $H5; ?> </td> <?php } else if($H5 == 0) { ?> <td style="background-color:$FFFFFF"> <?php echo $H5 ?> </td> <?php } ?>
				
			</tr>
			
			
		</div>
	</body>
</html>