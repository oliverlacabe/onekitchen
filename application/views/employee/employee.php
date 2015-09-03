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
                          Employee Management
                        </div>
                        <div class="panel-body">
                        
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#employee" data-toggle="tab">Employees</a></li>
                          <li><a href="#designation" data-toggle="tab">Designation</a></li>
                        </ul>

                        <div class="tab-content" style="background-color: #fff">
                          <div class="tab-pane fade in active" id="employee">
                            <?php $this->load->view('employee/_employee') ?>
                          </div>
                          <div class="tab-pane fade" id="designation">
                            <?php $this->load->view('employee/_designation') ?>
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
  <script src="./assets/js/ajax/add_emp_ajax.js"></script>

</body>
</html>
