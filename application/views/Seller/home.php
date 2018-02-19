<div class="cont col-md-12"> 
        <div class="main col-md-12">
            <div class="main-cont">
            <?php 
                $no= 0; 
                   foreach ($hak as $p){
                ?>
                <div class="col-md-12 md" style="background-color: blue;">
                   <div style="text-align: center;"><?php echo $p->status_hak?></div> 
                </div>
                <?php 
                  };
                  $no++;
                ?>

            <?php 
                     if ($this->session->userdata('hak_akses')=='penjual') {
                    
                ?>
                <h3>Pesanan :</h3>
                <table class="table table-bordered">
                    
                    <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        <th>Pembeli</th>
                        <th>No Hp</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                        foreach ($toko as $t) {
                            # code...
                    ?>

                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $t->id_transaksi;?></td>
                        <td><?php echo $t->tgl_transaksi;?></td>
                        <td><?php echo $t->fullname;?></td>
                        <td><?php echo $t->no_hp?></td>
                        <td>
                            <a class="btn btn-primary" href="toko/detail_pesanan/<?php echo $t->id_transaksi?>"><i class="fa fa-eye"></i></a> &nbsp; <a class="btn btn-danger" href="<?php echo base_url();?>toko/delete_transaksi/<?php echo $t->id_transaksi;?>" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>

                    <?php $no++;}?>
                
                </table>
                <br>

                <h3>Riwayat Transaksi :</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>Tanggal Transaksii</th>
                        <th>Pembeli</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                            $no= 0; 
                            $total=0;
                            foreach ($history as $t){
                        ?>
                    <tr>
                            <td class="tbl"><?php echo ++$no; ?></td>
                            <td class="tbl"><?php echo $t->id_transaksi; ?></td>
                            <td class="tbl"><?php echo $t->tgl_transaksi; ?></td>
                            <td class="tbl">
                                <?php echo $t->fullname; ?>
                            </td>
                            <td class="tbl">
                                <?php echo $t->status ?>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo base_url('toko/detail_riwayat_pesanan/'.$t->id_transaksi)?>">
                                    <i class="fa fa-eye"></i>
                                </a> &nbsp; 
                                <a class="btn btn-danger" href="<?php echo base_url();?>toko/delete_transaksi/<?php echo $t->id_transaksi;?>" onclick="return confirm('Apakah Anda Yakin ?')">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                </table>

                <?php 
                    }else{
                            echo '<div class="alert alert-danger"> Anda Belum Terdaftar Menjadi Penjual. Silahkan Daftar dengan mengunggah file Identitas(KTP/SIM) <form method="post" action="'.base_url('toko/upload_identitas').'" enctype="multipart/form-data"><input type="file" class="form-control" name="identitas"> <input type="submit" value="upload">

                              </form></div>';
                             if(!empty($notif)){
                                 echo $notif;

                             }

                    }

                    
                ?>

            </div>
            <div class="main-foot">
            </div>
        </div>
</div>