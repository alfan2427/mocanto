<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome Admin</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/seller/fontawesome/css/font-awesome.min.css">
    <link href="<?php echo base_url('assets/grayscale.css');?>" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">MOCANTO </span> Database 
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('admin/home')?>">BACK</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="brand-heading">Welcome Admin</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
        foreach ($permohonan as $p) {
            # code...
    ?>
    <section id="user" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php echo $p->fullname?></h2>
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td rowspan="3"><?php echo "<img src='".base_url()."uploads/identitas/".$p->file_identitas."'>" ?></td>
                                    <td style="width: 100vh;">Nama Pemohon :<?php echo $p->fullname?>
                                        <br>Dengan data ini kami memohon untuk berjualan di website Mocanto...
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kantin :<?php echo $p->room?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo base_url()?>admin/update_hak/<?php echo $p->id_user?>"><i class="fa fa-check">Terima</i></a>
                                        <a class="btn btn-danger" href="<?php echo base_url()?>admin/update_hak_1/<?php echo $p->id_user?>"><i class="fa fa-close">Tolak</i></a>
                                    </td>
                                </tr>
                            </thead>
                        </table>
            </div>
        </div>
    </section>
                      <?php 
        }
    ?>

    <!-- Core JavaScript Files -->
    <script src="<?php echo base_url('assets/javascript/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/javascript/bootstrap.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/javascript/grayscale.css');?>"></script>

</body>

</html>

<style type="text/css">
    img{
        width: 30em;
        height: 30em;
    }
</style>
