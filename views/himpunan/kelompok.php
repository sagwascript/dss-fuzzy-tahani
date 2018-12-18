<div class="header">
    <h4 class="title">Data Himpunan Variabel <?php echo $viewModel['nama_variabel']; ?></h4>
</div>
<div class="content table-responsive">
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
            foreach ($viewModel['data'] as $data) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data->getNamaHimpunan(); ?></td>
                    <td><?php echo $data->getBawah(); ?></td>
                    <td><?php echo $data->getTengah(); ?></td>
                    <td><?php echo $data->getAtas(); ?></td>
                    <td>
                        <a href="himpunan/edit/<?php echo $data->getIdHimpunan(); ?>">Ubah</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</div>