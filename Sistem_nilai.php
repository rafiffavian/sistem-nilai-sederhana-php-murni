<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistem Nilai</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/materialize.css"  media="screen,projection"/>
     <style type="text/css">
     	.coba:hover {
     			background: #d84315;
     			padding: 20px;
     	}
     	.cobi:hover{
     		background: #d84315;
     		padding: 20px;
     	}
     	.cobu:hover{
     		background: #d84315;
     		padding: 20px;
     	}
     	.coba{
     		background: #ffab91;
     	}
     	.cobi{
     		background: #ffab91;
     	}
     	.cobu{
     		background: #ffab91;
     	}
     	.lala{
     		background: #fff176;
     	}
     	body{
     		background: linear-gradient(45deg,  rgba(66, 183, 245,0.8) 0%,rgba(66, 245, 189,0.4) 100%);}
     </style>

</head>
<body background="latihan/background123.jpg">
	<div class="container-fluid">
		<div class="row">	
			<div class="col-sm-3">
			</div>	
			<div class="col-sm-6">
				<h1 align="center" style="font-family: Bernard MT Condensed">Sistem Nilai</h1>
				<?php 
					$namask="SMAN 51";
					$wilayah="JAKARTA TIMUR";
					$kelas="12 (TINGKAT AKHIR)";
				 ?>
				<table class="table table-contextual" border="4px" style="margin-right: 50px">
					<tr>				
						<td class="success">NAMA SEKOLAH</td>
						<td class="success"><?php echo $namask ?></td>
					</tr>
					<tr>  
					    <td class="danger">WILAYAH</td>
					    <td class="danger"><?php echo $wilayah ?></td>
					</tr>
					<tr>  
						<td class="info">KELAS</td>
						<td class="info"><?php echo $kelas ?></td>
					</tr>  
							
				</table>
			</div>
		</div>	<br><br><br>
		<div class="row">
			<div class="col-sm-3 col-sm-offset-2">
				<h1 align="center" style="font-family: Bernard MT Condensed">Nilai</h1><br>
				<form method="post" action="">
					<div class="highlight">
						<div class="input-group">
						  <input type="text" name="nama" class="form-control lala" placeholder="Nama">
						  <span class="input-group-addon">Wajib Diisi</span>
						</div><br>
						<div class="form-group has-warning">	
							<select name="matpel" class="form-control" style="background: #fff176" required="">
								<option>--Mata Pelajaran--</option>
								<option value="Matematika">Matematika</option>
								<option value="fisika">Fisika</option>
								<option value="Kimia">Kimia</option>
								<option value="BahasaInggris">Bahasa Inggris</option>
								<option value="Bahasa Arab">Bahasa Arab</option>
							</select>
						</div>	<br>
						<div class="form-group has-error">
							<input type="number" name="tugas" class="form-control coba" placeholder="Nilai Tugas"  required="">
							<input type="number" name="uts" class="form-control cobi" placeholder="Nilai UTS" required="">
							<input type="number" name="uas" class="form-control cobu" placeholder="Nilai UAS" required="">
						</div>
							<input type="reset" name="proses" value="RESET" class="btn btn-warning">	
							<input type="submit" name="proses" value="HITUNG" class="btn btn-success">	
					</div>		
				</form>
			</div>
			<div class="col-sm-4 col-sm-offset-1" >
				<h2 style="font-family: Bernard MT Condensed" align="center">TABLE DETAIL</h2>
				<?php 	
				if(isset($_POST['nama'])){
					$nama=$_POST['nama'];
					$matkul=$_POST['matpel'];
					$tugas=$_POST['tugas'];
					$uts=$_POST['uts'];
					$uas=$_POST['uas'];

					//proses

					$rata = ($tugas*0.2)+($uts*0.3)+($uas*0.5);

					if(($rata>=80) && ($rata<=100)){
						$keterangan="GRADE = A <br> PREDIKAT SANGAT MEMUASKAN!";
					}
					elseif(($rata>=70) && ($rata<80)){
						$keterangan="GRADE = B <br> PREDIKAT MEMUASKAN!";
					}	
					elseif(($rata>=60) && ($rata<70)){
						$keterangan="GRADE = C <br> PREDIKAT CUKUP!";
					}
					elseif(($rata>=50) && ($rata<59)){
						$keterangan="GRADE = D <br> PREDIKAT KURANG MEMUASKAN!";
					}
					elseif($rata<50){
						$keterangan="GRADE = E <br> PREDIKAT TIDAK MEMUASKAN!";
					}
					else{
						$keterangan="Nilai Tidak Terdefinisi";		
					}

					 ?>
					<table class="table table-contextual" border="4px">
						<tr>
							<td class="success">
								Nama
							</td>
							<td class="success">
								<?php echo $nama; ?>
							</td>
						</tr>
						<tr>
							<td class="danger">
								Mata Pelajaran
							</td>
							<td class="danger">
								<?php echo $matkul; ?>
							</td>
						</tr>
						<tr>
							<td class="info">
								Nilai Tugas
							</td>
							<td class="info">
								<?php echo $tugas; ?>
							</td>
						</tr>
						<tr>
							<td class="success">
								Nilai Uts
							</td>
							<td class="success">
								<?php echo $uts; ?>
							</td>
						</tr>	
						<tr>
							<td class="danger">
								Nilai Uas
							</td>
							<td class="danger">
								<?php echo $uas; ?>
							</td>
						</tr>
						<tr>
							<td class="info">
								Rata-Rata
							</td>
							<td class="info">
								<?php echo $rata; ?>
							</td>
						</tr>
						<tr>
							<td class="success">
								Keterangan
							</td>
							<td class="success">
								<?php echo $keterangan; ?>
							</td>
						</tr>				
					</table>	
					<a class="btn btn-default" href="Sistem_nilai.php">KEMBALI</a>

				<?php }

				 else{
				 	echo "Silahkan Isi Data Terlebih Dahulu";
				 }				
				 ?>	 
			</div>
		</div>	
	</div>
</body>
</html>