
<div class="container-fluid">
      <div class="col-md-4">
           <div id="desig_alert"></div> 
           <form id="add_desig" method="post" role="form" onsubmit="return false" >
            <div class="form-group">
              <label>Designation Name</label>
              <input type="text" name="desig" class="form-control">
            </div>
            <div class="form-group">
              <label>Rate</label>
              <input type="number" name="salary" class="form-control">
              
            </div>
            <button type="submit" class="btn btn-warning">Save</button>
          </form>

      </div>

      <div class="col-md-8">
        <label>Designation List</label>
        <div class="table-responsive" id="desig_list">
          <?php $this->load->view('employee/tables/desig_table'); ?>
        </div>
      </div>
</div>