   <div class="main">
    <div class="shop_top">
		<div class="container">
      <p class="alert alert-info alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Pemberitahuan!!</strong> Pastikan Membeli di satu kantin...
      </p>
			<div class="row shop_box-top">

				<?php 
          				$no= 0; 
          				foreach ($produk as $p){
           		?>

	        	
				<div class="cont col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;"><h2><b><?php echo $p->nama_produk?></b></h2></div>
                      <div class="panel-body">
                          <img src="<?=base_url();?>/uploads/<?=$p->gambar;?>" class="img-responsive" style="height: 10em; width: 15em;">
                          <div class="cont">
                              <div style="text-align: center;">
                                <h4 class="col-md-12"><b>Kantin : <?php echo $p->room?></b></h4>  
                              </div>
                              <div>
                                <h4 class="col-md-7"><?php echo $p->nama_produk?></h4>
                                <h4 class="harga">Rp.<?php echo $p->harga?></h4>
                              </div>
                              <div class="col-md-12">
                                <p>Kategori : <?php echo $p->kategori?></p>
                                <p>Penjual : <?php echo $p->fullname?></p>
                                <p><?php echo $p->uraian?></p>
                                <p><?php echo $p->status_produk?></p>
                              </div>
                              <div class="col-md-12">
                                <input type="numeric" value="1" name="qty" placeholder="Qty" onkeyup="return change_link_cart(this.value, <?php echo $p->id_produk ?>)" class="col-md-6" style="margin: 3px;"> 
                                <?php
                                    if($p->status_produk == 'Tersedia'){
                                        ?><a id='link_<?php echo $p->id_produk; ?>' href="<?php echo base_url();?>index.php/cart/add_cart/<?php echo $p->id_produk; ?>/1" name="submit" class="btn btn-primary">Tambah</a><?php
                                    } else {
                                        ?><a href="" class="btn btn-default">Tambah</a><?php 
                                    }
                                  ?>
                              </div>
                          </div>
                      </div>
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

<script>

	function change_link_cart(qty,id_produk)
	{
		$("#link_"+id_produk).attr('href','<?php echo base_url();?>cart/add_cart/'+id_produk+'/'+qty)
	}
</script>