
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
                  <th>Project Name</th>
                  <th>Description</th>
                  <th>Budget</th>
                  <th>Status</th>
                  <th>Category</th>
                  <th>user</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Project Name</th>
                  <th>Description</th>
                  <th>Budget</th>
                  <th>Status</th>
                  <th>Category</th>
                  <th>user</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
              	
                <?php foreach ($query as $row) {?>
                <tr>
                  <td><?php echo $row->pname;?></td>
                  <td><?php echo $row->dscr;?></td>
                  <td><?php echo $row->cost;?></td>
                  <td><?php if($row->pstatus==1){ echo "compleated";}else if($row->pstatus==0){echo "ongoing";}else{echo "suspended";}?></td>
                  <td><?php echo $row->scname;?></td>
                  <td><?php echo $row->fname;?> <?php echo $row->lname;?></td>
                  <td>
                    <a href="<?php echo base_url();?>index.php/admin/admin/chat/<?php echo $row->pid;?>/<?php echo $row->uid;?>" class="btn">Chat(<?php $details=$this->user1->countmsgi($row->pid ); if($details){echo "$details";}else{echo '0';} ?>)</a>
                    <?php if($row->pstatus==1 || $row->pstatus==0){ ?>
                    <a href="<?php echo base_url();?>index.php/admin/admin/projectstatus/<?php echo $row->pid;?>/<?php echo $row->pstatus;?>" class="btn"><?php if($row->pstatus==0){ echo "compleated";}else if($row->pstatus==1){echo "resume";}?></a>
                    <?php }?>
                    <a href="<?php echo base_url();?>index.php/admin/admin/suspend/<?php echo $row->pid;?>/<?php echo $row->pstatus;?>" class="btn" style="color: red;"><?php if($row->pstatus==0 || $row->pstatus==1){ echo "Suspend";}else{echo "resume";}?></a>
                  </td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>


