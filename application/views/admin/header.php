<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>99-WORKERS</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>mediaadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>mediaadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>mediaadmin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>mediaadmin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url();?>index.php/admin/admin/"><img src="<?php echo base_url();?>media/images/logow.png" class="img-responsive" style="height: 30px;"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="overflow: auto;">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url();?>index.php/admin/admin/">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-align-left" aria-hidden="true"></i>
            <span class="nav-link-text">Projects</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents" >
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showproject">All Projects</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showcompleatedproject">Completed Project</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showongoingproject">Project Processing</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Email">
          <a class="nav-link" href="<?php echo base_url();?>index.php/admin/admin/showsubscription">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <span class="nav-link-text">Email Subscription</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Accounts">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Accounts" data-parent="#exampleAccordion">
            <i class="fa fa-align-left" aria-hidden="true"></i>
            <span class="nav-link-text">Account</span>
          </a>
          <ul class="sidenav-second-level collapse" id="Accounts">
            <li>
              <a href="navbar.html">Available Balance</a>
            </li>
            <li>
              <a href="cards.html">Expence</a>
            </li>
            <li>
              <a href="cards.html">Total Earning</a>
            </li>
            <li>
              <a href="cards.html">Transaction Report</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUsers" data-parent="#exampleAccordion">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span class="nav-link-text">Users</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseUsers">
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showuser">All User</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showsuspendeduser">Suspended User</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Product">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Product" data-parent="#exampleAccordion">
            <i class="fa fa-align-left" aria-hidden="true"></i>
            <span class="nav-link-text">All Product</span>
          </a>
          <ul class="sidenav-second-level collapse" id="Product">
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showproduct">All Product</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/addproduct">Add Product</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
          	<i class="fa fa-th-large" aria-hidden="true"></i>
            <span class="nav-link-text">Portfolio</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showportfolio">All Portfolio</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/addportfolio">Add Portfolio</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showcategory">All Category</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/addcategory">Add Category</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-align-left" aria-hidden="true"></i>
            <span class="nav-link-text">Our Services</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showscategory">Service Categories</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/addscategory">Add Categories</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/showservice">All Services</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/addservice">Add Services</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsepro" data-parent="#exampleAccordion">
            <i class="fa fa-align-left" aria-hidden="true"></i>
            <span class="nav-link-text">Profile Settings</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsepro">
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/gset">General Settings</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/updatepass">Change Password</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/admin/updatemail">Change Email</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="msg">
          <a class="nav-link" href="<?php echo base_url();?>index.php/admin/admin/unread">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <span class="nav-link-text">Message Board</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Report">
          <a class="nav-link" href="index.html">
          	<i class="fa fa-line-chart" aria-hidden="true"></i>
            <span class="nav-link-text">Report</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>index.php/admin/admin/unread">
            <i class="fa fa-fw fa-envelope"></i>(<?php $details=$this->user1->countmsg(); if($details){echo "$details";}else{echo '0';} ?>)
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>