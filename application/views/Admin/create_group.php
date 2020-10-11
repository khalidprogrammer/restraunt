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
	<div class="col-sm-6 ">
		<div class="box box-primary">
			<div class="box-header with-border">
				<p><a href="<?=base_url()?>Admin" class="btn btn-primary">Back To Home</a></p>
				<h3 class="box-title"><?php echo lang('create_group_heading');?>
				</h3>
				<p><?php echo lang('create_group_subheading');?></p>
				<br>
				<div id="infoMessage" style="color:red"><?php echo $message;?></div>
			</div>
			<?php echo form_open("Admin/create_group");?>
			<div class="box-body">
				
				<p>
					<?php echo lang('create_group_name_label', 'group_name');?> <br />
					<?php echo form_input($group_name);?>
				</p>
				<p>
					<?php echo lang('create_group_desc_label', 'description');?> <br />
					<?php echo form_input($description);?>
				</p>
				<p><?php echo form_submit('submit', lang('create_group_submit_btn'),'class="btn btn-primary"');?></p>
				
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</section>
</div>
