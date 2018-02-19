
     <div class="main">
        <div class="container">
                <table class="table table-bordered">
                    <br>
                    <h1>Kantong Belanja :</h1>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Penjual </th>
                            <th>Uraian</th>
                            <th>Harga </th>
                            <th>Jumlah </th>
                            <th>Sub-Total </th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <th colspan="8">Item :</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                                $no= 1;
                                $total=0; 
                                foreach ($cart as $p){

                                    
                        ?>

                        <tr>
                            <th><?php echo $no++; ?></th>
                            <th><?php echo $p->nama_produk?></th>
                            <th><?php echo $p->nama_penjual;?></th>
                            <th><?php echo $p->uraian;?></th>
                            <th><?php echo $p->harga;?></th>
                            <th><?php echo $p->qty;?></th>
                            <th><?php echo $p->harga*$p->qty; $total += $p->harga*$p->qty;?></th>
                            <th><a href="<?php echo base_url(); ?>cart/hapus/<?php echo $p->id_cart; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></th>
                        </tr>

                        <?php 
                           };
                           $no++;
                        ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5  "></th>
                            <th>Total :</th>
                            <th><?php echo $total;?></th>
                            <th>
                                <?php
                                    if($cart != NULL){
                                        ?><a href="<?php echo base_url('cart/checkout/') ?>" class="btn btn-primary">Proses</a><?php
                                    } else {
                                        ?><a href="" class="btn btn-default">Proses</a><?php 
                                    }
                                ?>
                            </th>

                        </tr>
                    </tfoot>
                </table>
                <br>
                <br>
                <table class="table table-bordered">
                    <h1>Riwayat Pembelian :</h1>
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Tgl.Transaksi</th>
                            <th>Total </th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php 
                                $no=1;
                                foreach ($history as $h) {
                                    # code...
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $h->tgl_transaksi; ?></td>
                            <td><?php echo $h->total; ?></td>
                            <td><?php echo $h->status; ?></td>
                            <td><a class="btn btn-primary" href="<?php echo base_url('cart/detail_kantong/'.$h->id_transaksi)?>"><i class="fa fa-eye"></i></a> &nbsp; <a class="btn btn-danger" href="<?php echo base_url();?>cart/delete_transaksi/<?php echo $h->id_transaksi;?>" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash-o"></i></a></td>
                        </tr>

                        <?php $no++; } ?>
                    </tbody>
                </table>
                
        </div>
    </div>
    <br>
    <br>