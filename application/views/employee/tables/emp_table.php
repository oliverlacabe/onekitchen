<?php 
    $emp = $this->employees->get_all_emp();
 ?>
  <table class="table table-bordered table-striped table-hover">
    <tr>
      <th>Name</th>
      <th>Designation</th>
      <th>Address</th>
      <th>Contact No.</th>
      <th>Action</th>
    </tr>
    <?php foreach ($emp as $key => $value): extract($value)?>
        <tr>
          <td><?php echo $lname." ".$fname; ?></td>
          <td><?php echo $designation_name; ?></td>
          <td><?php echo $address; ?></td>
          <td><?php echo $contact_no; ?></td>
          <td width="200px;">
            <a class="label label-primary a-label" href="">Edit <span class="glyphicon glyphicon-pencil"></span></a>
          </td>
        </tr>
    <?php endforeach ?>
  </table>