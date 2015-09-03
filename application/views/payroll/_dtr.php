
<div class="container-fluid">
    <label>List Of Employee</label>
     <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>Name</th>
          <th>Designation</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>Ronald Rogan</td>
          <td>Dish Washer</td>
          <td width="200px;">
            <a class="label label-primary a-label" data-toggle="modal" data-target="#_dtr" href="">View DTR</a>
            <a class="label label-danger a-label" data-toggle="modal" data-target="#payslip" href="">View Payslip</a>
          </td>
        </tr>
      </table>
    </div>
</div>


<div class="modal fade" id="_dtr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ronald Rogan</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">
                  <tr>
                      <th rowspan="2">Days</th>
                      <th colspan="2">Morning</th>
                      <th colspan="2">Afternoon</th>
                      <th rowspan="2">Hours Worked</th>
                      <th rowspan="2">Overtime</th>
                  </tr>
                  <tr>
                      <th>Time In</th>
                      <th>Time Out</th>
                      <th>Time In</th>
                      <th>Time Out</th>
                  </tr>
                 <?php 
                      $ctr=1;
                      while ($ctr<=31) { ?>
                      <tr>
                          <td><?php echo $ctr; ?></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>

                    <?php $ctr++;} ?>



                 
              </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="payslip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FFFEC9;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel">Ayo Cafe<br/># JCO Arcade, Ninoy Aquino Avenue (Apitong Road)<br/>Tacloban City 6500 Leyte</h4></center>
      </div>
        <div class="modal-body">
        <div class="col-md-12">
          <label>Employee: Ronald Regan</label><br/>
          <label>Designation: Dish Washer</label><br/>
          <label>Month and Year: July 2015</label><br/>
        </div>
          <div class="container-fluid">
              <div class="table-responsive">

                  <table class="table table-bordered">
                        <tr>
                          <th>Payments</th>
                          <th>Salary</th>
                          <th>Hours Worked</th>
                          <th>Income</th>
                        </tr>
                        <tr>
                          <td>Regular Salary</td>
                          <td>466.00</td>
                          <td>0.00</td>
                          <td>0.00</td>
                      </tr>
                      <tr>
                          <td>Overtime Salary</td>
                          <td>102.50</td>
                          <td>0.00</td>
                          <td>0.00</td>
                      </tr>
                      <tr>
                          <td colspan="3">Total Income</td>
                          <td>0.00</td>
                      </tr>
                  </table>
                  <table class="table table-bordered">
                      <tr>
                          <th>Deduction Name</th>
                          <th>Deductions</th>
                      </tr>
                      <tr>
                          <td>SSS (Social Security System)</td>
                          <td>0.00</td>
                      </tr>
                      <tr>
                          <td>Pagibig Funds</td>
                          <td>0.00</td>
                      </tr>
                      <tr>
                          <td>Philhealth</td>
                          <td>0.00</td>
                      </tr>
                      <tr>
                          <td>Total Deductions</td>
                          <td>0.00</td>
                      </tr>
                    
                  </table>
                  <table class="table table-bordered">
                      <tr>
                        <td><strong>Total Salary</strong></td>    
                        <td>0.00</td>                    
                      </tr>
                  </table>
  
              </div>
               <div class="form-group">
                  <div class="col-sm-12">

                  </div>
                </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Print Preview</button>
      </div>
    </div>
  </div>
</div>

