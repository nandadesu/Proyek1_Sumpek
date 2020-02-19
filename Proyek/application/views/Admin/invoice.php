<div class="container-fluid">
    <h4>Invoice Pemesanan</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Transaksi</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengirim</th>
            <th>Tgl Pemesanan</th>
            <th>Batas Pembayaran</th>
        </tr>
        <?php foreach($invoice as $inv):?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tglPesan ?></td>
                <td><?php echo $inv->batasBayar ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>