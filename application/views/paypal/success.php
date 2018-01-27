<div class="container-fluid">
<div class="col-md-6 col-md-offset-3" style="background-color: #fff;padding-top: 5%;padding-bottom: 5%;">
    <h2 style="font-family: 'quicksandbold'; font-size:16px; color:#313131; padding-bottom:8px;">Dear Member</h2>
    <span style="color: #646464;">Your payment was successful, thank you for purchase.</span><br/>
    <span style="color: #646464;">Item Number : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09"><?php echo $item_number; ?></strong>
  	</span><br/>
	<span style="color: #646464;">TXN ID : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09"><?php echo $txn_id; ?></strong>
  	</span><br/>
	<span style="color: #646464;">Amount Paid : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09">$<?php echo $payment_amt.' '.$currency_code; ?></strong>
  	</span><br/>
	<span style="color: #646464;">Payment Status : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09"><?php echo $status; ?></strong>
  	</span><br/>
</div>
</div>
<script>
setTimeout(function() {
  window.location.href = "<?php echo base_url();?>index.php/myaccount/";
}, 3000);
</script>