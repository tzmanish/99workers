
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="col-md-6 col-md-offset-3">
          <h1> ADD PRODUCT </h1>
       	  <?php $attributes = array("name" => "product");
      echo form_open("admin/admin/addproduct", $attributes);?>
          <div class="box-body">
            <div class="form-group">
              <label for="">Product</label>
                <input type="text" class="form-control"  name="pname">
              </div>
            <div class="form-group">
              <label for="">Description</label>
                <input type="text" class="form-control"  name="pdescr">
              </div>
            <div class="form-group">
              <label for="">Image</label>
                <input type="file" class="form-control"  name="pimage">
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
       </div>

    </div>
  </div>


