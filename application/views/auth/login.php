<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/bootstrap-rtl.min.css"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/AdminLTE.min.css">
  <!-- <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/AdminLTE-rtl.min.css"> -->
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <div class="logo_title">
          <h3>REPORTING SYSTEM ANDMA</h3>
        </div>
    
  </div>

  <!-- /.login-logo -->
  <div class="login-box-body">
    
    <div class="row">
      <div class="col-sm-6" style="float: left;">
        <img src="<?=base_url()?>assets/img/andma_logo.png" alt="">
        
      </div>
    <div class="col-sm-6">
   <div id="infoMessage" class="text-danger"><?php echo $message;?></div>


       <?php echo form_open("auth/login");?>
    
      <div class="form-group has-feedback">
         <?php echo lang('login_identity_label', 'identity');?>
         <?php 

         $data = array(
          'name'        => 'identity',
          'value'          => $this->input->post('identity'),
          'class'       => 'form-control',
         
        );

         echo form_input($data);?>
      </div>
      <div class="form-group has-feedback">
         <?php echo lang('login_password_label', 'password');?>
         <?php 
         $data=array(
          'name'=>'password',
          'value'=>$this->input->post('password'),
          'class'=>'form-control',
          'type'=>'password'

         );
         echo form_input($data);?>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
             <?php echo lang('login_remember_label', 'remember');?>
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-primary"');?>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div>
</div>
 </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
