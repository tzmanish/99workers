<div class='container'>
    <div class='row' style='padding-top:25px; padding-bottom:25px;'>
        <center><h2>Select Payment Method</h2></center><hr>
                                <div class='col-md-4 col-md-offset-1'>

                                            <div class="formlogin">

                                                <div class="row gap-10 mt-10">
                                                    <div class="col-xs-5 col-sm-5">
                                                        <div class="checkbox checkbox-success">
                       
                                                            <div class="radio radio-danger">
                                                                <input type="radio" name="radio2" id="radio3" value="option1" checked>
                                                                <label for="radio3">
                                                                <b>PayPal</b>
                                                                </label>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-5 col-sm-5  " style="width: 100px padding-top: 150px;">
                                                        <img src="<?php echo base_url(); ?>media/images/paypal-logo.png"  >
                                                    </div>
                                                </div><br>
                                            </div>
                                
                                 </div>


                 <div class="col-xs-12 col-sm-5 col-md-5 col-md-offset-1 ">
                                <div class="formlogin">
                                    <div class="sidebar-booking-inner">
                                         <?php $attributes = array("name" => "project");
      echo form_open_multipart("myaccount/pay", $attributes);?>
                                                        <input type="hidden" name="pid" value="<?php echo $pid;?>">
                                                        <input type="hidden" name="uid" value="<?php echo $uid;?>">
                                                        <input type="hidden" name="type" value="project">
                                        <ul class="price-summary-list">
                                 
                                            <div class="row gap-10 mt-10">
                                                    <div class="col-xs-6 col-sm-6">
                                                        <b>Deposit Currency</b>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 text-right">
                                                        USD
                                                    </div>
                                                </div><br>
                                            
                                            <li>
                                                <div class="row gap-10 mt-10">
                                                    <div class="col-xs-6 col-sm-6">
                                                        
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 text-right ">
                                                        Amount
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 text-right">
                                                        Currency
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="divider"></li>
                                            
                                            <li>
                                                <div class="row gap-10 mt-10">
                                                    <div class="col-xs-6 col-sm-6">
                                                        Deposit Amount
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 text-right ">
                                                        <input type="number" name="amount" value="" class="col-xs-12" required>
                                                    </div>
                                                    <div class="col-xs-3 col-sm-3 text-right" >
                                                        USD
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="divider"></li>
                                            
                                            <li>
                                                <button class="btn btn-primary col-md-12" type="submit">Confirm Amount</button>
                                            </li>
                                            <p style="text-align: justify; font-size: 12px;">You agree to authorize the use of your PayPal account for this deposit and future payments.<br> PayPal does not support prepaid and gift cards as funding source.</p>
                                            
                                        </ul>
                                     </div>    
                                </div>           
                    </div>    
                                <?php echo form_close(); ?>
   </div>      
</div>  

            
        

