<!DOCTYPE html>
<html>
	<head>
		<title>Philips Line Overview</title>
		<style>

		</style>
	</head>
	<body>
	
		<?php
		$servername = "localhost";
		$username = "rares";
		$password = "123";
		$dbname = "TV";
		$port = "3308";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname, $port);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT id, data, time FROM overview";
		$result = $conn->query($sql);
		$linea = array();
		
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			$linea[] = $row["id"];
		  }
		} else {
		  echo "0 results";
		}
		
		$A = count($linea);
		$B = 192;
		$C = 282;
		$D = 348;
		$E = 443;
		$F = 536;
		$G = 615;
		$H = 700;
//---------------------SHIFT 3---------------------
		$I = 20;
		$J = 192;
		$K = 282;
		$L = 348;
		$M = 443;
		$N = 536;
		$O = 615;
		$P = 700;
//---------------------SHIFT 1---------------------		
		$Q = 2;
		$R = 192;
		$S = 282;
		$T = 348;
		$U = 443;
		$V = 536;
		$W = 615;
		$X = 700;
//---------------------SHIFT 2---------------------
	?>
	
	
		<center><H1>Philips Line Overview</H1></center>
		<br>
		<div class="names">
			<center>
			<table border="1">
			
			<!------SCIMBURI------>
			<tr><td>Linia</td><td>Detalii</td><td colspan="8">Schimbul 3</td><td colspan="8">Schimbul 1</td><td colspan="8">Schimbul 2</td></tr>
			
			<!------ORE------>
			<tr><td colspan="2">Ore</td><td>23-00</td><td>00-01</td><td>01-02</td><td>02-03</td><td>03-04</td><td>04-05</td><td>05-06</td><td>06-07</td><td>07-08</td><td>08-09</td><td>09-10</td><td>10-11</td><td>11-12</td><td>12-13</td><td>13-14</td><td>14-15</td><td>15-16</td><td>16-17</td><td>17-18</td><td>18-19</td><td>19-20</td><td>20-21</td><td>21-22</td><td>22-23</td></tr>
			
			<!-------SPACE------>
			<tr><td colspan="26"><br></td></tr>
			
			<!------OMNIA 1------>
			<tr><td rowspan="3">Omnia 1</td></tr>
			<tr><td>Target</td><td>95</td><td>190</td><td>285</td><td>347</td><td>442</td><td>537</td><td>614</td><td>700</td><td>95</td><td>190</td><td>285</td><td>347</td><td>442</td><td>537</td><td>614</td><td>700</td><td>95</td><td>190</td><td>285</td><td>347</td><td>442</td><td>537</td><td>614</td><td>700</td></tr>
			<tr>
				<td>Realizat</td>
				
				<!------SHIFT 3------>
				<?php if($A >= 95) 	{?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($A < 95) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($B >= 190) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($B < 190) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($C >= 285) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($C < 285) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($D >= 347) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($D < 347) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($E >= 442) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($E < 442) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($F >= 537) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($F < 537) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($G >= 614) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($G < 614) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($H >= 700) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($H < 700) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<!-------SHIFT 1----->
				<?php if($I >= 95) 	{?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($I < 95) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($J >= 190) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($J < 190) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($K >= 285) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($K < 285) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($L >= 347) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($L < 347) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($M >= 442) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($M < 442) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($N >= 537) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($N < 537) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($O >= 614) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($O < 614) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($P >= 700) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($P < 700) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?>
				<!-------SHIFT 2----->
				<?php if($Q >= 95) 	{?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($Q < 95) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($R >= 190) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($R < 190) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($S >= 285) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($S < 285) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($T >= 347) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($T < 347) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($U >= 442) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($U < 442) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($V >= 537) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($V < 537) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($W >= 614) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($W < 614) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($X >= 700) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($X < 700) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?>
			</tr>
			
			<!--------SPACE------->
			<tr><td colspan="26"><br></td></tr>
			
			<!--------OMNIA 2------->
			<tr><td rowspan="3">Omnia 2</td></tr>
			<tr><td>Target</td><td>95</td><td>190</td><td>285</td><td>347</td><td>442</td><td>537</td><td>614</td><td>700</td><td>95</td><td>190</td><td>285</td><td>347</td><td>442</td><td>537</td><td>614</td><td>700</td><td>95</td><td>190</td><td>285</td><td>347</td><td>442</td><td>537</td><td>614</td><td>700</td></tr>
			
			<tr>
				<td>Realizat</td>
				<!-----SHIFT 3------>
				<?php if($A >= 95) 	{?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($A < 95) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($B >= 190) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($B < 190) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($C >= 285) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($C < 285) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($D >= 347) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($D < 347) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($E >= 442) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($E < 442) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($F >= 537) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($F < 537) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($G >= 614) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($G < 614) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($H >= 700) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($H < 700) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<!------SHIFT 1------>
				<?php if($I >= 95) 	{?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($I < 95) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($J >= 190) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($J < 190) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($K >= 285) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($K < 285) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($L >= 347) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($L < 347) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($M >= 442) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($M < 442) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($N >= 537) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($N < 537) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($O >= 614) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($O < 614) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($P >= 700) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($P < 700) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?>
				<!------SHIFT 2------>
				<?php if($Q >= 95) 	{?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($Q < 95) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($R >= 190) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($R < 190) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($S >= 285) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($S < 285) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($T >= 347) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($T < 347) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($U >= 442) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($U < 442) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($V >= 537) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($V < 537) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($W >= 614) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($W < 614) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?> 
				<?php if($X >= 700) {?> <td style="background-color:#9ACD32"> <?php echo $A; ?> </td> <?php } else if($X < 700) { ?> <td style="background-color:#FF0000"> <?php echo $A; ?> </td> <?php } ?>
			</tr>
			
			<!------MORE LINES TO COME----->

			
			
			</table>
			</center>
		</div>
	</body>
</html>