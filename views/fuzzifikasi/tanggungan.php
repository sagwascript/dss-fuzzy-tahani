<div class="header">
    <h4 class="title">Hasil Fuzzifikasi Tanggungan</h4>
</div>
<div class="content table-responsive">
    <table class="table table-bordered">
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama</th>
            <th colspan="2" class="text-center">Derajat Keanggotaan Tanggungan</th>
        </tr>
        <tr>
            <th class="text-center" style="width:25%">Sedikit</th>
            <th class="text-center" style="width:25%">Banyak</th>
        </tr>
        <?php
            $no = 1;
            foreach ($viewModel['fuzzifikasi_tanggungan'] as $res) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $res['nama']; ?></td>
                <td><?php echo $res['Sedikit']; ?></td>
                <td><?php echo $res['Banyak']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>