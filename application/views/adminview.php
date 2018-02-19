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
                        <a href="#user">USER</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#produk">PRODUK</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#transaksi">TRANSAKSI</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('admin/permohonan')?>">PERMOHONAN</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url('admin/logout')?>">LOGOUT</a>
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

    <section id="user" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2>User</h2>
                    <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">ID User</th>
                                    <th style="text-align: center;">Username</th>
                                    <th style="text-align: center;">Nama</th>
                                    <th style="text-align: center;">No HP</th>
                                    <th style="text-align: center;">Ruangan/Kantin</th>
                                    <th style="text-align: center;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=0;
                                    foreach ($user as $u) {
                                        # code...
                                ?>
                                    <tr>
                                        <td><?php echo ++$no; ?></td>
                                        <td><?php echo $u->id_user?></td>
                                        <td><?php echo $u->username; ?></td>
                                        <td><?php echo $u->fullname?></td>
                                        <td><?php echo $u->no_hp?></td>
                                        <td><?php echo $u->room?></td>
                                        <td><?php echo $u->hak_akses?></td>
                                    </tr>
                                <?php 
                                    }
                                    $no++
                                ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </section>

    <section id="produk" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-12">
                    <h2>PRODUK</h2>
                    <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">ID Produk</th>
                                    <th style="text-align: center;">Penjual</th>
                                    <th style="text-align: center;">Nama Produk</th>
                                    <th style="text-align: center;">Harga</th>
                                    <th style="text-align: center;">Uraian</th>
                                    <th style="text-align: center;">Kategori</th>
                                    <th style="text-align: center;">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=0;
                                    foreach ($produk as $p) {
                                        # code...
                                ?>
                                    <tr>
                                        <td><?php echo ++$no; ?></td>
                                        <td><?php echo $p->id_produk; ?></td>
                                        <td><?php echo $p->fullname?></td>
                                        <td><?php echo $p->nama_produk?></td>
                                        <td><?php echo $p->harga?></td>
                                        <td><?php echo $p->uraian?></td>
                                        <td><?php echo $p->kategori?></td>
                                        <td><?php echo $p->status_produk?></td>
                                    </tr>
                                <?php 
                                    }
                                    $no++
                                ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </section>

    <section id="transaksi" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-condensed">
                    <h2>TRANSAKSI</h2>
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">ID transaksi</th>
                                <th style="text-align: center;">Tanggal Transaksi</th>
                                <th style="text-align: center;">Pembeli</th>
                                <th style="text-align: center;">Penjual</th>
                                <th style="text-align: center;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=0;
                                foreach ($transaksi as $t) {
                                    # code...
                            ?>
                                <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $t->id_transaksi; ?></td>
                                    <td><?php echo $t->tgl_transaksi?></td>
                                    <td><?php echo $t->pembeli?></td>
                                    <td><?php echo $t->penjual?></td>
                                    <td><?php echo $t->status?></td>
                                </tr>
                            <?php 
                                }
                                $no++
                            ?>
                         </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Core JavaScript Files -->
    <script src="<?php echo base_url('assets/javascript/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/javascript/bootstrap.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/javascript/grayscale.css');?>"></script>

</body>

</html>
