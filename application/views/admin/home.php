
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">TOTAL PROJECTS: <?php $details=$this->user1->totalprojectcount(); if($details){echo $details; }else{echo "0";}?></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              	<i class="fa fa-check-square-o" aria-hidden="true"></i>
              </div>
              <div class="mr-5">COMPLEATED PROJECTS:<?php $details=$this->user1->comprojectcount(); if($details){echo $details; }else{echo "0";}?></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
              </div>
              <div class="mr-5">ONGOING PROJECTS:<?php  $details=$this->user1->onprojectcount(); if($details){echo $details; }else{echo "0";}?></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-credit-card" aria-hidden="true"></i>
              </div>
              <div class="mr-5">TOTAL PROJECT WORTH: $<?php $i=0; foreach($query2 as $row){if($row->pstatus=="0" || $row->pstatus=="1") { $i=$i+$row->cost;} }echo $i;?></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              	<i class="fa fa-credit-card" aria-hidden="true"></i>
              </div>
              <div class="mr-5">PAYMENT COLLECTED: $<?php $j=0; foreach($query1 as $row){if($row->payment_status=="Completed") {$j=$j+$row->payment_gross;}} echo $j;?></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              	<i class="fa fa-credit-card" aria-hidden="true"></i>
              </div>
              <div class="mr-5">PAYMENT DUE: $<?php echo $k=$i-$j;?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

