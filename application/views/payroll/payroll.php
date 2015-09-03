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
                          Payroll
                        </div>
                        <div class="panel-body">
                        
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#dtr" data-toggle="tab">Daily Time Record (DTR)/Payslip</a></li>
                          <li><a href="#payroll" data-toggle="tab">Payroll</a></li>
                        </ul>

                        <div class="tab-content" style="background-color: #fff">
                          <div class="tab-pane fade in active" id="dtr">
                           <?php $this->load->view('payroll/_dtr'); ?>
                          </div>
                          <div class="tab-pane fade" id="payroll">
                           <?php $this->load->view('payroll/_payroll'); ?>
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

</body>
</html>
