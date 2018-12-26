<div class="header">
    <h4 class="title">Hasil Fuzzifikasi Gaji</h4>
</div>
<div class="content table-responsive">
    <table class="table table-bordered">
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama</th>
            <th colspan="3" class="text-center">Derajat Keanggotaan Gaji</th>
        </tr>
        <tr>
            <th class="text-center">Rendah</th>
            <th class="text-center">Sedang</th>
            <th class="text-center">Tinggi</th>
        </tr>
        <?php
            $no = 1;
            foreach ($viewModel['fuzzifikasi_gaji'] as $res) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $res['nama']; ?></td>
                <td><?php echo $res['Rendah']; ?></td>
                <td><?php echo $res['Sedang']; ?></td>
                <td><?php echo $res['Tinggi']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>