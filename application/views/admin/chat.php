<style type="text/css">
	.chatbox{ background-color: grey; position: fixed; top: 60px; margin: 0; padding: 0;}
	.scren{ padding: 0; }
	.sent{background-color: #4169e1; left: 20px; text-align: left; color: white; padding: 5px; margin-right: 55%; margin-top: 2px; border-radius: 20px 20px 20px 0;}
	.recieved{background-color: gray; right: 20px; text-align: right; color: white; padding: 5px; margin-left: 55%; margin-top: 2px;border-radius: 20px 20px 0 20px;}
	.img{width: 100%; padding: 5px;}
        #file{
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;}
    #file + label {
    color: white;
    background-color: grey;
    display: inline-block;cursor: pointer;
}

#file:focus + label,
#file + label:hover {
    background-color: black;
}
	
</style>

<div class="content-wrapper">
    <div class="container-fluid scren">
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
      		echo form_open_multipart("admin/admin/chat/$pid/$uid", $attributes);?>   
          	<div class="row" style="padding-left: 20px;padding-right: 20px; ">
            	<textarea class="col-md-8" type="text" class="form-control" placeholder="Type something..."  name="message"></textarea>
              	<button class="col-md-1 btn btn-primary" type="submit" name="submit" value="Upload" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                <input  class="col-md-1 "  type="file" id="file" class="form-control"  name="picture"><label class="col-md-1 btn " for="file">Choose a file</label>

				<input type="hidden" name="name" value="sent">
				<input type="hidden" name="uid" value="<?php echo $uid;?>">
				<input type="hidden" name="pid" value="<?php echo $pid;?>">
            </div>
      		<?php echo form_close(); ?>
    	</div>
    </div>
</div>