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
                  $button = "";
                  foreach ($kantin as $p){
                    if($this->session->userdata('kantinku') != NULL){
                      if($p->id_user == $this->session->userdata('kantinku')){
                        $button = '<a href="'.base_url().'shop/kantin/'.$p->id_user.'" class="btn btn-block btn-info"><i class="fa fa-sign-in"></i>Masuk</a>';
                      } else {
                        $button = '<a href="#" class="btn btn-block btn-default"><i class="fa fa-sign-in"></i>Masuk</a>';
                      }
                    }else{
                      $button = '<a href="'.base_url().'shop/kantin/'.$p->id_user.'" class="btn btn-block btn-info"><i class="fa fa-sign-in"></i>Masuk</a>';
                    }
              ?>

            
        <div class="cont col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;"><h2>Kantin : <b><?php echo $p->room?></b></h2></div>
                      <div class="panel-body" >
                        <img src="<?php echo base_url('assets/image/kantin.jpg');?>" class="img-responsive">
                        <br>
                        <div style="text-align: center;"><h3><?php echo $p->no_hp?></h3></div>
                          <div class="cont">
                            <?php 
                              echo $button;
                            ?>
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