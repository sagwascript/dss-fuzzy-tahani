<?php
include "config.php";


$idsiswa=$_GET['idsiswa'];
$nilai=$_GET['nilai'];
$minat=$_GET['minat'];


$sql2	="SELECT * FROM tbl_himpunan WHERE kelompok='1'";
$hasil2	=mysqli_query($con, $sql2);
while($row2=mysqli_fetch_assoc($hasil2))
{

	$id=$row2['id'];
	$bawah=$row2['bawah'];
	$tengah=$row2['tengah'];
	$atas=$row2['atas'];

			$selisih=$atas-$bawah;
			if($nilai<$bawah)
				{
					$DA=0;
				   $simpanm="Insert into hasil_fuzzy (idhimpunan,idsiswa,f) values
				   ('$id','$idsiswa','$DA')";
				   $hasil=mysqli_query($con, $simpanm);
				}
			elseif(($nilai>=$bawah) && ($nilai<=$tengah))
				{
					if($bawah<=0)
						{
							$DA=1;
							   $simpanm="Insert into hasil_fuzzy (idhimpunan,idsiswa,f) values
							   ('$id','$idsiswa','$DA')";
							   $hasil=mysqli_query($con, $simpanm);
						}
					else
						{
							$DA=($nilai-$bawah) / ($tengah-$bawah);
							   $simpanm="Insert into hasil_fuzzy (idhimpunan,idsiswa,f) values
							   ('$id','$idsiswa','$DA')";
							   $hasil=mysqli_query($con, $simpanm);
						}
				}
			elseif(($nilai>$tengah) && ($nilai<=$atas))
				{
					$DA=($atas-$nilai) / ($atas-$tengah);
				   $simpanm="Insert into hasil_fuzzy (idhimpunan,idsiswa,f) values
				   ('$id','$idsiswa','$DA')";
				   $hasil=mysqli_query($con, $simpanm);
				}
			elseif($nilai>$atas)
				{
					$DA=0;
				   $simpanm="Insert into hasil_fuzzy (idhimpunan,idsiswa,f) values
				   ('$id','$idsiswa','$DA')";
				   $hasil=mysqli_query($con, $simpanm);
				}
			$DA=number_format($DA,2,",",".");

echo "$id. $bawah $tengah $atas --> $DA <br>";
}
echo "PROSES... SILAHKAN TUNGGU..";
echo "<meta http-equiv=Refresh content=1;url=tes1.php?idsiswa=$idsiswa&nilai=$nilai&minat=$minat>";
?>
