<body class="resto-body">
    <?php $this->load->view('ayo/ayohead'); ?>
    <div class="col-md-7">
    <br/>
        <div class="panel panel-warning">
            <div class="panel-heading">
                Job Openings
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-warning">
                      <span class="badge">1</span>
                      <strong>Delivery Boy</strong>
                    </li>
                    <li class="list-group-item">
                        <h6>Requirements</h6>
                        <ul>
                            <li>At least high school graduate</li>
                            <li>Drivers Liscence</li>
                            <li>1 year experience in food delivery</li>
                        </ul>
                    </li>
                    <li class="list-group-item list-group-item-warning">
                      <span class="badge">3</span>
                      <strong>Service Crew</strong>
                    </li>
                    <li class="list-group-item">
                        <h6>Requirements</h6>
                        <ul>
                            <li>At least college level</li>
                            <li>1 year experience</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-5">
    <br/>
        <div class="panel panel-warning">
            <div class="panel-heading">Announcements</div>
            <div class="panel-body">
                <p>
                    We will have our anniversary promo!. Horray !!!
                    every meal will have discounts starting from 1pm to 6pm.
                </p>
            </div>
        </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>
    <script src = "<?php echo base_url('assets/js/menu_ajax.js'); ?>"></script>

</body>
</html>
