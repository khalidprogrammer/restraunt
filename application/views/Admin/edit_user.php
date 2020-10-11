
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

 <section class="content">

<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
               <p><a href="<?=base_url()?>Admin" class="btn btn-primary">Back To Home</a></p>
              <h3 class="box-title"><?php echo lang('edit_user_heading');?>
              </h3>
              <p><?php echo lang('edit_user_subheading');?></p>


              <br>
              <div id="infoMessage" style="color:red"><?php echo $message;?></div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          

              <div class="box-body">
               <?php echo form_open(uri_string());?>

          <div class="form-group col-sm-6">
            <label for=""><?php echo lang('edit_user_fname_label', 'first_name');?></label> 
           <?php
              echo form_input($first_name);?>
        </div>

      <div class="form-group col-sm-6">
           <label for=""><?php echo lang('edit_user_lname_label', 'last_name');?></label>  
            <?php echo form_input($last_name);?>
      </div>

      <div class="form-group col-sm-6">
            <label for=""><?php echo lang('edit_user_company_label', 'company');?> </label>
            <?php echo form_input($company);?>
      </div>

      <div class="form-group col-sm-6">
            <label for=""><?php echo lang('edit_user_phone_label', 'phone');?></label>
            <?php echo form_input($phone);?>
      </div>

      <div class="form-group col-sm-6">
            <label for=""><?php echo lang('edit_user_password_label', 'password');?></label> 
            <?php echo form_input($password);?>
      </div>

      <div class="form-group col-sm-6">
           <label for=""><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label>
            <?php echo form_input($password_confirm);?>
      </div>



      <?php if ($this->ion_auth->is_admin()): ?>

          <p> <?php echo lang('edit_user_groups_heading');?></p>
           <div>
          <?php foreach ($groups as $group):?>
              <label class="checkbox-inline">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
            
          <?php endforeach?>
          </div>

      <?php endif ?><br>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>

          <?php echo form_close();?>

          </div>

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>



 </section>



</div>

















