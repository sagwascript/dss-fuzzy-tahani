<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fuzzy Tahani</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="header"><h1 align="center">SPK Menggunakan Fuzzy Tahani dalam menentukan Penyebab Kegagalan Siswa Mencapai SKBM <hr /></h1></div>
    <div id="main">

		<div id="text" >
		<a href="index.php">Data Siswa</a> || 
		<a href="index.php?aksi=tambah">Tambah Data Siswa</a> || 
		<a href="index.php?aksi=setting">Setting</a> || 
		<a href="index.php?variabel=1">Fuzzifikasi Nilai</a> || 
		<a href="index.php?variabel=2">Fuzzifikasi Minat Belajar</a> || 
		<a href="defuzzy.php">Defuzzifikasi</a>
		
		<br />
		<br />
			  <?php 
			  include "config.php";
			  include "content.php" ;
			  ?>
	  </div>
		  
    </div>

    <div id="footer" align="center">
	Copyright &copy; 2016 <a href="http://alele-solutions.com" target="_blank">Alele Solutions</a> | Fuzzy Tahani
	</div>

</body>
</html>

                