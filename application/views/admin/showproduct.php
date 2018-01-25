
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> CATEGORIES </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Cost</th>
                  <th>Description</th>
                  <th>Link</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Cost</th>
                  <th>Description</th>
                  <th>Link</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
              	
                <?php foreach ($query as $row) {?>
                <tr>
                  <td></td>
                  <td><?php echo $row->pname;?></td>
                  <td><?php echo $row->cost;?></td>
                  <td><?php echo $row->pdescr;?></td>
                  <td><?php echo $row->link;?></td>
                  <td><a href="<?php echo base_url();?>index.php/admin/admin/deleteproduct/<?php echo $row->pid; ?>" class="btn">Delete</a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>


