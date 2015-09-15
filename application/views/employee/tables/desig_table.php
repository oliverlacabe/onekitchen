<?php 
          $this->load->model('employees'); 
          $res = $this->employees->get_designation();
         ?>
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>Designation</th>
            <th>Rate</th>
            <th>Action</th>
          </tr>
          <?php foreach ($res as $key => $val): ?>
            <tr>
              <td><?php echo $val['designation_name']; ?></td> 
              <td><?php echo $val['rate']; ?></td>
              <td width="200px;">
                <a class="label label-primary a-label" >Edit <span class="glyphicon glyphicon-pencil"></span></a>
                <a class="label label-danger a-label delete_desig" data-param="<?php echo $val['id']; ?>" >Delete <span class="glyphicon glyphicon-trash"></span></a>
              </td>
            </tr>
          <?php endforeach ?>
        </table>