<!DOCTYPE html>

<html>
<head>
    <title>Mocanto Seller</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/seller/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/seller/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/seller/mainStyle.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/seller/fontawesome/css/font-awesome.min.css">

    <script src="<?php echo base_url(); ?>/assets/javascript/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="head navbar navbar-toggleable-md navbar-light navbar-danger sticky-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
        </button>
        
        <a class="navbar-brand" href="<?php echo base_url();?>index.php/welcome/">
                <img src="<?php echo base_url(); ?>/assets/image/logoM.png" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="btn tmbl" href="<?php echo base_url('shop')?>">
                         SHOPPING
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn tmbl" href="<?php echo base_url('toko')?>">
                         DASHBOARD
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn tmbl" href="<?php echo base_url('produk')?>">
                         PRODUK
                    </a>
                </li>
            </ul>
            <a class="btn btn-default" ><i class="fa fa-user"></i><?php
                                $cek = $this->session->userdata('logged_in');
                                 if( $cek == TRUE)
                                  {
                                     echo '<strong>Selamat Datang!</strong> '.$this->session->userdata('username').'';
                                    }
            ?></a>
            <a class="btn" href="<?php echo base_url('welcome/logout')?>">Log Out<i class="fa fa-sign-out"></i></a>
        </div>
    </nav>
    <!--HEADER-->
    
    <!--CONTENT-->
    <?php 
        $this->load->view($main_konten);
    ?> 
    
    <!--FOOTER-->
    <div class="foot col-md-12" id="footer">     
        <h6 class="text-center"><b>©2017 website by SMK TELKOM MALANG</h6>
        <h6 class="text-center">
            <a href="" class="fa fa-facebook"></a>
            <a href="" class="fa fa-instagram"></a>
            <a href="" class="fa fa-twitter"></a>
            <a href="" class="fa fa-youtube"></a>
        </h6>
    </div>
</body>

</html>
