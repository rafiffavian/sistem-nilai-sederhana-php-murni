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




	//output
	echo "Nama : " . $nama . 
	"<br>Mata Pelajaran : " . $matkul . 
	"<br>Nilai Tugas : " . $tugas . 
	"<br>Nilai Uts : " . $uts . 
	"<br>Nilai Uas : " . $uas .
	"<br>Rata-Rata : " . $rata .
	"<br>Keterangan : " .$keterangan;

 ?>