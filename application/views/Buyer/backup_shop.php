   <form method="post" action="<?php echo base_url('cart/add_cart');?>">
  <div class="cont col">      
   <div class="main">
    <div class="shop_top">
          <div class="container">
               <div class="row shop_box-top">
        <?php 
          $no= 0; 
          foreach ($produk as $p){
                 $id_produk = $p->id_produk;
              $nama = $p->nama_produk;
              $fullname = $p->fullname;
              $harga = $p->harga;
              $uraian = $p->uraian;
              $gambar = $p->gambar;
           ?>
        <div class="col-md-3 shop_box">
                    <img src="<?=base_url();?>/uploads/<?=$p->gambar;?>" alt="" style="width: 150px; height: 150px;"/>
                         <div class="shop_desc">
                         <h4><?php echo $p->fullname; ?></h4>
                              <h3><?php echo $p->nama_produk; ?></h3>
                              <p><?php echo $p->uraian; ?></p>
                              <p><?php echo $p->kategori; ?></p>
                              <span class="actual">harga : <?php echo $p->harga; ?></span>
                                        <input type="numeric" name="qty" placeholder="Qty">
                                   <li class="cart"><a href="<?php echo base_url();?>index.php/cart/add_cart/<?php echo $p->id_produk; ?>">Add to Cart</a></li>
                        </div>

          </div>
        <?php 
          };
          $no++;
          ?>

               </div>
           </div>
        </div>
       </div>
</div>