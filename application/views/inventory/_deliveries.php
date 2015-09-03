
<div class="table-responsive">
  <form class="form">
    <table class="table table-striped">
      <tr>
        <th colspan="9">Add Item Form</th>
      </tr>
      <tr>
        <td width="10px;">
            <label class="control-label">Item</label>
        </td>
        <td>
            <select class="form-control" name="item">
              <option></option>
              <option>Pork</option>
              <option>Bangus</option>
            </select>
        </td>
        <td width="10px;">
            <label class="control-label">Price</label>
        </td>
        <td width="150px;">
            <input class="form-control" type="number" placeholder="price">
        </td>
        <td width="10px;">
            <label class="control-label">Quantity</label>
        </td>
        <td width="150px;">
            <input class="form-control" type="number" placeholder="quantity">
        </td>
        <td width="10px;">
            <label class="control-label">Unit</label>
        </td>
        <td width="150px;">
            <input class="form-control" type="text" placeholder="unit">
        </td>
        <td>
          <button class="btn btn-warning btn-block">Add</button>
        </td>
      </tr>
    </table>
    <table class="table table-bordered table-striped table-hover">
      <tr>
        <th width="20%">Item List</th>
        <th class="right">Receiver</th>
        <th>
          <select class="form-control input-sm">
            <option></option>
            <option>Jose Protacio Rizal</option>
          </select>
        </th>
        <th class="right"><label class="control-label">Date</label></th>
        <th><input class="form-control input-sm" type="date" ></th>
      </tr>
      <tr>
        <th colspan="2">Item</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
      <tr>
        <td colspan="2">Pork</td>
        <td>100</td>
        <td>4</td>
        <td width="200px;">
          <a class="label label-primary a-label" href="">Edit <span class="glyphicon glyphicon-pencil"></span></a>
          <a class="label label-danger a-label" href="">Remove <span class="glyphicon glyphicon-trash"></span></a>
        </td>
      </tr>
      <tr>
        <td colspan="4"></td>
        <td><button class="btn btn-warning pull-right btn-block">Save Delivery</button></td>
      </tr>
    </table>
  </form>
</div>