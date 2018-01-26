		<!-- start Footer Wrapper -->
		
		<div class="footer-wrapper scrollspy-footer">
		
			<footer class="main-footer">
			
				<div class="container">
				
					<div class="row">
						<div class="col-md-12">

							<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">

								<div class="col-md-2 col-md-offset-1 col-sm-4 col-xs-4">
									<a href=""><img class="icn" src="<?php echo base_url();?>media/images/fb.png"></a>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<a href=""><img class="icn" src="<?php echo base_url();?>media/images/yt.png"></a>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<a href=""><img class="icn" src="<?php echo base_url();?>media/images/in.png"></a>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-6">
									<a href=""><img class="icn" src="<?php echo base_url();?>media/images/bl.png"></a>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-6">
									<a href=""><img class="icn" src="<?php echo base_url();?>media/images/tw.png"></a>
								</div>

							</div>
							<div class="gap"></div>	
							<br><br>
							<div class="col-md-12">
								<p style="text-align: center;">99workers is an ICANN-accredited Graphics Design and Web Development Company . In addition to great pricing and a
							commitment to world-class customer service, we offer Graphic Design, Print Design, Website Builder, SEO Service.</p>
							</div>

						</div>
						<br>
					
						<div class="gap"></div>	<div class="gap"></div>	<div class="gap"></div>	
						
						<div class="col-sm-12 col-md-12">
						
							<div class="row">
								
								<div class="col-xs-12 col-sm-4 col-md-3 mt-25-sm">
									<h5 class="footer-title">QUICK LINK</h5>
									<ul class="footer-menu">
										<li><a href="#">Portfolio</a></li>
										<li><a href="#">Pricing</a></li>
										<li><a href="#">Login</a></li>
										<li><a href="#">Sign Up</a></li>
										<li><a href="#">Start A Project</a></li>
										<li><a href="#">Client Reviews</a></li>
									</ul>
								</div>
								
								<div class="col-xs-12 col-sm-4 col-md-3 mt-25-sm">
									<h5 class="footer-title">OUR SERVICES</h5>
									<ul class="footer-menu">
										<li><a href="#">Graphics Design</a></li>
										<li><a href="#">Logo Design</a></li>
										<li><a href="#">Web Development</a></li>
										<li><a href="#">Theme Design</a></li>
										<li><a href="#">Plugins Development</a></li>
										<li><a href="#">Mobile Apps</a></li>
										<li><a href="#">API Integration</a></li>
									</ul>
								</div>
								
								<div class="col-xs-12 col-sm-4 col-md-3 mt-25-sm">
								
									<h5 class="footer-title">INFORMATION</h5>
									<ul class="footer-menu">
										<li><a href="#">Trust and Security</a></li>
										<li><a href="#">Registration Agreement</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Contact US</a></li>
									</ul>
								
								</div>


								<div class="col-xs-12 col-sm-4 col-md-3 mt-25-sm">
								
									<h5 class="footer-title">OUR COMPANY</h5>
									<ul class="footer-menu">
										<li><a href="#">About US</a></li>
										<li><a href="#">Why Choose Us</a></li>
										<li><a href="#">Support</a></li>
										
									</ul><br>
									<a href="<?php echo base_url(""); ?>"><img src="<?php echo base_url();?>media/images/pay.png" class="img-responsive"  style="height:100px;"></a> 
								
								</div>

							</div>

						</div>
						
					</div>
					
				</div>
				
			</footer>
			
			<!--<footer class="bottom-footer">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-xs-12 col-sm-6 col-md-4">
				
							<p class="copy-right">Copyright 2012 - 2018 99workers | All Rights Reserved</p>
							
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-4">
						
							
						
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-4">
							<ul class="bottom-footer-menu for-social">
								<li><a href="#"><i class="icon-social-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
								<li><a href="#"><i class="icon-social-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
								<li><a href="#"><i class="icon-social-google" data-toggle="tooltip" data-placement="top" title="google plus"></i></a></li>
								<li><a href="#"><i class="icon-social-instagram" data-toggle="tooltip" data-placement="top" title="instrgram"></i></a></li>
							</ul>
						</div>
					
					</div>

				</div>
				
			
			</footer>-->
			
		</div>
		
		<!-- end Footer Wrapper -->
		
	</div> 
	
	<!-- end Container Wrapper -->
 
 
<!-- start Back To Top -->

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

 
<!-- Core JS -->
<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>media/js/core-plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>media/js/customs.js"></script>

<!-- Only in Home Page -->
<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.flexdatalist.js"></script>
<script type="text/javascript">
    function subemail()
    {
           var email = $("#subemail").val();
           alert(email);
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/subscribe');?>",
                    data: {email: email},
                    beforeSend: function () {
                     $('.loading').show();
                    },
                    success: function (response) {
                     $('#submsg').html(html);
                     $('.loading').fadeOut("slow");
                    }
                });
    }
  </script>
</body>

</html>