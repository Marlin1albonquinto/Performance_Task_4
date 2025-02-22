<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PUBLIC LIBRARY EXPANSION PROJECT</title>
</head>
<body bgcolor="pink">

	<?php 

	   //function of Lumber//


			   function totalone($num1, $num2) {
				$sum = $num1 * $num2 + $num1;
				return $sum;
				}

				$result1 = totalone(150000, .10, 150000);


				function totaltwo($num4, $num3) {
				$sum1 = $num4 * $num3 + $num4;
				return $sum1;
				}

				$result2 = totalone(150000, .15, 150000);



				function totalthree ($num5, $num6) {
				$sum2 = $num5 * $num6 + $num5;
				return $sum2;
            }

				$result3 = totalthree (150000, .20, 150000);


		//Function of Concrete


				function totalfour($num7, $num8) {
				$sum3 = $num7 * $num8 + $num7;
				return $sum3;
				}

				$result4 = totalfour(78000, .10, 78000);


				function totalfive($num9, $num10) {
				$sum4 = $num9 * $num10 + $num9;
				return $sum4;
				}

				$result5 = totalfive(78000, .15, 78000);


				function totalsix($num11, $num12) {
				$sum5 = $num11 * $num12 + $num11;
				return $sum5;
				}

				$result6 = totalsix(78000, .20, 78000);

		//Function of Drywall


				function totalseven($num13, $num14) {
				$sum6 = $num13 * $num14 + $num13;
				return $sum6;
				}

				$result7 = totalseven(69000, .10, 69000);


				function totaleight($num13, $num14) {
				$sum7 = $num13 * $num14 + $num13;
				return $sum7;
				}

				$result8 = totaleight(69000, .15, 69000);


				function totalnine($num15, $num16) {
				$sum8 = $num15 * $num16 + $num15;
				return $sum8;
				}

				$result9 = totalnine(69000, .20, 69000);



		//Function of Paint//

				function totalten($num17, $num18) {
				$sum9 = $num17 * $num18 + $num17;
				return $sum9;
				}

				$result10 = totalten(12000, .10, 12000);


				function totaltwelve($num21, $num22) {
				$sum11 = $num21 * $num22 + $num21;
				return $sum11;
				}

				$result11 = totaltwelve(12000, .15, 12000);



				function totalthirteen($num23, $num24) {

				$sum12 = $num23 * $num24 + $num23;
				return $sum12;
				}

				$result12 = totalthirteen(12000, .20, 12000);

		//Function of Miscellaneous//

				function totalfourteen($num25, $num26) {
				$sum13 = $num25 * $num26 + $num25;
				return $sum13;
				}

				$result13 = totalfourteen(20000, .10, 20000);


				function totalfifteen($num27, $num28) {
				$sum14 = $num27 * $num28 + $num27;
				return $sum14;
				}

				$result14 = totalfifteen(20000, .15, 20000);

				function totalsixteen($num29, $num30) {
				$sum15 = $num29 * $num30 + $num29;
				return $sum15;
				}

				$result15 = totalsixteen(20000, .20, 20000);


		//TOTAL EXPENDITURES//															
				function totalexpenditures($num31, $num32, $num33, $num34, $num35) {
				$sumtotal = $num31 + $num32 + $num33 + $num34 +$num35;
				return $sumtotal;
				}

				$resulttotal = totalexpenditures(150000, 78000, 69000, 12000, 20000);



				function totalexpenditures1($num36, $num37, $num38, $num39, $num40) {
				$sumtotal1 = $num36 + $num37 + $num38 + $num39 + $num40;
				return $sumtotal1;
				}

				$resulttotal2 = totalexpenditures1(165000, 85800, 75900, 13800, 22000);


				function totalexpenditures2($num41, $num42, $num43, $num44, $num45) {
				$sumtotal2 = $num41 + $num42 + $num43 + $num44 + $num45;
				return $sumtotal2;
				}

				$resulttotal3 = totalexpenditures2(172500, 89700, 79350, 13800, 23000);


				function totalexpenditures3($num46, $num47, $num48, $num49, $num50) {
				$sumtotal3 = $num46 + $num47 + $num48 + $num49 + $num50;
				return $sumtotal3;
				}

				$resulttotal4 = totalexpenditures3(180000, 93600,  82800, 14400, 24000);										

		 ?>
      
     <div style="display: flex; justify-content: center; align-items: center; height: 500px; padding: 10px; border: 10px solid #4CAF50; margin-top: 50px; text-align: center; background-color: #f2f2f2;">
     <div>
        <h1 style="font-family: Arial, sans-serif; color: #4CAF50;">Public Library Expansion Project</h1>
        <h2 style="font-family: Arial, sans-serif; color: #EB3528;">Cost Estimates</h2>

        <br>

        <br>
			<table border="2" width="800">
					<tr style="background-color:yellow;">
					<th style="color:#0F52BA">Expenditures</th>
					<th style="color:#0F52BA">Estimated Cost</th>
					<th style="color:#0F52BA">10% Increase</th>
					<th style="color:#0F52BA">15% Increase</th>
					<th style="color:#0F52BA">20% Increase</th>
			</tr>							

			<tr style="background-color:greenyellow;" align="center">
					<td>Lumber</td>
					<td>$ 150,000.00</td>
					<td style="color:#6C3483"> $ <?php echo number_format($result1, 2) ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format($result2, 2) ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format($result3, 2) ?></td>
			</tr>

			<tr style="background-color:hotpink;" align="center">
					<td>Concrete</td>
					<td>$ 78,000.00</td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result4, 2)  ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result5, 2)  ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result6, 2)  ?></td>
												</tr>

			<tr style="background-color:#A8867F" align="center">
					<td>Drywall</td>
					<td>$ 69,000.00</td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result7, 2)  ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result8, 2)  ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result9, 2)  ?></td>
			</tr>				
								
         <tr style="background-color:#CAAA47" align="center">
					<td>Paint</td>
					<td>$ 12,000.00</td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result10, 2)  ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result11, 2)  ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result12, 2)  ?></td>
			</tr>

			<tr style="background-color:#8DD97A" align="center">
					<td>Miscellaneous</td>
					<td>$ 20,000.00</td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result13, 2)  ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result14, 2)  ?></td>
					<td style="color:#6C3483"> $ <?php echo number_format ($result15, 2)  ?></td>
			</tr>	
			</table>					

	   	<br>
			<table align="center" style="font-family:sans-serif;" width="75%">

			<tr>
					<h3><td>Total Expenditures:</td></h3>
					<th style="color: #D36FCB">$ <?php echo number_format ($resulttotal, 2)  ?></td></th>
					<th style="color: #D36FCB">$ <?php echo number_format ($resulttotal2, 2)  ?></th>
					<th style="color: #D36FCB">$ <?php echo number_format ($resulttotal3, 2)  ?></th>
					<th style="color: #D36FCB">$ <?php echo number_format ($resulttotal4, 2)  ?></th>
					</tr>
			</table>
		<br>
		<br>
		<tr>								
								  <td align="right" colspan="5"><b style="color: green;"> Created by: MarlinII A.Quinto</b></td>
	  	</div>


</body>
</html>