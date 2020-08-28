<html>
  <head>
	<?php
	$servername = "161.84.15.7";
	$username = "CMND";
	$password = "cmnd";
	$dbname = "PRODUCTIONTRACER";
	$port = "1433";
	$data =date("Ymd");
	
	$connectioninfo = array ( "Database"=>"PRODUCTIONTRACER", "UID"=>"CMND", "PWD"=>"cmnd");
		
		$conn = sqlsrv_connect($servername, $connectioninfo);
		
		if( $conn === false ) {
			die( print_r( sqlsrv_errors(), true));
		} else {
			//print "Good DB Connection: $conn<br>";
		}
	
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

		if ($I1 == NULL) {$I = FALSE; } else {$I = "$I1";};
		if ($J1 == NULL) {$J = ' '; } else {$J = "$J1";};
		if ($K1 == NULL) {$K = ' '; } else {$K = "$K1";};
		if ($L1 == NULL) {$L = ' '; } else {$L = "$L1";};
		if ($M1 == NULL) {$M = ' '; } else {$M = "$M1";};
		if ($N1 == NULL) {$N = ' '; } else {$N = "$N1";};
		if ($O1 == NULL) {$O = ' '; } else {$O = "$O1";};
		if ($P1 == NULL) {$P = ' '; } else {$P = "$P1";};
//---------------------SHIFT 1  Omnia 1---------------------		
		if ($Q1 == NULL) {$Q = ' '; } else {$Q = "$Q1";};
		if ($R1 == NULL) {$R = ' '; } else {$R = "$R1";};
		if ($S1 == NULL) {$S = ' '; } else {$S = "$S1";};
		if ($T1 == NULL) {$T = ' '; } else {$T = "$T1";};
		if ($U1 == NULL) {$U = ' '; } else {$U = "$U1";};
		if ($V1 == NULL) {$V = ' '; } else {$V = "$V1";};
		if ($W1 == NULL) {$W = ' '; } else {$W = "$W1";};
		if ($X1 == NULL) {$X = ' '; } else {$X = "$X1";};
//---------------------SHIFT 2 Omnia 1---------------------
		if ($A1 == NULL) {$A = ' '; } else {$A = "$A1";};
		if ($B1 == NULL) {$B = ' '; } else {$B = "$B1";};
		if ($C1 == NULL) {$C = ' '; } else {$C = "$C1";};
		if ($D1 == NULL) {$D = ' '; } else {$D = "$D1";};
		if ($E1 == NULL) {$E = ' '; } else {$E = "$E1";};
		if ($F1 == NULL) {$F = ' '; } else {$F = "$F1";};
		if ($G1 == NULL) {$G = ' '; } else {$G = "$G1";};
		if ($H1 == NULL) {$H = ' '; } else {$H = "$H1";};
//---------------------SHIFT 3 Omnia 1---------------------
	
	$schimbul1 = array($I, $J, $K, $L, $M, $N, $O, $P);
	$schimbul2 = array($Q, $R, $S, $T, $U, $V, $W, $X);
	$schimbul3 = array($A, $B, $C, $D, $E, $F, $G, $H);
	
	$time = date('H');
	
	if ($time > 7 && $time < 15) {
		$a = array_filter($schimbul1);
		$schimbul1fara0 = 0;
		foreach($schimbul1 as $schimbul1faraZero){
			if ($schimbul1faraZero != 0)
			{
				$schimbul1fara0++;
			}
		}
		$average = array_sum($schimbul1)/$schimbul1fara0;
	echo $average;
	} else if ($time > 15 && $time < 23) {
		$a = array_filter($schimbul2);
		$schimbul2fara0 = 0;
		foreach($schimbul2 as $schimbul2faraZero){
			if ($schimbul2faraZero != 0)
			{
				$schimbul2fara0++;
			}
		}
		$average = array_sum($schimbul2)/$schimbul2fara0;
	} else if ($time = 23 OR $time < 7) {
		$a = array_filter($schimbul1);
		$average = array_sum($schimbul3)/count($schimbul3);
	}
	
	$a2 = array_filter($schimbul1);
	$average2 = array_sum($schimbul1)/count($schimbul1);
	
	$a3 = array_filter($schimbul2);
	$average3 = array_sum($schimbul2)/count($schimbul2);
	
	$a4 = array_filter($schimbul1);
	$average4 = array_sum($schimbul3)/count($schimbul3);
	
	//echo $average2;
	//echo $average3;
	//echo $average4;
	
	
	
	//$aaaa = count(array_filter($schimbul2));
	//echo $schimbul2fara0;
	
	$num = round($average) * 8;
	
	?>
   <script type="text/javascript" src="../loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);
		
      function drawChart() {
		var num = <?php echo $num ?>;
		
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Omnia 1', num],
        ]);

        var options = {
          width: 800, height: 240,
		  max: 1000,
          redFrom: 0, redTo: 700,
          greenFrom:700, greenTo: 1000,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
		
        chart.draw(data, options);
		
		
      }
    </script>
  </head>
  <body>
  
    <div id="chart_div" style="width: 400px; height: 120px;"></div>
  </body>
</html>