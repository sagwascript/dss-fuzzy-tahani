<div class="header">
    <h4 class="title">Data Calon Penerima Raskin</h4>
</div>
<div class="content table-responsive">
    <a class="btn btn-info btn-fill" style="float:right; margin-bottom: 10px;" href="data/create">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Masa Kerja</th>
            <th>Usia</th>
            <th>Gaji</th>
            <th>Jumlah Tanggungan</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no = 1;
            setlocale(LC_MONETARY, 'id_ID.utf8');
            foreach ($viewModel as $data) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data->getNama(); ?></td>
                    <td><?php echo $data->getMasaKerja(); ?> Tahun</td>
                    <td><?php echo $data->getUsia(); ?> Tahun</td>
                    <td class="text-right">Rp. <?php echo number_format($data->getGaji(),2,",","."); ?></td>
                    <td><?php echo $data->getJumlahTanggungan(); ?> Orang</td>
                    <td>
                        <a href="data/edit/<?php echo $data->getIdData(); ?>">Ubah</a>
                        <a href="data/delete/<?php echo $data->getIdData(); ?>">Hapus</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</div>