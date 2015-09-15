<?php
    $res = $this->Model_Menu->get_spec_menu($id);
    extract($res);
?>
  <form class="form-horizontal" id="add_menu_form" method="post" role="form" onsubmit="return false">
    <div class="form-group">
      <label class="col-sm-3 control-label">Menu Name</label>
      <div class="col-sm-9">
        <input class="form-control " disabled type="text" required value="<?php echo $menu_name; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Price</label>
      <div class="col-sm-9">
        <input class="form-control " disabled type="text" value="<?php echo $price; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Category</label>
      <div class="col-sm-9">
        <input class="form-control " disabled type="text" value="<?php echo $cat_name; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Menu Owner</label>
      <div class="col-sm-9">
        <input class="form-control " disabled type="text" value="<?php echo $restaurant_name; ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12 table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <tr>
            <th>Name</th>
            <th width="50px">Quantity</th>
          </tr>
          <tr>
            <td>Pasta</td>
            <td>2</td>
          </tr>
        </table>
      </div>
    </div>
  </form>
