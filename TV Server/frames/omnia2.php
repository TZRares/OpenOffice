
<!DOCTYPE html>
<html>
	<head>
		<style>
			.Table{
			margin-left: 30px;
			}
			table, th, td {
			  border: 1px solid black;
			  border-collapse: collapse;
			}
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
		$I = 2;
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

		<div class="Table">
			<table border="1">
				<tr><td rowspan="10"><br>S <br>C <br>H <br>I <br>M <br>B <br>U <br>L <br><br><b>3</b></td></tr>
				<tr><td>ORA</td><td>PLAN</td>  <td>ACTUAL</td><td>STATUS</td></tr>
				<!----------------------------------------------------------------SHIFT 3----------------------------------------------------------->
				
				<tr><td>23-00</td><td>95</td>  <td><?php echo $A; ?></td><?php if($A >= 95) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($A < 95) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>00-01</td><td>190</td> <td><?php echo $B; ?></td><?php if($B >= 190) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($B < 190) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>01-02</td><td>285</td> <td><?php echo $C; ?></td><?php if($C >= 285) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($C < 285) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>02-03</td><td>347</td> <td><?php echo $D; ?></td><?php if($D >= 347) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($D < 347) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>03-04</td><td>442</td> <td><?php echo $E; ?></td><?php if($E >= 442) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($E < 442) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>04-05</td><td>537</td> <td><?php echo $F; ?></td><?php if($F >= 537) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($F < 537) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>05-06</td><td>614</td> <td><?php echo $G; ?></td><?php if($G >= 614) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($G < 614) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>06-07</td><td>700</td> <td><?php echo $H; ?></td><?php if($H >= 700) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($H < 700) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
			</table>
			<br>
			<table border="1">
				<tr><td rowspan="10"><br>S <br>C <br>H <br>I <br>M <br>B <br>U <br>L <br><br><b>1</b></td></tr>
				<tr><td>ORA</td><td>PLAN</td>  <td>ACTUAL</td><td>STATUS</td></tr>
				<!----------------------------------------------------------------SHIFT 1----------------------------------------------------------->
				
				<tr><td>07-08</td><td>95</td>  <td><?php echo $I; ?></td><?php if($I >= 95) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($I < 95) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>08-09</td><td>190</td> <td><?php echo $J; ?></td><?php if($J >= 190) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($J < 190) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>09-10</td><td>285</td> <td><?php echo $K; ?></td><?php if($K >= 285) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($K < 285) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>10-11</td><td>347</td> <td><?php echo $L; ?></td><?php if($L >= 347) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($L < 347) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>11-12</td><td>442</td> <td><?php echo $M; ?></td><?php if($M >= 442) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($M < 442) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>12-13</td><td>537</td> <td><?php echo $N; ?></td><?php if($N >= 537) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($N < 537) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>13-14</td><td>614</td> <td><?php echo $O; ?></td><?php if($O >= 614) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($O < 614) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>14-15</td><td>700</td> <td><?php echo $P; ?></td><?php if($P >= 700) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($P < 700) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
			</table>
			<br>
			<table border="1">
				<tr><td rowspan="10"><br>S <br>C <br>H <br>I <br>M <br>B <br>U <br>L <br><br><b>2</b></td></tr>
				<tr><td>ORA</td><td>PLAN</td>  <td>ACTUAL</td><td>STATUS</td></tr>
				<!----------------------------------------------------------------SHIFT 2----------------------------------------------------------->
				
				<tr><td>15-16</td><td>95</td>  <td><?php echo $Q; ?></td><?php if($Q >= 95) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($Q < 95) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>16-17</td><td>190</td> <td><?php echo $R; ?></td><?php if($R >= 190) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($R < 190) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>17-18</td><td>285</td> <td><?php echo $S; ?></td><?php if($S >= 285) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($S < 285) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>18-19</td><td>347</td> <td><?php echo $T; ?></td><?php if($T >= 347) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($T < 347) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>19-20</td><td>442</td> <td><?php echo $U; ?></td><?php if($U >= 442) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($U < 442) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>20-21</td><td>537</td> <td><?php echo $V; ?></td><?php if($V >= 537) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($V < 537) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>21-22</td><td>614</td> <td><?php echo $W; ?></td><?php if($W >= 614) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($W < 614) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
				<tr><td>22-23</td><td>700</td> <td><?php echo $X; ?></td><?php if($X >= 700) {?> <td style="background-color:#9ACD32"> </td> <?php } else if($X < 700) { ?> <td style="background-color:#FF0000"> </td> <?php } ?> </tr>
			</table>
		</div>
	</body>
</html>