<?php require_once('../models/functions.php'); 
require_once('layouts/systems/header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Info boxes -->
  <div id="apps_data" class="row">
  </div>
  <!-- /.row -->

  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <div class="col-md-12">
      <!-- TABLE: LATEST ORDERS -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Transactions</h3>
          <div class="box-tools pull-right">
            <button type="button" id="newAppBtn" class="btn btn-box-tool">
              <i class="fa fa-plus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                  <tr>
                    <th>App</th>
                    <th>Transaction ID</th>
                    <th>Transaction Time</th>
                    <th>Product</th>
                    <th>Transaction amount</th>
                    <th>Transaction method</th>
                    <th>Transaction Status</th>
                  </tr>
                </thead>
                <tbody id="loadTransactions">

                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="modal fade" id="newAppModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <form id="newAppForm">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">New App</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="app_name">App Name:</label>
                <input type="text" class="form-control" id="app_name" name="name" placeholder="App Name" required>
              </div>
              <div class="form-group">
                <label for="app_method">Method:</label>
                <select name="method" id="app_method" class="form-control" required>
                  <option disabled selected>Choose method</option>
                  <option value="PAYPAL">PAYPAL</option>
                </select>
              </div>
              <div class="form-group">
                <label for="app_key">App Key:</label>
                <input type="text" class="form-control" id="app_key" name="key" placeholder="App Key" required>
              </div>
              <div class="form-group">
                <label for="app_key">App Secret:</label>
                <input type="text" class="form-control" id="app_secret" name="secret" placeholder="App Secret" required>
              </div>
              <div class="form-group">
                <label for="url">Response URL</label>
                <input type="text" name="url" class="form-control" id="url" placeholder="Response URL">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
</section>
<!-- /.content -->
<script src="<?php echo base_url(); ?>/public/dist/js/pages/main.js"></script>
<?php require_once('layouts/systems/footer.php'); ?>