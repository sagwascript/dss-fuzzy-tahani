<div class="header">
    <h4 class="title">Tambah Data</h4>
    <hr>
</div>
<div class="content">
    <form action="data/store" method="post" style="margin-left:0.5%;margin-bottom:2%;">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control border-input" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Masa Kerja</label>
                    <input name="masa_kerja" type="number" class="form-control border-input" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Usia</label>
                    <input name="usia" type="number" class="form-control border-input" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Gaji</label>
                    <input name="gaji" type="number" class="form-control border-input" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Jumlah Tanggungan</label>
                    <input name="jumlah_tanggungan" type="number" class="form-control border-input" required>
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