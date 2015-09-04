<?php $data = $this->Model_Menu->get_ing(); ?>
<table class="table table-bordered table-striped table-hover">
    <tr><th colspan="3">Ingredient List</th></tr>
    <tr>
        <th>Ingredient Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <?php foreach ($data as $key => $val): ?>
        <tr>
            <td><?php echo $val['ingredient_name']; ?></td>
            <td>50</td>
            <td width="200px;">
                <a class="label label-primary a-label" href="">Edit <span class="glyphicon glyphicon-pencil"></span></a>
                <a class="label label-danger a-label" href="">Delete <span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
  <?php endforeach ?>
</table>
