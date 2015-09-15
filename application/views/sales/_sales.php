 <div class="container-fluid">
  <div class="table-responsive">
             <div id="bills_alert"></div>
            <form id="add_sales" method="post" class="form-horizontal" onsubmit="return false"  >
            <table class="table table-striped">
                <tr>
                  <th colspan="5">Billing Form</th>
                </tr>

                <tr> 
                  <!-- <td width="80px;">Bill No.</td>
                  <td width="200px;"> 
                    <input class="form-control" type="text" name="bill_no" placeholder=" Enter Bill No." value="" required>
                  </td> -->
                  <td width="20px;">Menu</td>
                  <td width="250px;"> 
                   <select class="form-control" name="menu" required>
                      <option value="0">- Select Menu -</option>
                      <?php
                        $menu = $this->Sales_model->get_menu();
                        foreach ($menu as $key => $value) {
                          echo "<option value='".$value['id']."'>".$value['menu_name']."</option>";
                        } 
                      ?>
                    </select> 
                  </td>
                  <td width="50px;">Sold</td>
                  <td width="200px;">
                    <input class="form-control" type="number" name="sold" placeholder="Quantity" value="" required>
                  </td>
                  <td width="200px;"><button class="btn btn-warning btn-block" type="submit">Add</button></td>
                </tr>
              </table>
            </form>
          
       <form id="order" onsubmit="return false">      
        <table class="table table-bordered table-striped table-hover">
          <tr>
              <th width="200px;"><input class="form-control" type="text" placeholder="Enter Bill No." name="bill_no" required></th>
              <th width="250px;"><input class="form-control" type="text" placeholder="Enter Customer Name" name="cust_name" required></th>
              <th class="right" colspan="2">Date</th>
              <th width="100px;"><input class="form-control" type="date" name="date" required></th>
          </tr>
        </table>
      <table class="table table-bordered table-striped table-hover" id="sales_table">
          <tr>
            <th>Menu</th>
            <th>Price</th>
            <th>Sold</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </table>
    <button type="submit" class="btn btn-warning pull-right">Save</button>
  </form> 
 </div>
</div> 