<!-- Content Wrapper. Contains page content -->

<style>
.label a{
color:#ffff;
}
</style>
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
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header bg-info">
            <h3 class="box-title">All User List</h3><br>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <span class="label label-warning"><?php echo anchor('Admin/create_user', lang('index_create_user_link'))?> </span> |
            <span class="label label-primary"> <?php echo anchor('Admin/create_group', lang('index_create_group_link'))?></span>
            <table class="table table-hover">
              <tr>
                <th><?php echo lang('index_fname_th');?></th>
                <th><?php echo lang('index_lname_th');?></th>
                <th><?php echo lang('index_email_th');?></th>
                <th><?php echo lang('index_groups_th');?></th>
                <th><?php echo lang('index_status_th');?></th>
                <th><?php echo lang('index_action_th');?></th>
              </tr>
              <tbody>
                <?php foreach ($users as $user):?>
                <tr>
                  <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                  <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                  <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                  <td>
                    <?php foreach ($user->groups as $group):?>
                    <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                    <?php endforeach?>
                  </td>
                  <td >
                    <span>
                    <?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'),array('class'=>'label label-success')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'), array('class' => 'label label-danger'));?></span></td>
                    <td><span class="label label-navy" style="background: #001F3F"><?php echo anchor("Admin/edit_user/".$user->id, 'Edit') ;?></span>
                    
                  </td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- Small boxes (Stat box) -->
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->
</section>
<!-- /.content -->
