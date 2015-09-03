<?php $data = $this->Model_Menu->get_cat(); ?>
<table class="table table-bordered table-striped table-hover">
  <tr>
    <th>Category</th>
    <th>Action</th>
  </tr>
    <?php foreach ($data as $key => $val): ?>
      <tr>
        <td><?php echo $val['cat_name']; ?></td>
        <td width="200px;">
          <a class="label label-primary a-label" href="">Edit <span class="glyphicon glyphicon-pencil"></span></a>
          <a class="label label-danger a-label" href="">Delete <span class="glyphicon glyphicon-trash"></span></a>
        </td>
      </tr>
  <?php endforeach ?>
</table>