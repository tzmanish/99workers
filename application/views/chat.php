<style type="text/css">
	.chatbox{ background-color: grey; position: relative; top: 0px; margin: 0; padding: 0;}
	.cont{ overflow: auto; height: 500px; }
	.scren{ padding: 0; }
	.sent{background-color: blue; left: 20px; text-align: left; color: white; padding: 5px; margin-right: 55%; margin-top: 2px; border-radius: 20px 20px 20px 0;}
	.recieved{background-color: gray; right: 20px; text-align: right; color: white; padding: 5px; margin-left: 55%; margin-top: 2px;border-radius: 20px 20px 0 20px;}
	.img{width: 100%; padding: 5px;}
</style>

						<div class="col-xs-12 col-sm-8 col-md-9 mt-20">
						
							<div class="dashboard-wrapper">
							
								<h4 class="section-title">Live Chat</h4>
								
								<div class="col-md-12 cont">
							    	<div class="col-md-12 chatbox">
							    		<?php $attributes = array("name" => "chat");
							      		echo form_open_multipart("myaccount/chat/$pid/$uid", $attributes);?>   
							          	<div class="row" style="padding-left: 20px;padding-right: 20px; ">
							            	<textarea class="col-md-12" type="text" class="form-control" placeholder="Wanna say something to admin..."  name="message"></textarea>
							            	<div class="bt">
							              	<button class="col-md-6 btn btn-primary " type="submit" name="submit" value="Upload" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
							                <input 	class="btn btn-primary col-md-6 " style="background-color: white;"  type="file" class="form-control"  name="picture"></div>

											<input type="hidden" name="name" value="sent">
											<input type="hidden" name="uid" value="<?php echo $uid;?>">
											<input type="hidden" name="pid" value="<?php echo $pid;?>">
							            </div>
							      		<?php echo form_close(); ?>
							    	</div>
							    	<br><br><br><br>
						    		<?php foreach ($query as $row){
						    			if($row->sentby=="0"){?>
						    		<div class="sent"><?php echo $row->msg;?><?php if(!empty($row->image)){?><img class="img-responsive img center-img" src="<?php echo base_url();?>uploads/chat/thumb/<?php echo $row->image; ?>"><?php }?> </div>
						    		<?php }else{?>
						    		<div class="recieved"><?php echo $row->msg;?><?php if(!empty($row->image)){?><img class="img-responsive img center-img" src="<?php echo base_url();?>uploads/chat/thumb/<?php echo $row->image; ?>"><?php }?></div>
						    		<?php }}?>
						    	</div>

								
							</div>
							
						</div>

					</div>

				</div>
			
			</div>

		</div>
