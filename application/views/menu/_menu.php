<?php $data = $this->Model_Menu->get_menu(); ?>
<table class="table table-bordered table-striped table-hover">
  <tr>
    <th>Menu</th>
    <th>Category</th>
    <th>Price</th>
    <th>Owner</th>
    <th>Action</th>
  </tr>
  <?php foreach ($data as $key => $val): ?>
      <tr>
        <td><?php echo $val['menu_name']; ?></td>
        <td><?php echo $val['cat_name']; ?></td>
        <td><?php echo $val['price']; ?></td>
        <td><?php echo $val['restaurant_name']; ?></td>
        <td width="250px;">
          <a class="label label-primary a-label" data-toggle="modal" data-id="<?php echo $val['id']; ?>" data-target="#view_menu">View Ingredients <span class="glyphicon glyphicon-search"></span></a>
          <a class="label label-info a-label" href="">Edit <span class="glyphicon glyphicon-pencil"></span></a>
          <a class="label label-danger a-label" href="">Delete <span class="glyphicon glyphicon-trash"></span></a>
        </td>
      </tr>
  <?php endforeach; ?>
</table>
