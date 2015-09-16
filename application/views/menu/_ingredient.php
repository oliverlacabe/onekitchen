<?php $data = $this->Model_Menu->get_ing(); ?>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>Ingredient List</th>
        <th colspan="2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="search ingredient">
              <span class="input-group-btn">
                <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div><!-- /input-group -->
        </th>
    </tr>
    <tr>
        <th>Ingredient Name</th>
        <th width="200px;">Type</th>
        <th>Action</th>
    </tr>
    <?php foreach ($data as $key => $val): ?>
        <tr>
            <td><?php echo $val['ingredient_name']; ?></td>
            <td width="100px;"><?php echo $val['type']; ?></td>
            <td width="200px;">
                <a class="label label-primary a-label" href="">Edit <span class="glyphicon glyphicon-pencil"></span></a>
                <a class="label label-danger a-label delete_ing" data-param="<?php echo $val['id']; ?>" >Delete <span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
  <?php endforeach ?>
</table>
