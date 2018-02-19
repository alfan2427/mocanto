<div class="cont col-md-12"> 
    <form method="post">  
        <div class="main col-md-12">
            <div class="main-cont">
                <table id="tableBoq" class="table table-bordered table-stripped" data-spy="scroll">
                    <h2>Pesanan :</h2>
                    <thead>
                        <tr>
                            <th style=" text-align: center; vertical-align: middle;">No</th>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">Booking ID</th>
                            <th style="width: 175px; text-align: center; vertical-align: middle;">Pembeli</th>
                            <th style="text-align: center; vertical-align: middle;">Ruangan</th>
                            <th style="text-align: center; vertical-align: middle;">Pesanan</th>
                            <th style="text-align: center; vertical-align: middle;">Harga</th>
                            <th style="text-align: center; vertical-align: middle;">Jumlah</th>
                            <th style="text-align: center; vertical-align: middle;">Sub-Total</th>
                            <th style="width: 5em; text-align: center; vertical-align: middle;">Action</th>
                        </tr>
                        <tr>
                        </tr>
                    </thead>
                    
                    <tbody>                
                        <?php 
                            $no= 0; 
                            $total = 0;
                            foreach ($toko as $t){
                        ?>
                        <tr>
                            <td class="tbl"><?php echo ++$no; ?></td>
                            <td class="tbl"><?php echo $t->id_transaksi; ?></td>
                            <td class="tbl"><?php echo $t->fullname; ?></td>
                            <td class="tbl">
                                <?php echo $t->room; ?>
                            </td>
                            <td class="tbl">
                                <?php echo $t->nama_produk; ?>
                            </td>
                            <td class="tbl">
                                <?php echo $t->harga ?>
                            </td>
                            <td class="tbl">
                                <?php echo $t->qty ?>
                            </td>
                            <td class="tbl">
                                <?php echo $t->harga*$t->qty; $total += $t->harga*$t->qty;?>
                            </td>
                            <td><a class="btn btn-primary" href="<?php echo base_url('toko/update_status/'.$t->id_transaksi); ?>"><i class="fa fa-send" > Kirim</i></a></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <th class="tbl" colspan="4"></th>
                            <th class="tbl">Total :</th>
                            <th class="tbl"><?php echo $total; ?></th>
                        </tr>                        
                    </tbody>
                </table>
                <h3>History Penjualan :</h3>
                <table id="tableBoq" class="table table-bordered table-stripped" data-spy="scroll">
                    <h2>Pesanan :</h2>
                    <thead>
                        <tr>
                            <th style=" text-align: center; vertical-align: middle;">No</th>
                            <th style="width: 150px; text-align: center; vertical-align: middle;">Booking ID</th>
                            <th style="width: 175px; text-align: center; vertical-align: middle;">Pembeli</th>
                            <th style="text-align: center; vertical-align: middle;">Ruangan</th>
                            <th style="text-align: center; vertical-align: middle;">Pesanan</th>
                            <th style="text-align: center; vertical-align: middle;">Harga</th>
                            <th style="text-align: center; vertical-align: middle;">Jumlah</th>
                            <th style="text-align: center; vertical-align: middle;">Sub-Total</th>
                            <th style="width: 5em; text-align: center; vertical-align: middle;">Status</th>
                        </tr>
                        <tr>
                        </tr>
                    </thead>
                    
                    <tbody>                
                        <?php 
                            $no= 0; 
                            foreach ($history as $t){
                        ?>
                        <tr>
                            <td class="tbl"><?php echo ++$no; ?></td>
                            <td class="tbl"><?php echo $t->id_transaksi; ?></td>
                            <td class="tbl"><?php echo $t->fullname; ?></td>
                            <td class="tbl">
                                <?php echo $t->room; ?>
                            </td>
                            <td class="tbl">
                                <?php echo $t->nama_produk; ?>
                            </td>
                            <td class="tbl">
                                <?php echo $t->harga ?>
                            </td>
                            <td class="tbl">
                                <?php echo $t->qty ?>
                            </td>
                            <td class="tbl">
                                <?php echo $t->harga*$t->qty; ?>
                            </td>
                            <td><?php echo $t->status; ?></td>
                        </tr>
                        <?php } ?>           
                    </tbody>
                </table>
            </div>
            <div class="main-foot">

            </div>
            </div>
        </form>
    </form>
</div>

