<?php require_once('models/initialization.php'); ?>
<?php require_once('public/layouts/login/header.php'); ?>

  <div class="register-box-body">
    <p class="login-box-msg">Forgot password</p>

    <form id="forgotPassForm">
      <div class="form-group has-feedback">
        <span id="forgotPassErrorMessage"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-8">
          &nbsp;
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="forgotPassSubmitBtn" class="btn btn-primary btn-block btn-flat">Enter</button>
        </div>
        <!-- /.col -->
      </div>
      <a href="index.php" class="text-center">Remembered Password</a>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>public/components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>public/components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>public/plugins/iCheck/icheck.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>public/dist/js/pages/forgot.js"></script>

</body>
</html>
