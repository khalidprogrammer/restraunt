
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <script src="<?=base_url()?>assets/js/jquery-1.12.3.min.js"></script>
  <script src="<?=base_url()?>assets/js/kendo.all.min.js"></script>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  
  <!-- iCheck -->

  <!-- =================================LTR======================================= -->

 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php if($this->config->item('language')=='english'){?>
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/kendo.common.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/kendo.default.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/chosen-bootstrap.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/chosen.css">
<script src="<?=base_url()?>assets/js/chosen.jquery.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<?php } else{ ?>

  <!-- ==================================END ========================================= -->
       <!--============================== RTL RIGH======================== -->

<link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/bootstrap-rtl.min.css"> 
 <!--  Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/style-rtl.css">
 <!--  Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons.min.css"> 
 <!--  Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/AdminLTE.css">
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/AdminLTE-rtl.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/skins/_all-skins-rtl.min.css"> 
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/kendo.rtl.min.css"> 

<?php } ?>
  <!-- ================================End RTL -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">