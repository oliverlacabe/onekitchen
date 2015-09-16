
<div class="table-responsive">
  <form class="form" id="prep_form" role="form" onsubmit="return false">
    <div id="prep_alert"></div>
    <table class="table table-striped">
      <tr>
        <th colspan="6">Preparation Form </th>
      </tr>
      <tr>
        <td><strong>Before Prep</strong></td>
        <td>
              <select class="form-control" name="before_item" required>
                <option value="0">-Select Item-</option>
                 <?php
                $it = $this->inventory_model->get_item();
                foreach ($it as $key => $value) {
                    $ctr = $this->inventory_model->count_before_prep_stock($value['id']);
                    if ($ctr['stock'] > 0) {
                        echo "<option value='".$value['id']."|".$ctr['stock']."|".$ctr['unit']."'>".$value['ingredient_name']."</option>";
                    }
                }
              ?>
              </select>
        </td>
        <td><input class="form-control" type="text" name="stock" disabled required value="Stock:"></td>
        <td>
            <input type="hidden" name="hidden_id" value="0">
            <div id="out_qty" class="form-group">
                <input class="form-control" type="number" name="out_quantity" required placeholder="pull-out quantity">
            </div>
        </td>
        <td><input class="form-control" type="text" name="price1" disabled required value="Price:"></td>
      </tr>
      <tr>
        <td><strong>After Prep</strong></td>
        <td>
              <select class="form-control" name="after_item" required>
                <option value="0">-Select Item-</option>
                 <?php
                $it = $this->inventory_model->get_after_prep();
                foreach ($it as $key => $value) {
                  echo "<option value='".$value['id']."'>".$value['ingredient_name']."</option>";
                }
              ?>
              </select>
        </td>
        <input type="hidden" name='hidden_price' value="0">
        <td>
            <div id="in_qty" class="form-group">
                <input class="form-control" type="number" name="in_quantity" required placeholder="prep quantity">
            </div>
        <td><input class="form-control" type="text" name="price2" disabled required value="Price:"></td>
        <td><button type="submit" class="btn btn-warning btn-block">Save</button></td>
      </tr>
    </table>
  </form>
    <div class="table-responsive" id="prep_list">
      <?php
        $this->load->view('inventory/_prep_list');
      ?>
    </div>
</div>
