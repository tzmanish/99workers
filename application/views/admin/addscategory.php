
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="col-md-6 col-md-offset-3">
          <h1> ADD SERVICE CATEGORY </h1>
       	  <?php $attributes = array("name" => "scategory");
      echo form_open("admin/admin/addscategory", $attributes);?>
          <div class="box-body">
            <div class="form-group">
              <label for="">Service-Category</label>
                <input type="text" class="form-control"  name="scname">
              </div>
            <div class="form-group">
              <label for="">Description</label>
                <input type="text" class="form-control"  name="scdescr">
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


