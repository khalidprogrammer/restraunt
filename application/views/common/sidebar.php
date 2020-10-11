<!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=lang('msg_first_name')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="treeview">
          <a href="<?=base_url()?>Admin/index">
            <i class="fa fa-files-o"></i>
            <span>Users List</span>
            <span class="pull-right-container">
            </span>
          </a>
          
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li><a href="<?=base_url()?>Admin/show_report_list"><i class="fa fa-circle-o"></i>Add Reports</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Show Reports</a></li>
            
          </ul>
        </li>
        
        
        <li><a href="<?=base_url()?>Admin/change_password"><i class="fa fa-book"></i> <span>Change Password</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="<?=base_url()?>auth/logout"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 