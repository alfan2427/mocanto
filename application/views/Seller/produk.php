<div class="cont col-md-12">
  <div class="main">
      <?php 
        if ($this->session->userdata('hak_akses')=='penjual') {
            # code...
            // if ($hak == 'penjual') {                
                ?>
        <div class="add"><a href="<?php echo base_url('add_produk');?>" class="btn btn-danger" id="tombol"><i class="fa fa-plus"> Add Produk </i></a>
        </div>
        <div class="shop_top">
            <div class="container">
              <div class="row shop_box-top">
                <?php 
                $no= 0; 
                   foreach ($produk as $p){
                ?>
                <div class="col-md-3">
                  <div class="shop_desc">
                        <img src="<?=base_url();?>/uploads/<?=$p->gambar;?>" class="img-responsive" style="width: 16em; height: 10em;"/>
                        <h3></h3>
                        <h3 style="color: white;"><?php echo $p->nama_produk?></h5> <h5 class="add`"><?php echo $p->harga?></h5>
                        <h4 style="color: white;"><?php echo $p->uraian ?></p>
                        <p style="color: white;">Kategori: <?php echo $p->kategori?></p>
                        <a class="btn btn-danger" href="<?php echo base_url();?>produk/hapus/<?php echo $p->id_produk; ?>" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash-o"></i></a>
                        <br>
                        <?php
                              if($p->status_produk == 'Tersedia'){
                                  ?>
                                        <a class="btn btn-default">Tersedia </a>
                                        <a class="btn btn-primary" href="<?php echo base_url();?>produk/stok/<?php echo $p->id_produk; ?>/habis">Habis</a>
                                  <?php
                              } else {
                                  ?>
                                        <a class="btn btn-primary" href="<?php echo base_url();?>produk/stok/<?php echo $p->id_produk; ?>/Tersedia">Tersedia </a>
                                        <a class="btn btn-default">Habis</a>
                                  <?php
                              }
                        ?>
                  </div>
                </div>
                <?php 
                  };
                  $no++;
                ?>
              </div>
            </div>
        </div>

        <?php 
            }else{
              echo '<div class="alert alert-danger"> Anda Belum Terdaftar Menjadi Penjual. Silahkan Daftar dengan mengunggah file Identitas(KTP/SIM) <form method="post" action="'.base_url('produk/upload_identitas').'" enctype="multipart/form-data"><input type="file" class="form-control" name="identitas"> <input type="submit" value="upload">
                            </form></div>' ;
                        if (!empty($notif)) {
                            # code...
                            echo $notif;
                        }

                    }
                ?>
    </div>
  </div>  
