<?php
	function derajat_keanggotaan($nilai, $bawah, $tengah, $atas)
		{
			$selisih=$atas-$bawah;
			if($nilai<$bawah)
				{
					$DA=0;
				}
			elseif(($nilai>=$bawah) && ($nilai<=$tengah))
				{
					if($bawah<=0)
						{
							$DA=1;
						}
					else
						{
							$DA=($nilai-$bawah) / ($tengah-$bawah);
						}
				}
			elseif(($nilai>$tengah) && ($nilai<=$atas))
				{
					$DA=($atas-$nilai) / ($atas-$tengah);
				}
			elseif($nilai>$atas)
				{
					$DA=0;
				}
			return $DA;

		}
	$variabel		=isset($_GET['variabel'])?$_GET['variabel']*1:0;
	$sql_variabel	="SELECT * FROM tbl_variabel WHERE id='$variabel'";
	$hasil_variabel	=mysqli_query($con, $sql_variabel);
	$row_variabel	=mysqli_fetch_assoc($hasil_variabel);

	$sql			="SELECT * FROM tbl_himpunan";
	$hasil			=mysqli_query($con, $sql);
	$jumkol			=mysqli_num_rows($hasil);


if ($_GET['aksi']==setting) {
echo "<h2>Setting</h2>";
  $set=mysqli_query($con, "SELECT * FROM tbl_variabel");
  $no=0;
  echo "<table border=1> <tr bgcolor=#9DC5FF> <td>No. </td> <td>Nama Variabel</td> <td>Aksi</td></tr>";
  while ($setr=mysqli_fetch_array($set))
  { $no++;
  echo "<tr> <td>$no. </td> <td>$setr[nama_variabel]</td> <td><a href=?aksi=himpunan&id=$setr[id]>Lihat Himpunan Fuzzy</td></tr>";
  }
echo"</table><br>
";
}

if ($_GET['aksi']==himpunan) {
	if ($_GET['di']==simpan) {
	$id=$_POST['id'];
	mysqli_query($con, " update tbl_himpunan SET
	nama_himpunan='$_POST[nama]',bawah='$_POST[b]',tengah='$_POST[t]',atas='$_POST[a]' where id='$_POST[ids]'");
	echo "Data Siswa Telah Disimpan.";
	echo "<meta http-equiv=Refresh content=1;url=index.php?aksi=himpunan&id=$id";
	}
	if ($_GET['di']==edit) {
	  $sethf=mysqli_query($con, "SELECT * FROM tbl_himpunan where id='$_GET[ids]'");
	  while ($setrhf=mysqli_fetch_array($sethf))
		echo "<h2>Edit Himpunan Fuzzy</h2>
		<form method=POST action='?aksi=himpunan&di=simpan'>
				  <table>
				  <tr><td>Himpunan Fuzzy</td><td> : <input type=text name='nama' size=30 value='$setrhf[nama_himpunan]'></td></tr>
				  <tr><td>Domain</td><td> : <input type=text name='b' size=5 value='$setrhf[bawah]'>
				  <input type=text name='t' size=5 value='$setrhf[tengah]'>
				  <input type=text name='a' size=5 value='$setrhf[atas]'>
				  <input type=hidden name='id' size=5 value='$_GET[id]'>
				  <input type=hidden name='ids' size=5 value='$_GET[ids]'></td></tr>
				  <tr><td colspan=2><input type=submit value=Simpan></td></tr>
				  </table>
		</form> <br>";
	}

echo "<h2>Setting</h2>";
  $seth=mysqli_query($con, "SELECT * FROM tbl_himpunan where kelompok='$_GET[id]'");
  $noh=0;
  echo "<table border=1> <tr bgcolor=#9DC5FF> <td>No. </td> <td>Himpunan Fuzzy</td> <td>Domain</td> <td>Aksi</td></tr>";
  while ($setrh=mysqli_fetch_array($seth))
  { $noh++;
  echo "<tr> <td>$noh. </td> <td>$setrh[nama_himpunan]</td> <td>$setrh[bawah] | $setrh[tengah] | $setrh[atas]</td> <td><a href=?aksi=himpunan&di=edit&id=$_GET[id]&ids=$setrh[id]>Edit</td></tr>";
  }
echo"</table><br>
";
}


if ($_GET['aksi']==tambah) {
echo "<h2>Tambah Data Siswa</h2>
<form method=POST action='?aksi=simpan'>
          <table>
          <tr><td>Nama</td><td> : <input type=text name='nama' size=30></td></tr>
          <tr><td>Nilai</td><td> : <input type=text name='nilai' size=5></td></tr>
          <tr><td>Minat Belajar</td><td>  : <input type=text name='minat' size=5></td></tr>
          <tr><td colspan=2><input type=submit value=Simpan></td></tr>
          </table>
</form> <br>";
}

if ($_GET['aksi']==simpan) {
$nx=$_POST[nilai];
$ny=$_POST[minat];
$query = "INSERT INTO tbl_data
          (nama,nilai,minat_belajar)
VALUES ('$_POST[nama]','$nx','$ny')";
$result = mysqli_query($con, $query)
or die(mysqli_error());

$sql2	="SELECT * FROM tbl_data ORDER BY id DESC";
$hasil2	=mysqli_query($con, $sql2);
$row2=mysqli_fetch_array($hasil2);

echo "Data Siswa Telah Disimpan.";
echo "<meta http-equiv=Refresh content=1;url=tes.php?idsiswa=$row2[id]&nilai=$nx&minat=$ny>";
}


echo "<h2>Data Siswa</h2>";
if ($_GET['variabel']) {   ?>

<strong>Siswa berdasarkan : <?php echo $row_variabel['nama_variabel'];?></strong> <?php } ?>
<table border="1" cellpadding="3" width="95%">
	<tr bgcolor="#9DC5FF">
    	<td width="2%" rowspan="2"><strong>ID</strong></td>
        <td rowspan="2"><strong>Nama</strong></td>
        <td width="15%" rowspan="2"><strong>Nilai (x)</strong></td>
        <td width="15%" rowspan="2"><strong>Minat Belajar (y)</strong></td>
 <?php if ($_GET['variabel']) {   ?>
        <td colspan="<?php echo $jumkol; ?>" align="center"><strong>Derajat Keanggotaan ( &#956; [
				<?php if ($_GET['variabel']==1) { echo"x";}
		if ($_GET['variabel']==2) { echo"y";} ?>
		] )</strong></td>
 <?php     } ?>
  </tr>
	<tr bgcolor="#9DC5FF">
	<?php
			$sql	="SELECT * FROM tbl_himpunan WHERE kelompok='$variabel'";
			$hasil	=mysqli_query($con, $sql);
			while($row=mysqli_fetch_assoc($hasil))
				{
		?>
	  <td><strong><?php echo $row['nama_himpunan'];?></strong></td>
 <?php
				}
		?>
  </tr>
    <?php
    	$sql	="SELECT * FROM tbl_data";
			$hasil	=mysqli_query($con, $sql);
			while($row=mysqli_fetch_assoc($hasil))
				{
	?>

	<tr>
	  <td><?php echo $row['id']; ?></td>
	  <td><?php echo $row['nama']; ?></td>
	  <td><?php echo $row['nilai']; ?></td>
      <td><?php echo $row['minat_belajar']; ?></td>
      <?php
	  		$sql2	="SELECT * FROM tbl_himpunan WHERE kelompok='$variabel'";
			$hasil2	=mysqli_query($con, $sql2);
			while($row2=mysqli_fetch_assoc($hasil2))
				{
		?>
        <td ><?php echo  number_format(derajat_keanggotaan($row[$row_variabel['field_akses']], $row2['bawah'], $row2['tengah'], $row2['atas']),2,",",".");?></td>
        <?php
				}
		?>


  </tr>
  <?php
				}
  ?>
</table>
