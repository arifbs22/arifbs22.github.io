<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total =0;
                if ($keranjang =$this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total=$grand_total+$item['subtotal'];
                    }
                echo "<h4>Total Belanja Anda :Rp.".number_format($grand_total,0,',','.');    
                ?>
            </div><br></br>
            <h3>Input Alamat Pengirim dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url()?>dashboard/proses_pesanan">

              <div class="form-group">
                    <label>Nama Lengkap</label>
                    <Input type="text" name="nama" placeholder="Nama Lengkap Anda"class="form-control">
              </div>
              
              <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <Input type="text" name="alamat" placeholder="Alamat Lengkap Anda"class="form-control">
              </div>
              
              <div class="form-group">
                    <label>No. Telepon</label>
                    <Input type="text" name="telepon" placeholder="Nomor Telepon Anda"class="form-control">
              </div> 
              
              <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>Shopee Food</option>
                        <option>Grab Food</option>
                        <option>Gofood</option>
                        <option>GoSend</option>
                        <option>Paxel</option>
                    </select>
              </div>  

              <div class="form-group">
                    <label>Pilih Pembayaran</label>
                    <select class="form-control">
                        <option>DANA - 0858XXXXX</option>
                        <option>BRIMO- XXXXXXXXX</option>
                        <option>QRIS - XXXXXXXXX</option>
                        <option>MANDIRI - XXXXXX</option>
                    </select>    
              </div> 
              
              <button type="submit" class="btn btn-sm btn-primary ">Pesan</button>
            </form>
            <?php
        }else
        {
            echo " <h4>Keranjang Belanja Anda Masih Kosong ";  
        }
            ?>
         </div>
        <div class="col-md-2"></div>
    </div>
</div>