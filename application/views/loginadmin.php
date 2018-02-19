<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/seller/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css')?>">
</head>
<body>
  <div class="container" style="padding-top: 200px;">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-4 col-lf-4"></div>
      <div class="col-md-4 col-sm-4 col-xs-4 col-lf-4">
        <div class="panel panel-default" style="opacity: 0.9;">
          <div class="panel-heading" style="text-align: center;">
            <h4>Login Admin</h4>
          </div>
          <div class="panel-body">
            <form method="POST" action="admin/login" id="form-login">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" name="username" autofocus placeholder="Username" class="form-control">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" name="password" placeholder="password" class="form-control" autofocus>
              </div>
              <br>
              <input type="submit" name="submit" value="LOGIN" class="btn btn-block btn-sm btn-danger">
              <?php 
                if (!empty($notif)) {
                  # code...
                  echo "<div class='alert alert-danger'> $notif </div>";
                }
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>