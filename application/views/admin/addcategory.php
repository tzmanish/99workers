
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="col-md-6 col-md-offset-3">
          <h1> ADD CATEGORY </h1>
       	  <?php $attributes = array("name" => "category");
      echo form_open("admin/admin/addcategory", $attributes);?>
          <div class="box-body">
            <div class="form-group">
              <label for="">Category</label>
                <input type="text" class="form-control"  name="name">
              </div>
            <div class="form-group">
              <label for="">Description</label>
                <textarea type="text" class="form-control"  name="descr"></textarea>
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


