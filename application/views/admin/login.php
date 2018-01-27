<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <link href="<?php echo base_url();?>mediaadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>mediaadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>mediaadmin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>mediaadmin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
         <?php $attributes = array("name" => "category");
      echo form_open("admin/loginadmin", $attributes);?>
          <div class="form-group">
            <label for="exampleInputEmail1">User Id</label>
            <input class="form-control" id="exampleInputEmail1" type="text" name="aaid" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="pass" placeholder="Password">
          </div>
          <button class="btn btn-primary btn-block" type="submit">Login</button>
        
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  
    <script src="<?php echo base_url();?>mediaadmin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>mediaadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="<?php echo base_url();?>mediaadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
