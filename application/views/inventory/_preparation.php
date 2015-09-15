
<div class="table-responsive">
  <form class="form">
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
                $it = $this->Inventory_model->get_item();
                foreach ($it as $key => $value) {
                    $ctr = $this->Inventory_model->count_before_prep_stock($value['id']);
                    if ($ctr['stock'] > 0) {
                        echo "<option value='".$value['id']."|".$ctr['stock']."|".$ctr['unit']."'>".$value['ingredient_name']."</option>";
                    }
                }
              ?>
              </select>
        </td>
        <td><input class="form-control" type="text" name="stock" disabled required placeholder="Remaining Stock" value="Stock: 4Kg"></td>
        <td><input class="form-control" type="number" name="out_quantity" required placeholder="pull-out quantity"></td>
        <td><input class="form-control" type="text" name="price1" disabled required placeholder="Remaining Stock" value="Price: 600"></td>
      </tr>
      <tr>
        <td><strong>After Prep</strong></td>
        <td>
              <select class="form-control" name="item" required>
                <option>-Select Item-</option>
                 <?php
                $it = $this->Inventory_model->get_after_prep();
                foreach ($it as $key => $value) {
                  echo "<option value='".$value['id']."'>".$value['ingredient_name']."</option>";
                }
              ?>
              </select>
        </td>
        <td><input class="form-control" type="number" name="in_quantity" required placeholder="prep quantity"></td>
        <td><input class="form-control" type="text" name="price2" disabled required placeholder="Remaining Stock" value="Price: 600"></td>
        <td><button class="btn btn-warning btn-block">Save</button></td>
      </tr>
    </table>
    <div class="table-responsive">
      <form class="form">
        <table class="table table-bordered table-striped table-hover">
          <tr><th class="center" colspan="3">Prepared Stock List</th></tr>
          <tr>
            <th>Item</th>
            <th>Remaining Stock</th>
            <th>Price</th>
          </tr>
          <tr>
            <td>Pork</td>
            <td>4</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Bangus</td>
            <td>5</td>
            <td>45</td>
          </tr>
        </table>
      </form>
    </div>
  </form>
</div>
