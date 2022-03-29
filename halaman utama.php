<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color: #d7e3fc;
		}
	</style>
	<title>SISTEM PENGIRAAN BMI</title>
	<script type="text/javascript">
		function kiraBMI(){
			var tinggi = number(document.getElementById('tinggi').value);
			var berat = number(document.getElementById('berat').value);

            var BMI = ((berat)/(tinggi*tinggi));

            var keputusan;

            if (BMI < 18.5) {

            	keputusan = "KURUS";


            }else if (BMI>= 18.5 && BMI <= 24.9) {

            	keputusan = "NORMAL";


            }else if (BMI >= 25&& BMI <= 29.9){

            	keputusan = "GEMUK";
            }
		}else{


		 keputusan = "OBESITI";

		}


		{

			document.getElementById("result1").innerHTML = BMI.toFixed(2);
			document.getElementById("result2").innerHTML = keputusan;
	
           }

           function padam(){
           	document.getElementById("result1").innerHTML = "-";
           	document.getElementById("result1").innerHTML = "-";
           	   result4.style.backgroundcolor = "white";
           	   result4.style.color = "black";
           	}

           
	</script>
</head>
<body>
<div>
	<form>
		<h1>SISTEM PENGIRAAN BMI</h1>
		<br>
		<table> Sila masukkan berat anda (kg) :
              <input type="text" name="berat" id="berat">
		</table>
		<table> Sila masukkan tinggi anda (m) :
              <input type="text" name="tinggi" id="tinggi">
		</table>
		<p>
			<input type="button" value="kira" onclick="kiraBMI()">
			<input type="reset" value="RESET"  onclick="padam()">
		</p>
	</form>
</div>
<h2>BMI anda adalah : </h2>
<table border="1"   cellspacing="0" cellpadding="10">

	<tr>
		<th>BMI
		<th>Keputusan
		</tr>
		<tr align="center">
			<td id="result1">-
			<td id="result2">-
			</tr>
		</td>
	</table>
</body>
</html>