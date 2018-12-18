<div class="header">
    <h4 class="title">Data Himpunan</h4>
</div>
<div class="content table-responsive">
    <a class="btn btn-info btn-fill" style="float:right; margin-bottom: 10px;" href="data/create">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama Himpunan</th>
            <th>Bawah</th>
            <th>Tengah</th>
            <th>Atas</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no = 1;
            foreach ($viewModel as $data) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data->getNamaHimpunan(); ?></td>
                    <td><?php echo $data->getBawah(); ?> Tahun</td>
                    <td><?php echo $data->getTengah(); ?> Tahun</td>
                    <td><?php echo $data->getAtas(); ?></td>
                    <td>
                        <a href="data/edit/<?php echo $data->getIdHimpunan(); ?>">Ubah</a>
                        <a href="data/delete/<?php echo $data->getIdHimpunan(); ?>">Hapus</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</div>