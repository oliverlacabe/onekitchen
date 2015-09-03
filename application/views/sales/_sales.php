 <div class="container-fluid">
  <div class="table-responsive">

            <form class="form-horizontal">
            <table class="table table-striped">
                <tr>
                  <th colspan="5">Billing Form</th>
                  <th colspan="1" class="right">Date</th>
                  <th width="200px;">
                    <input class="form-control" type="date" name="date" placeholder="" value="" required>
                  </th>
                </tr>

                <tr>
                  <td width="80px;">Bill No.</td>
                  <td width="200px;"> 
                    <input class="form-control" type="text" name="ingredient" placeholder=" Enter Bill No." value="" required>
                  </td>
                  <td width="20px;">Menu</td>
                  <td width="250px;"> 
                   <select class="form-control" name="menu" required>
                      <option>- Select Menu -</option>
                      <option>Asian Noddle Salad</option>
                      <option>Carbonara</option>
                      <option>Fish and Chips</option>
                    </select>
                  </td>
                  <td width="50px;">Sold</td>
                  <td width="200px;">
                    <input class="form-control" type="number" name="price" placeholder="Quantity" value="" required>
                  </td>
                  <td><button class="btn btn-warning btn-block" type="submit">Add</button></td>
                </tr>
              </table>
            </form>
                 
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>Bill No.</th>
            <th>Menu</th>
            <th>Price</th>
            <th>Sold</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
          <tr>
            <td>1234567890</td>
            <td>Carbonara</td>
            <td>100.00</td>
            <td>5</td>
            <td>500.00</td>
            <td width="200px;">
              <a class="label label-primary a-label" href="">Edit<span class="glyphicon glyphicon-pencil"></span></a>
              <a class="label label-danger a-label" href="">Remove<span class="glyphicon glyphicon-trash"></span></a>
            </td>
          </tr>
        </table>
  </div>
    
    <button type="button" class="btn btn-default pull-right" style="margin-left:10px">Cancel</button>
    <button type="button" class="btn btn-warning pull-right">Save</button>
</div> 