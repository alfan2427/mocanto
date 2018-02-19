<html>
<head>
<title>Mocanto Home</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/buyer/bootstrap.css');?>" type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('/assets/css/buyer/fontawesome/css/font-awesome.min.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/buyer/style.css');?>"  type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('assets/css/buyer/fwslider.css');?>" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="<?php echo base_url('assets/javascript/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/javascript/jquery-ui.min.js');?>"></script>
<script src="<?php echo base_url('assets/javascript/fwslider.js');?>"></script>

</head>
<body>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="header-left">
           <div class="logo">
            <a href="<?php echo base_url('welcome');?>"><img src="<?php echo base_url('assets/image/logoM.png');?>" alt="" style="height: 60px; width: 60px;"/></a>
           </div>
           <div class="menu">
              <a class="toggleMenu" href="#"><img src="<?php echo base_url('assets/image/nav.png');?>" alt="" /></a>
                <ul class="nav" id="nav">
                  <li>
                    <i class="fa fa-user">  <?php echo $id_user = $this->session->userdata('username')?></i>
                  </li>

                  <li><a href="<?php echo base_url('shop');?>">SHOPPING</a></li>
                  <li><a href="<?php echo base_url('Toko');?>">OPEN SHOP</a></li>
                  <li><a href="<?php echo base_url('welcome/logout');?>">LOG OUT</a></li>
                  
                <div class="clear"></div>
                </ul>
              <script type="text/javascript" src="<?php echo base_url('assets/javascript/responsive-nav.js');?>"></script>
            </div>
              <div class="clear"></div>
          </div>
          <div class="header_right">
            <ul class="icon1">
              <li><a class="active-icon fa fa-shopping-basket" href="<?php echo base_url('cart')?>"></a></li>
            </ul>
               <div class="clear"></div>

          </div>
        </div>
     </div>
    </div>
  </div>
<!-- HEADER -->

<!-- KONTEN -->
    <?php 
        $this->load->view($main_konten);
    ?> 

<!-- FOOTER -->
      <footer class="footer-distributed">

            <div class="footer-right">

              <a href="www.facebook.com/SMKTelkomSPMalang"><i class="fa fa-facebook"></i></a>
              <a href="twitter.com/smktelkommalang"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>

            </div>

            <div class="footer-left">

              <p class="footer-links">
                <a href="about">ABOUT</a>
                ·
                <a href="contact">CONTACT</a>
                ·
              </p>

              <p>SMK TELKOM MALANG &copy; 2018</p>
            </div>

      </footer>
</body>
</html>
