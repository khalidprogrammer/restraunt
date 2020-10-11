<!-- Content Wrapper. Contains page content -->

<style>
.label a{
color:#ffff;
}
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!--  <h1>
    Reports
    <small>List</small>
    </h1> -->
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section><br>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-warning box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Add Reports</h3>
            <form action="" method="post">
              <input type="text" name="test">
              <input type="submit" value="submit">
            </form>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <div class="modal fade" id="ASSIGN_USER_MODAL" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                  <h4 class="modal-title">Add New user</h4>
                </div>
                
                <form action="<?=site_url('Admin/add_test')?>"  role="form" method="post" enctype="multipart/form-data" id = "userForm">
                  <div class="modal-body">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="">Select Province</label>
                            <select name="province" id="province" class="form-control province">
                              <option>No Selected</option>
                              <?php foreach ($provinces as $value) {?>
                              <option value="<?=$value['id']?>"><?=$value['title']?></option>
                              <?php } ?>
                            </select>
                            
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="">Select Distric</label>
                            <select name="distric" id="distric" class="form-control distric">
                              <option value=""></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="">Select Village</label>
                            <select name="village" id="village" class="form-control village">
                              <option value=""></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for="">Kinds Disaster</label>
                            <select name="Kinds_Disaster" id="Kinds_Disaster" class="form-control">
                              <option value="">Select Disaster Type</option>
                              <option value="Flood">Flood</option>
                              <option value="Havey Rainfall">Havey Rainfall</option>
                              <option value="Landslide">Landslide</option>
                              <option value="Earthquake">Earthquake</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Date</label>
                            <input type="date" name="date" id="date" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Natural martyr</label>
                            <input type="text" name="Naturalmartyr" id="Naturalmartyr" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Un natural</label>
                            <input type="text" name="Unnatural" id="Unnatural" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Natural injured</label>
                            <input type="text" name="Naturalinjured" id="Naturalinjured" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "> UnNatural injured</label>
                            <input type="number" name="Unnaturalinjured" id="Unnaturalinjured" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Female</label>
                            <input type="number" name="Female" id="Female" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Male</label>
                            <input type="number" name="Male" id="Male" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Child</label>
                            <input type="number" name="Child" id="Child" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Total damage</label>
                            <input type="number" name="Totaldamage" id="Totaldamage" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Partial damage</label>
                            <input type="number" name="Partialdamage" id="Partialdamage" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Mosques</label>
                            <input type="number" name="Mosques" id="Mosques" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Office</label>
                            <input type="number" name="Office" id="Office" class="form-control" min="0">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Trees</label>
                            <input type="number" name="Trees" id="Trees" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Live stock</label>
                            <input type="number" name="Livestock" id="Livestock" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Agricultural land</label>
                            <input type="number" name="Agriculturalland" id="Agriculturalland" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Bridge</label>
                            <input type="number" name="Bridge" id="Bridge" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Road/Km</label>
                            <input type="number" name="Road" id="Road" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Displaced</label>
                            <input type="number" name="Displaced" id="Displaced" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">Regressive</label>
                            <input type="number" name="Regressive" id="Regressive" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" ">info</label>
                            <textarea name="Info" id="Info" class="form-control"></textarea>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-success" type="submit" id="update_btn"> Save</button>
                    <button data-dismiss="modal" class="btn btn-danger empty" type="button">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="display: none;">
            <div class="row" style="margin-top: 5px;">
              <div class="col-lg-12">
                <div id="user_grid"></div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
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
<script type="text/javascript">
function user_list(keyword){
$('#user_grid').kendoGrid({
dataSource:{
transport:{
read:{
url:"<?=base_url()?>Admin",
dataType:'json',
data:{
keyword:keyword ,
}
},
},
schema:{
total:"total",
data:"data",
},
pageSize:10,
pageSizes:true,
serverPaging:true,
},
toolbar:[
{ name: "Add New User" }
],
columns:[
{field:'name',title:'Province',attributes:{class:"name"}},
{field:'email',title:'Distric',attributes:{class:"email"}},
{field:'role_title',title:'Village',attributes:{class:"role_title"}},
// {field:'project_title',title:'PROJECT',attributes:{class:"project_title"}},
{field:'signature',title:'',hidden:true,attributes:{class:"signature"}},
{command: ["edit"], title: "ACTION", width: "100px"},
{field:'user_id',title:"",hidden:true,attributes:{class:"user_id"}},
{field:'role_id',title:"",hidden:true,attributes:{class:"role_id"}},
{field:'project_id',title:"",hidden:true,attributes:{class:"project_id"}},
],
scrollable:true,
pageable:true,
sortable:true,
selectable:true,
pageable:{
pageSizes:[10,20,25,50],
buttonCount:5,
refresh:true
},
});
}
user_list();
$('.k-grid-AddNewUser').on('click',function(){
$('.modal-title').empty().text('Save');
$('#userForm').find(':input').val('');
$('label.error').empty();
$('.show-img').empty();
$('#ASSIGN_USER_MODAL').modal('show');
});
$(document).ready(function(){
$('#province').change(function(){
var province_id = $(this).val();
if(province_id != ''){
$.ajax({
url:"<?php echo site_url('Admin/fetch_distric') ?>",
method:"POST",
data: {province_id : province_id},

success: function(data){
$('#distric').html(data);
$('#village').html('<option>Select Village</option>')
}
});
}
else {
$('#distric').html('<option value="">Select Distric</option>');
$('#village').html('<option>Select Village</option>')
}

});
// fetch get villages
$('#distric').change(function(){
var distric_id = $(this).val();
if(distric_id != ''){
$.ajax({
url:"<?php echo site_url('Admin/fetch_vilage') ?>",
method:"POST",
data: {distric_id : distric_id},

success: function(data){
$('#village').html(data);

}
});
}
else {

$('#village').html('<option>Select Village</option>')
}

});

});

$(function(){
$('.province').chosen({
allow_single_deselect: true
});
});
</script>