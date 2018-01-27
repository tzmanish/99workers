<div class="container">
      <h1>My Cart</h1>  
        <div class="col-xs-12 col-md-9" >
            <?php 
                if ($cart = $this->cart->contents()){$i=0;
                    foreach ($cart as $item ) {
              $details=$this->user->showproduct1($item['id']);
             ?>
            <div class="col-xs-12 col-md-12  cart-layout cart_item" id="cart_<?php echo $item['id'];?>">
                <div class="col-md-1 col-xs-12 cart-line text-right">
                    <h5><a href="<?php echo base_url()?>index.php/cart/removecart/<?php echo $item['rowid'];?>">X</a></h5>
                    <span class="hidden" id="itemid_<?php echo $i;?>"><?php echo $item['rowid'];?></span>
                </div>
                <div class="col-md-2 col-xs-12">
                    <img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $details[0]->pimage;?>" class="img-responsive center-block" style="height: 120px;">
                </div>
                <div class="col-md-2 col-xs-12 cart-line">
                    <h5><a href="" style="color: #000;"><?php  echo $details[0]->pname;?> </a></h5>
                </div>
                <div class="col-md-2 col-xs-3 cart-line text-center">
                    <h5>&#8377;  <span id="itemcost_<?php echo $i;?>"><?php echo  $details1[0]->cost;?></span></h5>
                </div>
            </div>
            <div style="boder-bottom:solid 1ps #ccc;"></div><?php $i++;}}?>
        </div>
        <div class="col-xs-12 col-md-9" >
            <?php foreach ($query as $row ) {
             ?>
            <div class="col-xs-12 col-md-12  cart-layout cart_item" id="cart_<?php echo $row->id;?>">
                <div class="col-md-1 col-xs-6 cart-line text-right">
                    <h5><a href="" onclick="javascript:remove_cart(<?php echo $row->id;?>);">X</a></h5>
                </div>
                <div class="col-md-2 col-xs-12">
                    <img src="<?php echo base_url();?>uploads/product/thumb/<?php echo $row->pimage;?>" class="img-responsive center-block" style="height: 120px;">
                </div>
                <div class="col-md-2 col-xs-12 cart-line">
                    <h5><a href="" style="color: #000;"><?php  echo $row->pname;?></a></h5>
                </div>
                <div class="col-md-2 col-xs-3 cart-line text-center">
                    <h5>&#8377;  <span id="itemcost_<?php echo $row->id;?>"><?php  
                     
                    echo $row->cost;?></span></h5>
                </div>
            </div><div style="boder-bottom:solid 1ps #ccc;"></div>
            <?php }?>
        </div>
        <div class="col-md-3" style="border-left:solid 1px #ccc;border-right:solid 1px #ccc;"
            <div class="col-md-12">
            <table class="table table-hover ">
                <tbody>
                    <tr>
                        
                        
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>&#8377;
                  <span id="totalcost" >
                    <?php $i=0;
                    if(!empty($this->session->userdata('uid'))){
                   foreach ($query as $row ) {
                   $i=$i+($row->cost*$row->item);}}
                   echo $i;?></span></strong></h5></td>
                    </tr>
                    <tr>
                        
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>0</strong></h5></td>
                    </tr>
                    <tr>
                        
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>&#8377;
                  <span id="totalcost1" ><?php $i=0;
                  if(!empty($this->session->userdata('uid'))){
                   foreach ($query as $row ) {
                   $i=$i+($row->cost*$row->item);}}
                   echo $i;?></span></strong></h3></td>
                    </tr>
                </tbody>
            </table>
            <?php if($i!='0'){?>
            <a class="btn col-xs-12 col-md-12 btn-lg btn-primary" href="<?php echo base_url(); ?>index.php/checkout" style="" > PROCEED</a><?php } else{?>
            <a class="btn col-xs-12 col-md-12 btn-lg btn-primary" href="<?php echo base_url(); ?>" style="" >CONTINUE SHOPPING</a><?php }?>
        </div>
        </div>
        </div>
    </div>
</div>
