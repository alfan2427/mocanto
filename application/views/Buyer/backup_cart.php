     <div class="main" style="overflow-x: scroll;" >
        <div class="container" ">
                <table class="table table-bordered">
                    <h1>Cart</h1>
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
                                foreach ($cart as $p){
                                    $id_produk = $p->id_produk;
                                    $nama = $p->nama_produk;
                                    // $fullname = $p->fullname;
                                    $harga = $p->harga;
                                    $uraian = $p->uraian;
                                    
                        ?>

                        <tr>
                            <th><?php echo $no++; ?></th>
                            <th><?php echo $p->nama_produk?></th>
                            <th><?php echo $p->nama_penjual;?></th>
                            <th><?php echo $p->uraian;?></th>
                            <th><?php echo $p->harga;?></th>
                            <th></th>
                            <th></th>
                            <th></th>
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
                            <th></th>
                            <th>
                                <?php
                                    if($cart != NULL){
                                        ?><a href="<?php echo base_url('cart/checkout') ?>" class="btn btn-primary">Proses</a><?php
                                    } else {
                                        ?><a href="" class="btn btn-default">Proses</a><?php 
                                    }
                                ?>
                            </th>

                        </tr>
                    </tfoot>
                </table>

                <table class="table table-bordered">
                    <h1>Transaction History</h1>
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Tgl.Transaksi</th>
                            <th>Nama Produk</th>
                            <th>kategori </th>
                            <th>Uraian</th>
                            <th>Harga </th>
                            <th>Jumlah </th>
                            <th>Total </th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <th colspan="8">Item :</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php 
                                $no=1;
                                foreach ($history as $h) {
                                    # code...
                                    $id_transaksi = $h->id_transaksi;
                                    $tgl_transaksi = $h->tgl_transaksi;
                                    $nama_produk = $h->nama_produk;
                                    $harga = $h->harga;
                                    $uraian = $h->uraian;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $h->tgl_transaksi; ?></td>
                            <td><?php echo $h->nama_produk; ?></td>
                            <td><?php echo $h->kategori; ?></td>
                            <td><?php echo $h->uraian; ?></td>
                            <td><?php echo $h->harga; ?></td>
                            <td><?php echo $h->qty; ?></td>
                            <td><?php echo $h->harga * $h->qty; ?></td>
                            <td><?php echo $h->status; ?></td>
                        </tr>

                        <?php $no++; } ?>
                    </tbody>
                    <tbody>
                
                    </tbody>
                    </table>
                
        </div>
    </div>
    