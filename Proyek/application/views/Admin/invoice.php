

<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Invoice</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Id Transaksi</th>
                <th>Nama Pemesan</th>
                <th>Alamat Pengirim</th>
                <th>Tgl Pemesanan</th>
                <th>Batas Pembayaran</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($transaksi as $inv):?>
                <tr>
                    <td><?php echo $inv->id ?></td>
                    <td><?php echo $inv->nama ?></td>
                    <td><?php echo $inv->alamat ?></td>
                    <td><?php echo $inv->tglPesan ?></td>
                    <td><?php echo $inv->batasBayar ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>

</div>
