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
                          Inventory
                        </div>
                        <div class="panel-body">
                        
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#deliveries" data-toggle="tab">Delivery</a></li>
                          <li><a href="#delivery" data-toggle="tab">Delivery List</a></li>
                          <li><a href="#prep" data-toggle="tab">Preparation</a></li>
                          <li><a href="#pullout" data-toggle="tab">Pull Out</a></li>
                          <li><a href="#pulloutlist" data-toggle="tab">Pull Out List</a></li>
                          <li><a href="#stock" data-toggle="tab">Stock</a></li>
                        </ul>

                        <div class="tab-content" style="background-color: #fff">

                          <div class="tab-pane fade in active" id="deliveries">
                            <?php $this->load->view('inventory/_deliveries'); ?>
                          </div>

                          <div class="tab-pane fade" id="delivery">
                            <?php $this->load->view('inventory/_delivery'); ?>
                          </div>

                          <div class="tab-pane fade" id="prep">
                            <?php $this->load->view('inventory/_preparation'); ?>
                          </div>

                          <div class="tab-pane fade" id="pullout">
                            <?php $this->load->view('inventory/_pullout'); ?>
                          </div>

                          <div class="tab-pane fade" id="pulloutlist">
                            <?php $this->load->view('inventory/_pulloutlist'); ?>
                          </div>

                          <div class="tab-pane fade" id="stock">
                            <?php $this->load->view('inventory/_stock'); ?>
                          </div>

                        </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php $this->load->view('templates/footer'); ?>
    <script src = "<?php echo base_url('assets/js/ajax/inventory_ajax.js'); ?>"></script>

</body>
</html>
