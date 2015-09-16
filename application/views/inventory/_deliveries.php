<div class="container-fluid">
  <div class="table-responsive">
   <div id="del_alert"></div>
    <form class="form" id="delivery_form" onsubmit="return false">
      <table class="table table-striped">
        <tr>
          <th colspan="9">Add Item Form</th>
        </tr>
        <tr>
          <td width="10px;">
              <label class="control-label">Item</label>
          </td>
          <td>
              <select class="form-control" name="item" required>
                <option>-Select Item-</option>
                 <?php
                $it = $this->inventory_model->get_before_prep();
                foreach ($it as $key => $value) {
                  echo "<option value='".$value['id']."'>".$value['ingredient_name']."</option>";
                }
              ?>
              </select>
          </td>
          <td width="10px;">
              <label class="control-label">Price</label>
          </td>
          <td width="150px;">
              <input class="form-control" type="number" placeholder="price" name="price" required>
          </td>
          <td width="10px;">
              <label class="control-label">Quantity</label>
          </td>
          <td width="150px;">
              <input class="form-control" type="number" placeholder="quantity" name="qty" required>
          </td>
          <td width="10px;">
              <label class="control-label">Unit</label>
          </td>
          <td width="150px;">
              <input class="form-control" type="text" placeholder="unit" name="unit" required>
          </td>
          <td>
            <button class="btn btn-warning btn-block">Add</button>
          </td>
        </tr>
      </table>
      </form>

      <form id="del" onsubmit="return false" >
      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th width="20%">Item List</th>
          <th class="right">Receiver</th>
          <th>
            <select class="form-control input-sm" name="receiver" required>
              <option value="0">select receiver</option>
              <?php
                $rec = $this->inventory_model->get_receiver();
                foreach ($rec as $key => $value) {
                  echo "<option value='".$value['id']."'>".$value['fname']." ".$value['lname']." ".$value['mname']."</option>";
                }
              ?>
            </select>
          </th>
          <th colspan="2" class="right"><label class="control-label">Date</label></th>
          <th><input class="form-control input-sm" type="date" name="date" required></th>
        </tr>
        </table>
        <table class="table table-bordered table-striped table-hover" id="delivery_add">
        <tr>
          <th colspan="2">Item</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Unit</th>
          <th>Action</th>
        </tr>
      </table>
          <button type="submit" class="btn btn-warning pull-right">Save Delivery</button>
    </form>
  </div>
</div>
