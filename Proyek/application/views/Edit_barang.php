<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit data Barang</h3>
    <?php foreach($product as $brg) : ?>
        <form method="post" action="<?php echo base_url(). 'Akun_admin/Data_barang/update/' ?>">
            <div class="for-group">
                <label >Nama Barang</label>
                <input type="text" name="nama_barang" value="<?php echo $brg->nama_barang ?>" class="form-control">
            </div>
            <div class="for-group">
                <label >Keterangan</label>
                <input type="hidden" name="id_barang" value="<?php echo $brg->id_barang ?>" class="form-control">
                <input type="text" name="deskripsi" value="<?php echo $brg->deskripsi ?>" class="form-control">
            </div>
            <div class="for-group">
                <label >Kategori</label>
                <input type="text" name="kategori" value="<?php echo $brg->kategori ?>" class="form-control">
            </div>
            <div class="for-group">
                <label >Harga</label>
                <input type="text" name="harga" value="<?php echo $brg->harga ?>" class="form-control">
            </div>
            <div class="for-group">
                <label >Stok</label>
                <input type="text" name="stok" value="<?php echo $brg->stok ?>" class="form-control">
            </div><br><br>
            <button type="submit" class="btn btn-primary btn-lg">Save</button>
        </form>
    <?php endforeach; ?>
</div>