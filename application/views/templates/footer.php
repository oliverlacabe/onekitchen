    <div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Account Settings</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <form class="form">
                <div class="form-group">
                  <label class="label-control">Username</label>
                  <input class="form-control" type="text" name="username" placeholder="username">
                </div>
                <div class="form-group">
                  <label class="label-control">Password</label>
                  <input class="form-control" type="password" name="password" placeholder="password">
                </div>
                <div class="form-group">
                  <label class="label-control">New Password</label>
                  <input class="form-control" type="password" name="newpassword" placeholder="new password">
                </div>
            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary pull-right" style="margin-right: 10px;">Save changes</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $('#menu-toggle').tooltip();
    $('#menu-account').tooltip();
    </script>