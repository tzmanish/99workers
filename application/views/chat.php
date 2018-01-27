<style type="text/css">
	.chatbox{ background-color: grey; position: fixed; top: 600px; margin: 0; padding: 0;}
	.scren{ padding: 0; }
	.sent{background-color: blue; left: 20px; text-align: left; color: white; padding: 5px; margin-right: 55%; margin-top: 2px; border-radius: 20px 20px 20px 0;}
	.recieved{background-color: gray; right: 20px; text-align: right; color: white; padding: 5px; margin-left: 55%; margin-top: 2px;border-radius: 20px 20px 0 20px;}
	.img{width: 100%; padding: 5px;}
	
</style>

<div class="col-xs-12 col-sm-8 col-md-9 mt-20">
						
							<div class="dashboard-wrapper">
							
								<h4 class="section-title">Hello <?php echo $this->session->userdata('fname'); echo " "; echo $this->session->userdata('lname');?></h4>
								
								<div class="col-md-12" style="overflow: scroll;">
    		<?php foreach ($query as $row){
    			if($row->sentby=="0"){?>
    		<div class="sent"><?php echo $row->msg;?><?php if(!empty($row->image)){?><img class="img-responsive img center-img" src="<?php echo base_url();?>uploads/chat/thumb/<?php echo $row->image; ?>"><?php }?> </div>
    		<?php }else{?>
    		<div class="recieved"><?php echo $row->msg;?><?php if(!empty($row->image)){?><img class="img-responsive img center-img" src="<?php echo base_url();?>uploads/chat/thumb/<?php echo $row->image; ?>"><?php }?></div>
    		<?php }}?>
    	</div>

    	<div class="col-md-12 chatbox">
    		<?php $attributes = array("name" => "chat");
      		echo form_open_multipart("myaccount/chat/$pid/$uid", $attributes);?>   
          	<div class="row" style="padding-left: 20px;padding-right: 20px; ">
            	<textarea class="col-md-8" type="text" class="form-control" placeholder="Type something..."  name="message"></textarea>
              	<button class="col-md-1" type="submit" name="submit" value="Upload" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                <input 	class="col-md-1" style="background-color: white;"  type="file" class="form-control"  name="picture">

				<input type="hidden" name="name" value="sent">
				<input type="hidden" name="uid" value="<?php echo $uid;?>">
				<input type="hidden" name="pid" value="<?php echo $pid;?>">
            </div>
      		<?php echo form_close(); ?>
    	</div>
								
							</div>
							
						</div>

					</div>

				</div>
			
			</div>

		</div>
