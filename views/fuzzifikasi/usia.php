<div class="header">
    <h4 class="title">Hasil Fuzzifikasi Usia</h4>
</div>
<div class="content table-responsive">
    <table class="table table-bordered">
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama</th>
            <th colspan="3" class="text-center">Derajat Keanggotaan</th>
        </tr>
        <tr>
            <th class="text-center">Muda</th>
            <th class="text-center">Parobaya</th>
            <th class="text-center">Tua</th>
        </tr>
        <?php
            $no = 1;
            foreach ($viewModel['fuzzifikasi_usia'] as $res) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $res['nama']; ?></td>
                <td><?php echo $res['Muda']; ?></td>
                <td><?php echo $res['Parobaya']; ?></td>
                <td><?php echo $res['Tua']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>