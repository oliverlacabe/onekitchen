<?php
        $data = $this->inventory_model->get_prep();
	?>
        <table class="table table-bordered table-striped table-hover">
          <tr><th class="center" colspan="3">Prepared Stock List</th></tr>
          <tr>
            <th>Item</th>
            <th>Remaining Stock</th>
            <th>Price</th>
          </tr>
          <?php foreach ($data as $key => $val): ?>
          	<tr>
          		<?php
          			$res = $this->inventory_model->get_prep_detail($val['id']);
					if ($res) {
						$total = 0;
						$price = 0;
						$count = 0;

						foreach ($res as $key => $value) {
							extract($value);
							$total = $total + ( $price * $stock );
							$count = $count + $stock;
						}

						$price = $total/$count;
					}
          		 ?>
          		<td><?php echo $ingredient_name; ?></td>
          		<td><?php echo $count; ?></td>
          		<td><?php echo number_format($price, '2', '.', '3'); ?></td>
                <!-- <td><?php echo $price ?></td> -->
          	</tr>
          <?php endforeach ?>
        </table>
