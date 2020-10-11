
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
               <p><a href="<?=base_url()?>Admin" class="btn btn-primary">Back To Home</a></p>
              <h3 class="box-title"><?php echo lang('create_user_subheading');?>
              </h3>

              <br>
              <div id="infoMessage" style="color:red"><?php echo $message;?></div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <?php echo form_open("Admin/create_user");?>

              <div class="box-body">
                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1"> <?php echo lang('create_user_fname_label', 'first_name');?></label>
                  <?php
                    $data=array(

                      'name'=>'first_name',
                      'class'=>'form-control',
                      'value'=>$this->input->post('first_name')

                    );

                   echo form_input($data);?>
                </div>
                <div class="form-group col-sm-6">
                  <label for="last_name"> <?php echo lang('create_user_lname_label', 'last_name');?></label>
                 <?php  
                    $data=array(

                      'name'=>'last_name',
                      'class'=>'form-control',
                      'value'=>$this->input->post('last_name'),


                    );

                    echo form_input($data);

                  ?>
                </div>

                      <?php
                if($identity_column!=='email') {
                echo '<p>';
                echo lang('create_user_identity_label', 'identity');
                echo '<br />';
                echo form_error('identity');
                echo form_input($identity);
                echo '</p>';
                }
                ?>


                <div class="form-group col-sm-6">
                  <label for="compay"> <?php echo lang('create_user_company_label', 'company');?></label>
                 <?php  
                    $data=array(

                      'name'=>'company',
                      'class'=>'form-control',
                      'value'=>$this->input->post('company'),


                    );

                    echo form_input($data);

                  ?>
                </div>


                <div class="form-group col-sm-6">
                  <label for="last_name"> <?php echo lang('create_user_email_label', 'email');?></label>
                 <?php  
                    $data=array(

                      'name'=>'email',
                      'class'=>'form-control',
                      'type'=>'email',
                      'value'=>$this->input->post('email'),


                    );

                    echo form_input($data);

                  ?>
                </div>


                <div class="form-group col-sm-6">
                  <label for="create_user_phone_label"> <?php echo lang('create_user_phone_label', 'phone');?></label>
                 <?php  
                    $data=array(

                      'name'=>'phone',
                      'class'=>'form-control',
                     
                      'value'=>$this->input->post('phone'),


                    );

                    echo form_input($data);

                  ?>
                </div>

                <div class="form-group col-sm-6">
                  <label for="create_user_province_label"> <?php echo lang('create_user_province_label', 'province');?></label>
                 <?php  
                    $data=array(

                      'name'=>'province',
                      'class'=>'form-control',
                     
                      'value'=>$this->input->post('province'),


                    );

                    echo form_input($data);

                  ?>
                </div>
                  <div class="form-group col-sm-6">
                  <label for="create_user_password_label"> <?php echo lang('create_user_password_label', 'password');?></label>
                 <?php  
                    $data=array(

                      'name'=>'password',
                      'class'=>'form-control',
                      'type'=>'password',
                      'value'=>$this->input->post('password'),


                    );

                    echo form_input($data);

                  ?>
                </div>




                <div class="form-group col-sm-6">
                  <label for="create_user_password_confirm_label"> <?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                 <?php  
                    $data=array(

                      'name'=>'password_confirm',
                      'class'=>'form-control',
                      'type'=>'password',
                      'value'=>$this->input->post('password_confirm'),


                    );

                    echo form_input($data);

                  ?>
                </div>



                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <p><?php echo form_submit('submit', lang('create_user_submit_btn'),'class="btn btn-primary"');?></p>
                
              </div>
            <?php echo form_close();?>
          </div>

        </div>
        <!--/.col (left) -->
        <!-- right column -->
      
      
        <!--/.col (right) -->
      </div>

</section>

</div>







































