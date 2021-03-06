<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <base href="http://localhost/fuzzy-tahani/">
	<link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sistem Pendukung Keputusan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/assets/css/jquery-ui.min.css" rel="stylesheet" />
    <link href="public/assets/css/jquery-ui.structure.min.css" rel="stylesheet" />
    <link href="public/assets/css/jquery-ui.theme.min.css" rel="stylesheet" />
    <link href="public/assets/datatables.min.css" rel="stylesheet" />
  
    <!-- Animation library for notifications   -->
    <link href="public/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="public/assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="public/assets/css/themify-icons.css" rel="stylesheet">

    <!--   Core JS Files   -->
    <script src="public/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="public/assets/js/jquery-ui.min.js" type="text/javascript"></script>

	<script src="public/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/assets/datatables.min.js" type="text/javascript"></script>
    
    <!--  Checkbox, Radio & Switch Plugins -->
	<!-- <script src="public/assets/js/bootstrap-checkbox-radio.js"></script> -->

	<!--  Charts Plugin -->
	<script src="public/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="public/assets/js/bootstrap-notify.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="success">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="">
                        <i class="ti-user"></i>
                        <p>Data Calon Penerima</p>
                    </a>
                </li>
                <li>
                    <a href="fuzzifikasi/masa_kerja">
                        <i class="ti-panel"></i>
                        <p>Fuzzifikasi Masa Kerja</p>
                    </a>
                </li>
                <li>
                    <a href="fuzzifikasi/usia">
                        <i class="ti-panel"></i>
                        <p>Fuzzifikasi Usia</p>
                    </a>
                </li>
                <li>
                    <a href="fuzzifikasi/gaji">
                        <i class="ti-panel"></i>
                        <p>Fuzzifikasi Gaji</p>
                    </a>
                </li>
                <li>
                    <a href="fuzzifikasi/tanggungan">
                        <i class="ti-panel"></i>
                        <p>Fuzzifikasi Tanggungan</p>
                    </a>
                </li>
                <li>
                    <a href="hasil">
                        <i class="ti-panel"></i>
                        <p>Defuzzifikasi</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sistem Pendukung Keputusan - Fuzzy Tahani</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="ti-settings"></i>
									<p>Pengaturan</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="himpunan/kelompok/1">Setting Variabel Masa Kerja</a></li>
                                <li><a href="himpunan/kelompok/2">Setting Variabel Usia</a></li>
                                <li><a href="himpunan/kelompok/3">Setting Variabel Gaji</a></li>
                                <li><a href="himpunan/kelompok/4">Setting Variabel Jumlah Tanggungan</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <?php require($content) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>