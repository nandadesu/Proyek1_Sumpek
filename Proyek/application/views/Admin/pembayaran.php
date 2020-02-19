<div class="container-fluid">
    <div class="row">
        <div class="col md-2"></div>
        <div class="col md-8">
            <div class="btn btn-sm btn-success">
                <?php  
                    $grand_total = 0;
                    if($keranjang = $this->cart->contents())
                    {
                        foreach($keranjang as $item){
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        echo "<h4>Total Belanja Anda: Rp. " . number_format($grand_total, 0,',','.');
                    
                ?>

            </div><br><br>
            <h3>Input alamat pengiriman</h3>
            <form action="<?php echo base_url('Admin/proses_pesanan') ?>" method="post">
                    <div class="from-group">
                        <label >Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="from-group">
                        <label >Alamat</label>
                        <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap">
                    </div>
                    <div class="from-group">
                        <label >No.Telp</label>
                        <input class="form-control" type="text" name="noTelp" placeholder="Nomor Telepon">
                    </div>
                    <div class="from-group">
                        <label >Jasa Pengiriman</label>
                        <select class="form-control">
                            <option >JNE</option>
                            <option >TIKI</option>
                            <option >POS</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary mt-3">Pesan</button>
            </form>
            <?php  
                }else{
                    echo "<h4>Keranjang Belanja Anda Masih Kosong";
                }
            ?>
        </div>
        <div class="col md-2"></div>
    </div>
</div>