<di class="container-fluid">
<div class="card">
  <div class="card-header">
    Detail Produk
  </div>
  <div class="card-body">
    <?php foreach($product as $brg): ?>
    <div class="row">
       <div class="col-md-4">
            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="" class="card-img-top">
       </div>
       <div class="col-md-8">
           <table class="table">
              <tr>
                <td>Nama Produk</td>
                <td><strong><?php echo $brg->nama_barang ?></strong></td>
              </tr>
              <tr>
                <td>Keterangan</td>
                <td><strong><?php echo $brg->deskripsi ?></strong></td>
              </tr>
              <tr>
                <td>Kategori</td>
                <td><strong><?php echo $brg->kategori ?></strong></td>
              </tr>
              <tr>
                <td>Stok</td>
                <td><strong><?php echo $brg->stok ?></strong></td>
              </tr>
              <tr>
                <td>Harga</td>
                <td><strong>Rp. <?php echo number_format($brg->harga,0,',','.') ?></strong></td>
              </tr>
           </table>
           <?php echo anchor('Admin/tambah_keranjang/' .$brg->id_barang,'<div class="btn btn-primary btn-sm">Tambah ke keranjang</div>') ?>
       </div> 
    </div>
<?php endforeach; ?>
  </div>
</div>
</di>