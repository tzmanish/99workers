  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All Projects </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>TXN id</th>
                  <th>User Details</th>
                  <th>Project Name</th>
                  <th>Project Status</th>
                  <th>Amount</th>
                  <th>Payment Status</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>TXN id</th>
                  <th>User Details</th>
                  <th>Project Name</th>
                  <th>Project Status</th>
                  <th>Amount</th>
                  <th>Payment Status</th>
                </tr>
              </tfoot>
              <tbody>
              	
                <?php foreach ($query as $row) {?>
                <tr>
                  <td><?php echo $row->txn_id;?></td>
                  <td><?php echo $row->fname; echo" "; echo $row->lname; echo"<br>"; echo $row->email;?></td>
                  <td><?php echo $row->pname;?></td>
                  <td><?php echo $row->pstatus;?></td>
                  <td>$ <?php echo $row->payment_gross;?></td>
                  <td><?php echo $row->payment_status; echo"<br>";  echo $row->payer_email;  ?></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>


