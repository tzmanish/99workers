<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>99workers</title>
	<meta name="description" content="HTML template for multiple tour agency, local agency, traveller, tour hosting based on Twitter Bootstrap 3.x.x" />
	<meta name="keywords" content="tour agency, tour guide, travel, trip, holiday, vocation, relax, adventure, virtual tour, tour planner" />
	<meta name="author" content="crenoveative">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>/media/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>/media/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>/media/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>/media/images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?php echo base_url();?>/media/images/ico/favicon.png">

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/media/bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="<?php echo base_url();?>/media/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/media/css/plugin.css" rel="stylesheet">

	<!-- CSS Custom -->
	<link href="<?php echo base_url();?>/media/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/media/css/style1.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/media/css/style2.css" rel="stylesheet">
	
	<!-- Add your style -->
	<link href="<?php echo base_url();?>/media/css/your-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>

<body class="home">

	<!--<div id="introLoader" class="introLoading"></div>-->

	<!-- start Container Wrapper -->
	
	<div class="container-wrapper">

		<!-- start Header -->
		
		<header id="header">

			<!-- start Navbar (Header) -->
			<nav class="navbar navbar-default navbar-fixed-top" style="height: 50px">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="<?php echo base_url(""); ?>"><img src="<?php echo base_url();?>media/images/logo.png" class="img-responsive"  style="height:35px;"></a> <br>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
								<a href="#"><i class="fa fa-weixin" aria-hidden="true"></i> Live Chat</a>
								
							</li>
							<li>
								<a href="#">Make Money</a>
								
							</li>
							<li>
								<a href="#">Pay Us</a>
								
							</li>
							<li>
								<a href="<?php echo base_url();?>index.php/cart" style="background-color: grey;color: #fff;opacity: 0.6;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> (<?php 
            if(!empty($this->session->userdata('uid')))
            {
                $detail1=$this->user->countproduct($this->session->userdata('uid'));
                    if(!empty($detail1))
                      { 
                        echo $detail1; 
                      }
                  else{
                    echo"0";
                    }
            }
            elseif(!empty($this->cart->contents()))
            {
              $i=0;
              $cart = $this->cart->contents();
              foreach($cart as $items)
              {
                $i++;
              }
               echo $i;
            }
            else{echo"0";} ?>)</a>
								
							</li>
							<li>
								<a href="<?php echo base_url();?>index.php/myaccount/showproject" style="background-color: grey;color: #fff;opacity: 0.6;"><i class="fa fa-bell-o" aria-hidden="true"></i> (<?php $details=$this->user->countmsg($this->session->userdata('uid')); if($details){echo "$details";}else{echo '0';} ?>)</a>
								
							</li>
							<?php if ($this->session->userdata('fname')){ ?> 
							<li>
								<a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo $result = substr($this->session->userdata('fname'), 0, 6); ?>&nbsp;&nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
								<ul>
									<li><a href="<?php echo base_url();?>index.php/myaccount/">Dashboard</a></li>
									<li><a href="<?php echo base_url();?>index.php/myaccount/showproject">My Project</a></li>
									<li><a href="guide-detail-setting-change-pass.html">Accout</a></li>
									<li><a href="<?php echo base_url();?>index.php/myaccount/editp">Profile</a></li>
									<li><a href="guide-detail-setting-change-pass.html">Setting</a></li>
									<li><a href="guide-detail-setting-change-pass.html">Report</a></li>
									<li><a href="<?php echo base_url();?>index.php/home/logout">Log Out</a></li>
								</ul>
							</li>
							
							<?php } else{?>
							<li>
								<a  style="background-color: grey;color: #fff;">&nbsp;&nbsp;LogIn&nbsp;&nbsp;</a>
								<ul style="padding-right: 10px;padding-left: 10px;">
	                                <?php $attributes = array("name" => "loginform");
            echo form_open("login", $attributes);?>
                                    <br>
									<input type="text" class="form-control" placeholder="Email"  name="email">
									<br>
									<input type="Password" class="form-control" placeholder="Password" name="password">
									<br>
									<button type="submit" class="btn btn-primary btn-block " ><i class="fa fa-lock"></i> Login</button>
									<br>
								</ul>
							</li>
							<li><a href="<?php echo base_url();?>index.php/signup" style="background-color:#008000;color: #fff;">&nbsp;SignUp &nbsp;<i class="fa fa-unlock-alt" aria-hidden="true"></i>&nbsp;&nbsp;</a></li>
							<?php }?>
						</ul>
				
					</div><!--/.nav-collapse -->
					<div class="nav-mini-wrapper">
						<ul class="nav-mini">
						</ul>
					</div>
				 </div>
				</div>
				 <div class="row" style="background-color: #000;height: 45px; color: #fff;padding-top: 5px;margin-left: 0px;margin-right: 0px;">
				 	<div class="container">
				 	<div  id="navbar" class="navbar-nav-wrapper1">
				 		<ul class="nav navbar-nav navbar-nav1" id="responsive-menu">
						
							<li>
								<a href="<?php echo base_url();?>index.php/home/whoweare" style=" color: #fff;"><i class="fa fa-users" aria-hidden="true"></i> Who We Are</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>index.php/home/services" style=" color: #fff;"><i class="fa fa-rocket" aria-hidden="true"></i> Our Services</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>index.php/home/Product" style=" color: #fff;"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Product</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>index.php/home/portfolio" style=" color: #fff;"><i class="glyphicon glyphicon-th"></i> Portfolio</a>
							</li>
							<li>
								<a href="#" style=" color: #fff;"><i class="glyphicon glyphicon-question-sign" ></i>Help</a>
								<ul>
	
									<li><a href="#">Support Ticket</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">FAQ</a></li>
									
								</ul>
							</li>
						</ul>
				 	</div>
				 	<div class="nav-mini-wrapper">
						<ul class="nav-mini">
							<li style="float:right;background-color:#008000;"><a data-toggle="modal" href="<?php echo base_url();?>index.php/myaccount/startproject" style="background-color:#008000;color: #fff;text-transform:capitalize;">&nbsp;&nbsp;&nbsp;Start Project &nbsp;&nbsp;</a></li>
						</ul>
				      <div id="slicknav-mobile" style="color: #000;background-color: #fff;"></div>
					</div>
			     </div>
                </div>
			</nav>
			<!-- end Navbar (Header) -->

		</header>
		
		<!-- end Header -->