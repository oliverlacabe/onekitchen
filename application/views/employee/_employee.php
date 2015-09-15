
<div class="container-fluid">
 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#_add_emp">Add Employee</button>
 <div class="col-md-4 pull-right">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for Employee">
        <span class="input-group-btn">
          <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></button>
        </span>
    </div>
  </div><br/><br/> 
<div class="table-responsive">
  <div id="emp_table">
    <?php $this->load->view('employee/tables/emp_table'); ?>
  </div>
</div>
</div>

<div class="modal fade" id="_add_emp">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FFFEC9;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add Employee</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
           <div class="err_msg"><strong id="msg_content">hello</strong></div>
           <form class="form-horizontal" role="form" id = "add_emp_form" onsubmit="return false">
            <div class="form-group">
              <label class="control-label col-sm-4">Last Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="lname" required>
                </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-4">First Name</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" name="fname" required>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-4">Middle Name</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" name="mname">
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-4">Designation</label>
              <div class="col-sm-8">
                  <select class="form-control" name="designation" required>
                    <option value='<?php echo "0"; ?>'>- Select Designation -</option>
                    <?php 
                      $desig = $this->employees->get_designation();
                      foreach ($desig as $key => $val) {
                        extract($val);
                        echo "<option value='".$id."'>".$designation_name."</option>";
                      }
                     ?>
                  </select>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-4">Restaurant</label>
              <div class="col-sm-8">
                  <select class="form-control" name="resto" required>
                    <option value='<?php echo "0"; ?>'>- Select Restaurant -</option>
                    <option value='<?php echo "1"; ?>'>Ayo Cafe</option>
                    <option value='<?php echo "2"; ?>'>Canto Fresco</option>
                  </select>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-4">Address</label>
              <div class="col-sm-8">
                  <textarea class="form-control" name="address" required></textarea>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-4">Contact Number</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" name="contact">
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-4">Tin Number</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" name="tin">
              </div>
              </div>
              <div class="form-group">
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                <button type="reset" style="margin-right: 10px;" class="btn btn-default pull-right">Reset</button>
                <button type="submit" style="margin-right: 10px;" class="btn btn-warning pull-right">Save</button>
               </div>
            </div>
          </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
