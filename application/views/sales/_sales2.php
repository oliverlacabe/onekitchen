
  <div class="container-fluid">
    <form class="form">
    <table class="table">
        <tr>
          <td class="right">
            <label class="col-sm-3 control-label">Restaurant</label>
          </td>
            <td>
            <select class="form-control" name="category" required>
              <option>- Select Restaurant -</option>
              <option>Ayo Cafe</option>
              <option>Canto Fresco</option>
            </select>
          </td>
            <td class="right">
            <label class="col-sm-3 control-label">Covered</label>
          </td>
            <td>
            <select class="form-control" name="category" required>
              <option>- Select Period -</option>
              <option>Daily</option>
              <option>Monthly</option>
              <option>Annually</option>
            </select>
            </td>
              <td class="right">
            <label class="col-sm-3 control-label">Date</label>
          </td>
            <td>
              <input class="form-control" type="date" name="" value="" required>
            </td>
            <td>
              <button type="button" class="btn btn-warning pull-right btn-sm">OK</button>
            </td>
        </tr> 
      </table>
    </form>
  </div>



     <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>Bill No.</th>
          <th>Menu</th>
          <th>Menu Price</th>
          <th>Total Sold</th>
          <th>Total Sale</th>
        </tr>
        <tr>
          <td>123456789</td>
          <td>Caldereta</td>
          <td>P100.00</td>
          <td>50</td>
          <td>P5,000.00</td>      
        </tr>
        <tr>
          <td>123456788</td>
          <td>Carbonara</td>
          <td>P100.00</td>
          <td>50</td>
          <td>P5,000.00</td>      
        </tr>
        <tr>
            <td colspan="4">Total Income</td>
            <td>P10,000.00</td>
        </tr>
      </table>
      
    </div>
        
        <button type="button" class="btn btn-default pull-right" style="margin-left:10px">Cancel</button>
        <button type="button" class="btn btn-warning pull-right">Print Preview</button>
</div> 
 
