<div class="content-wrapper">
<section class="content-header">
      <h1>
      Dashboard
      <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
      </ol>
</section>
<!-- Main content -->
<section class="content">
      <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                  <div class="box box-primary">
                        <div class="box-header with-border">
                              <p><a href="<?=base_url()?>Admin" class="btn btn-primary">Back To Home</a></p>
                              <h3 class="box-title"><?php echo lang('change_password_heading');?>
                              </h3>
                              <br><div
                               id="infoMessage" style="color:red"><?php echo $message;?></div>
                        </div>
                        <?php echo form_open("Admin/change_password");?>
                        <div class="box-body">
                              <p>
                                    <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                                    <?php echo form_input($old_password);?>
                              </p>
                              <p>
                                    <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
                                    <?php echo form_input($new_password);?>
                              </p>
                              <p>
                                    <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                                    <?php echo form_input($new_password_confirm);?>
                              </p>
                              <?php echo form_input($user_id);?>
                              <p><?php echo form_submit('submit', lang('change_password_submit_btn'),'class="btn btn-primary"');?></p>
                              <?php echo form_close();?>
                        </div>
                  </div>
            </div>
      </div>
</section>
</div>
