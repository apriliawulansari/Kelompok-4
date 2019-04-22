<html>
	<head>
		<title> Tugas 4 </title>
		<link rel="stylesheet" href="style.css">
		
	</head>
<body>
	<center>
		<div id= box>
			<h3> Menghitung Berat Badan Ideal</h3><hr color=  "pink" width = 300px>
			<br>
		<form action= "" method ="get" >
			
				<label >Tinggi : </label>
				<input type="text" name= "tinggi_badan" placeholder="masukan tinggi anda">
				<br><br>
				<input type = "radio" name = "jk" value ="L" >Laki-laki
				<input type = "radio" name = "jk" value ="P" >Perempuan
				<br><br>
				<input type = "submit" name = "simpan" value = "hitung">
				
				

		</form>
		<?php
		if(isset($_GET['simpan'])){
			$tinggi_badan =$_GET['tinggi_badan'];
			$jenis_kelamin =$_GET['jk'];

			if($jenis_kelamin == "L"){
					$jumlah = ($tinggi_badan-100)-(($tinggi_badan-100)*0.10);

			}
		else {
					$jumlah = ($tinggi_badan-100)-(($tinggi_badan-100)*0.15);
			}
 			echo "Berat ideal anda adalah ".$jumlah." kg";

		}
		

?>
	</div>
</center>
</body>
</html>