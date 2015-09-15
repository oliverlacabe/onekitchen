<body>
    <div id="wrapper">
        <?php $this->load->view('templates/sidebar'); ?>
        <div id="page-content-wrapper">
            <div class="container-fluid reset">
                <div class="body-header"></div>
                <a href="" class="btn btn-warning btn-toggle" id="menu-toggle" data-toggle="tooltip" data-placement="right" title="Toggle Menu">
                    <span class="glyphicon glyphicon-th"></span>
                </a>
                <button class="btn btn-warning btn-account" id="menu-account" data-toggle="tooltip" data-placement="left" title="Account Settings">
                    <span class="glyphicon glyphicon-cog"></span>
                </button>
                <div class="row reset">
                    <div class="col-lg-12 reset" style="padding-top: 30px;">
                      <div class="panel panel-warning" style="background-color: #FFFEC9;">
                        <div class="panel-heading">
                          Sales
                        </div>
                        <div class="panel-body">
                        
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#sales" data-toggle="tab">Billing</a></li>
                          <li><a href="#_bill_list" data-toggle="tab">Bill List</a></li>
                          <li><a href="#_sales2" data-toggle="tab">Sales</a></li>
                        </ul>
                        <div class="tab-content" style="background-color: #fff">
                          <div class="tab-pane fade in active" id="sales">
                            <?php $this->load->view('sales/_sales') ?>
                          </div>
                           <div class="tab-pane fade" id="_bill_list">
                            <?php $this->load->view('sales/_bill_list') ?>
                          </div>
                          <div class="tab-pane fade" id="_sales2">
                            <?php $this->load->view('sales/_sales2') ?>
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
    <script src = "<?php echo base_url('assets/js/ajax/sales_ajax.js'); ?>"></script>
</body>
</html>
