<div class="container">
<div class="row">
	<div class="col-xs-12 col-sm-10 col-md-offset-1  col-md-10">
		<center><h1 >Services</h1></center><br>
        <?php if($query)
						    {foreach ($query as $row) {?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">			   
	    <div class="hovereffect">
	        <img class="img-responsive" src="<?php echo base_url();?>uploads/service/thumb/<?php echo $row->image;?>" alt="">
	        <div class="overlay">
	           <h2><?php echo $row->sname;?></h2>
	           <a class="info" href="<?php echo base_url();?>index.php/home/sdetails/<?php echo $row->sid;?>">Know More</a>
	        </div><br>
	    </div>
	    </div>
	    <?php }}?>
	</div>
</div>
</div>
<br>




