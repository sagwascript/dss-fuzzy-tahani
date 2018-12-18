<div class="header">
    <h4 class="title">Ubah Data</h4>
    <hr>
</div>
<div class="content">
    <form action="data/update/<?php echo $viewModel->getIdData(); ?>" method="post" style="margin-left:0.5%;margin-bottom:2%;">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" value="<?php echo $viewModel->getNama(); ?>" class="form-control border-input">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Masa Kerja</label>
                    <input name="masa_kerja" type="text" value="<?php echo $viewModel->getMasaKerja(); ?>" class="form-control border-input">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Usia</label>
                    <input name="usia" type="text" value="<?php echo $viewModel->getUsia(); ?>" class="form-control border-input">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Gaji</label>
                    <input name="gaji" type="text" value="<?php echo $viewModel->getGaji(); ?>" class="form-control border-input">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Jumlah Tanggungan</label>
                    <input name="jumlah_tanggungan" type="text" value="<?php echo $viewModel->getJumlahTanggungan(); ?>" class="form-control border-input">
                </div>
            </div>
        </div>
        <div class="text-left" style="margin-top:2%;">
            <a href="data" class="btn btn-danger btn-fill btn-wd">Batal</a>
            <button type="submit" class="btn btn-info btn-fill btn-wd">Simpan</button>
        </div>
        <div class="clearfix"></div>
    </form>
</div>