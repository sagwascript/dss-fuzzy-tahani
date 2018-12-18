<div class="header">
    <h4 class="title">Ubah Data Himpunan</h4>
    <hr>
</div>
<div class="content">
    <form action="himpunan/update/<?php echo $viewModel->getIdHimpunan(); ?>" method="post" style="margin-left:0.5%;margin-bottom:2%;">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Himpunan</label>
                    <input name="nama_himpunan" type="text" value="<?php echo $viewModel->getNamaHimpunan(); ?>" class="form-control border-input">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Bawah</label>
                    <input name="bawah" type="text" value="<?php echo $viewModel->getBawah(); ?>" class="form-control border-input">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tengah</label>
                    <input name="tengah" type="text" value="<?php echo $viewModel->getTengah(); ?>" class="form-control border-input">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Atas</label>
                    <input name="atas" type="text" value="<?php echo $viewModel->getAtas(); ?>" class="form-control border-input">
                </div>
            </div>
        </div>
        <input type="hidden" name="kelompok" value="<?php echo $viewModel->getKelompok(); ?>">
        <div class="text-left" style="margin-top:2%;">
            <a href="himpunan/kelompok/<?php echo $viewModel->getKelompok(); ?>" class="btn btn-danger btn-fill btn-wd">Batal</a>
            <button type="submit" class="btn btn-info btn-fill btn-wd">Simpan</button>
        </div>
        <div class="clearfix"></div>
    </form>
</div>