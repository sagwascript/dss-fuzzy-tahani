<div class="header">
    <h4 class="title">Hasil Defuzzifikasi</h4>
</div>
<div class="content table-responsive">
    <table class="table table-bordered">
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Masa Kerja</th>
            <th rowspan="2">Usia</th>
            <th rowspan="2">Gaji</th>
            <th rowspan="2">Jumlah Tanggungan</th>
            <th colspan="2" class="text-center">Derajat Keanggotaan Masa Kerja</th>
            <th colspan="3" class="text-center">Derajat Keanggotaan Usia</th>
            <th colspan="3" class="text-center">Derajat Keanggotaan Gaji</th>
            <th colspan="2" class="text-center">Derajat Keanggotaan Jumlah Tanggungan</th>
            <th rowspan="2">Keterangan</th>
        </tr>
        <tr>
            <th class="text-center">Baru</th>
            <th class="text-center">Lama</th>
            <th class="text-center">Muda</th>
            <th class="text-center">Parobaya</th>
            <th class="text-center">Tua</th>
            <th class="text-center">Rendah</th>
            <th class="text-center">Sedang</th>
            <th class="text-center">Tinggi</th>
            <th class="text-center">Sedikit</th>
            <th class="text-center">Banyak</th>
        </tr>
        <?php
            $no = 1;
            foreach ($viewModel['data'] as $res) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $res[0]; ?></td>
                <td><?php echo $res[1]; ?></td>
                <td><?php echo $res[2]; ?></td>
                <td><?php echo $res[3]; ?></td>
                <td><?php echo $res[4]; ?></td>
                <td><?php echo $res[5]; ?></td>
                <td><?php echo $res[6]; ?></td>
                <td><?php echo $res[7]; ?></td>
                <td><?php echo $res[8]; ?></td>
                <td><?php echo $res[9]; ?></td>
                <td><?php echo $res[10]; ?></td>
                <td><?php echo $res[11]; ?></td>
                <td><?php echo $res[12]; ?></td>
                <td><?php echo $res[13]; ?></td>
                <td><?php echo $res[14]; ?></td>
                <td>KETERANGAN</td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>