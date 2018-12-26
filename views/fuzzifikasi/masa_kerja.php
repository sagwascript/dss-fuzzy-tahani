<div class="header">
    <h4 class="title">Hasil Fuzzifikasi Masa Kerja</h4>
</div>
<div class="content table-responsive">
    <table class="table table-bordered">
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama</th>
            <th colspan="2" class="text-center">Derajat Keanggotaan Masa Kerja</th>
        </tr>
        <tr>
            <th class="text-center" style="width:25%">Baru</th>
            <th class="text-center" style="width:25%">Lama</th>
        </tr>
        <?php
            $no = 1;
            foreach ($viewModel['fuzzifikasi_masa_kerja'] as $res) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $res['nama']; ?></td>
                <td><?php echo $res['Baru']; ?></td>
                <td><?php echo $res['Lama']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>