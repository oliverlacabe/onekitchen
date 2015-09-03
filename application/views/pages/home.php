<body>
    <div id="wrapper">
        <?php $this->load->view('templates/sidebar'); ?>
        <div id="page-content-wrapper">
            <div class="container-fluid reset">
                <?php $this->load->view('templates/container_header'); ?>
                <div class="row reset">
                    <div class="col-lg-12 reset" style="padding-top: 30px;">
                        <div id="welcome-slide" class="carousel slide reset" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#welcome-slide" data-slide-to="0" class="active"></li>
                            <li data-target="#welcome-slide" data-slide-to="1"></li>
                            <li data-target="#welcome-slide" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="<?php echo base_url('/assets/images/default.jpg');?>" alt="...">
                              <div class="carousel-caption">
                              </div>
                            </div>
                            <div class="item">
                              <img src="<?php echo base_url('/assets/css/images/kitchen.jpg');?>" alt="...">
                              <div class="carousel-caption">
                              </div>
                            </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#welcome-slide" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#welcome-slide" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                        </div>
                        <h3>welcome</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php $this->load->view('templates/footer'); ?>

</body>
</html>
