<body>
    <div id="wrapper">
        <?php $this->load->view('templates/sidebar'); ?>
        <div id="page-content-wrapper">
            <div class="container-fluid reset">
                <?php $this->load->view('templates/container_header'); ?>
                <div class="row reset">
                    <div class="col-lg-12 reset" style="padding-top: 30px;">
                      <div class="panel panel-warning" style="background-color: #FFFEC9;">
                        <div class="panel-heading">
                          Menu Management
                        </div>
                        <div class="panel-body">

                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#menu" data-toggle="tab">Menu</a></li>
                          <li><a href="#ingredient" data-toggle="tab">Ingredient</a></li>
                          <li><a href="#category" data-toggle="tab">Category</a></li>
                        </ul>

  <!-- =========================== 1st Tab (Menu) ============================= -->

                          <div class="tab-content" style="background-color: #fff">
                            <div class="tab-pane fade in active" id="menu">
                              <button class="btn btn-warning" data-toggle="modal" data-target="#menu_modal" >Add Menu</button>
                              <div class="col-md-4 pull-right">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search Menu">
                                    <span class="input-group-btn">
                                      <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                    </span>
                                </div>
                              </div>
                              <br/><br/>
                              <div class="table-responsive" id="menu_list">
                                <?php $this->load->view('menu/_menu'); ?>
                              </div>
                            </div>

  <!-- =========================== 2nd Tab (Ingredients) ============================= -->

                            <div class="tab-pane fade" id="ingredient">
                              <div id="ing_alert"></div>
                              <form class="form form-horizontal" id="ing_form" role="form" onsubmit="return false">
                                <table class="table table-striped">
                                  <tr>
                                    <th colspan="5">Add Ingredient Form</th>
                                  </tr>
                                  <tr>
                                    <td width="50px;">Ingredient</td>
                                    <td>
                                      <input class="form-control" type="text" name="ingredient" placeholder="ingredient" value="" required>
                                    </td>
                                    <td width="50px;">Type</td>
                                    <td width="250px;">
                                      <select class="form-control" name="type" required>
                                        <option value="0">-Select Type-</option>
                                        <option>Before Prep</option>
                                        <option>After Prep</option>
                                      </select>
                                    </td>
                                    <td colspan="3"><button type="submit" class="btn btn-warning btn-block">Add</button></td>
                                  </tr>
                                </table>
                              </form>
                              <div class="table-responsive" id="ing_list">
                                <?php $this->load->view('menu/_ingredient'); ?>
                              </div>
                            </div>

  <!-- =========================== 3rd Tab (Category) ============================= -->

                            <div class="tab-pane fade" id="category">
                              <div id="cat_alert"></div>
                              <form class="form form-horizontal" id="cat_form" role="form" onsubmit="return false">
                                <table class="table table-striped">
                                  <tr><th colspan="3">Add Category Form</th></tr>
                                  <tr>
                                    <td width="50px;">Category</td>
                                    <td>
                                      <input class="form-control" type="text" name="category" placeholder="category name" value="" required>
                                    </td>
                                    <td><button class="btn btn-warning btn-block" type="submit">Add</button></td>
                                  </tr>
                                </table>
                              </form>
                              <div class="table-responsive" id="cat_list">
                                <?php $this->load->view('menu/_category'); ?>
                              </div>


                            </div>

  <!-- ============================================================================= -->

                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


  <!-- ============================= modals ================================== -->

<div class="modal fade" style="background: rgba(0,0,0,.5);" data-backdrop="false" id="menu_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #FFFEC9;">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Menu Form</h4>
        </div>
        <div class="modal-body">
            <div class="col-md-12" id="menu_alert"></div>
            <div class="container-fluid">
              <form class="form-horizontal" id="add_menu_form" method="post" role="form" onsubmit="return false">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Menu Name</label>
                  <div class="col-sm-9">
                    <input class="form-control " name="menuname" type="text" required placeholder="menu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Price</label>
                  <div class="col-sm-9">
                    <input class="form-control " name="price" type="number" required placeholder="price">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Category</label>
                  <div class="col-sm-9">
                    <select class="form-control " name="category" required>
                      <option value="0">-Select Category-</option>
                      <?php
                        $cat = $this->Model_Menu->get_cat();
                        foreach ($cat as $key => $value) {
                          echo "<option value='".$value['id']."'>".$value['cat_name']."</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Menu Owner</label>
                  <div class="col-sm-9">
                    <select class="form-control " name="owner" required>
                      <option value="0">-Select Restaurant-</option>
                      <?php
                        $resto = $this->api->get_resto();
                        foreach ($resto as $key => $value) {
                          echo "<option value='".$value['id']."'>".$value['restaurant_name']."</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-md-12" id="app_alert"></div>
                  <div class="col-sm-12 table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                          <td colspan="2">
                              <select class="form-control" name="ingredient">
                                <option value="0">- Select Ingredient -</option>
                                <?php
                                  $resto = $this->Model_Menu->get_ing();
                                  foreach ($resto as $key => $value) {
                                    echo "<option value='".$value['id']."'>".$value['ingredient_name']."</option>";
                                  }
                                ?>
                              </select>
                          </td>
                          <td width="200px">
                            <div class="input-group col-sm-12">
                              <input class="form-control " name="quantity" type="number" placeholder="quantity">
                              <span class="input-group-btn">
                                <a class="btn btn-warning" id = "add_ing_button">Add</a>
                              </span>
                            </div>
                          </td>
                        </tr>
                    </table>
                    <table class="table table-striped table-bordered table-hover" id="tbl_ing_modal">
                      <tr>
                        <th>Name</th>
                        <th width="50px">Quantity</th>
                        <th>Action</th>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                    <button type="submit" style="margin-right: 10px;" class="btn btn-warning pull-right">Save</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" style="background: rgba(0,0,0,.5);" data-backdrop="false" id="view_menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #FFFEC9;">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Menu Details</h4>
        </div>
        <div class="modal-body">
            <div class="container-fluid" id="view_ing"></div>
        </div>
    </div>
  </div>
</div>

    <?php $this->load->view('templates/footer'); ?>
    <script src = "<?php echo base_url('assets/js/ajax/menu_ajax.js'); ?>"></script>

</body>
</html>
