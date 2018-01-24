
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="col-md-6 col-md-offset-3">
          <h1> ADD SERVICE </h1>
       	  <?php $attributes = array("name" => "service");
      echo form_open_multipart("admin/admin/addservice", $attributes);?>
          <div class="box-body">
            <div class="form-group">
              <label for="">Service</label>
                <input type="text" class="form-control"  name="sname">
              </div>
            <div class="form-group">
              <label for="">Short Description</label>
                <input type="text" class="form-control"  name="short_descr">
              </div>
            <div class="form-group">
              <label for="">Description</label>
                <input type="text" class="form-control"  name="sdescr">
              </div>
            <div class="form-group">
              <label for="">Image</label>
                <input type="file" class="form-control"  name="picture">
              </div>
            <div class="form-group">
              <label for="">Service Category</label>
              <select class="form-control" name="scid">
                <?php foreach ($query as $row) {?>
                <option value="<?php echo $row->scid;?>"><?php echo $row->scname; ?></option><?php }?>
              </select>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit" value="Upload">Submit</button>
            </div>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
       </div>

    </div>
  </div>


