
<aside class="main-sidebar">
<section class="sidebar">
    <ul class="sidebar-menu">
      <li class="active">
        <a href="dashboard.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
<?php 
      error_reporting(0);
      if($_SESSION['role_id'] == 1) {
?>
   

    <li class="treeview">
      <a href="#">
        <i class="fa fa-paper-plane"></i> <span>Outlet Management</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li>
          <a href="outlet_list.php"><i class="fa fa-dot-circle-o "></i>Outlet List</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-dot-circle-o "></i> Reports <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="outlet_info.php"><i class="fa fa-circle"></i> Outlet Info</a></li>
            <li><a href="outlet_inquiry_info.php"><i class="fa fa-circle"></i> Outlet Agreement Status</a></li>
          </ul>
        </li>
      </ul>
    </li>

    <!-- Human Resource start -->
    <li class="treeview">
      <a href="#">
        <i class="fa fa-paper-plane"></i> <span>Human Resource</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="hr_list.php"><i class="fa fa-dot-circle-o "></i>HR Listing</a></li>
        <li><a href="#"><i class="fa fa-dot-circle-o "></i>Attendance Management</a></li>
        <li><a href="#"><i class="fa fa-dot-circle-o "></i>Leave Management</a></li>
        <li><a href="#"><i class="fa fa-dot-circle-o "></i>MIS Report</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i> <span>Asset Management</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="asset_list.php"><i class="fa fa-circle-o"></i>Outlet Wise Asset list</a></li>
        <li><a href="asset_transfer_details.php"><i class="fa fa-circle-o"></i>Asset Transfer</a></li>
        <li><a href="tag_log.php"><i class="fa fa-circle-o"></i>Tag Log</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Maintanance</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="maintance_list.php"><i class="fa fa-circle-o"></i>Add Maintanance Catagory</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Requisition For Maintanance</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Complain Generate</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Schedule Maintenance</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Complain Assign</a></li>
        <li><a href="complain-solve-report.php"><i class="fa fa-circle-o"></i>Complain Solve</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>MIS Report</a></li>
        <li><a href="tag_log.php"><i class="fa fa-circle-o"></i>Tag Log</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i> <span>Branding & Marketing Materials</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="branding_marketing_materials.php"><i class="fa fa-circle-o"></i>Outlet Branding Material list</a></li>
        <li><a href="material_request.php"><i class="fa fa-circle-o"></i>Material Requisition</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i> <span>Sales Reporting</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i>Outlet Wise Monthly Sales Target Setup</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Outlet Wise Daily Sales Posting</a></li>
        <li><a href="sales_report.php"><i class="fa fa-circle-o"></i>Sales Report</a></li>
        <li><a href="excel_upload_sales.php"><i class="fa fa-circle-o"></i>Excel Upload for sales</a></li>
      </ul>
    </li>
    
    <li class="treeview">
      <a href="#">
        <i class="fa fa-paper-plane"></i> <span>Attendance Management</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="attandance.php"><i class="fa fa-dot-circle-o "></i>Give Attendance</a></li>
        <li><a href="show_attendance.php"><i class="fa fa-dot-circle-o "></i>Attendance List</a></li>
      </ul>
    </li>
    
    </ul>
  </section>
    <?php  } elseif($_SESSION['role_id'] == 3) { ?>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i> <span>Asset Management</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="asset_list.php"><i class="fa fa-circle-o"></i>Outlet Wise Asset list</a></li>
        <li><a href="asset_transfer_details.php"><i class="fa fa-circle-o"></i>Asset Transfer</a></li>
        <li><a href="#asset-request-approval"><i class="fa fa-circle-o"></i>Asset Request Approval</a></li>
        <li><a href="tag_log.php"><i class="fa fa-circle-o"></i>Tag Log</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Maintanance</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <!-- <li><a href="maintance_list.php"><i class="fa fa-circle-o"></i>Add Maintanance Catagory</a></li> -->
        <li><a href="#maintenance-list"><i class="fa fa-circle-o"></i>Maintenance List</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Requisition For Maintanance</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Complain Generate</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Schedule Maintenance</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Complain Assign</a></li>
        <li><a href="complain-solve-report.php"><i class="fa fa-circle-o"></i>Complain Solve</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>MIS Report</a></li>
        <li><a href="tag_log.php"><i class="fa fa-circle-o"></i>Tag Log</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i> <span>Branding & Marketing Materials</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="branding_marketing_materials.php"><i class="fa fa-circle-o"></i>Outlet Branding Material list</a></li>
        <li><a href="material_request.php"><i class="fa fa-circle-o"></i>Material Requisition</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-paper-plane"></i> <span>Attendance Management</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="attandance.php"><i class="fa fa-dot-circle-o "></i>Give Attendance</a></li>
        <li><a href="#attendance-list"><i class="fa fa-dot-circle-o "></i>Attendance List</a></li>
      </ul>
    </li>

<?php
    } else  { ?>

    
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i> <span>Asset Management</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="asset_list.php"><i class="fa fa-circle-o"></i>Outlet Wise Asset list</a></li>
        <li><a href="asset_transfer_details.php"><i class="fa fa-circle-o"></i>Asset Transfer</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Maintanance</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="maintance_list.php"><i class="fa fa-circle-o"></i>Add Maintanance Catagory</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Requisition For Maintanance</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Complain Generate</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Schedule Maintenance</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Complain Assign</a></li>
        <li><a href="complain-solve-report.php"><i class="fa fa-circle-o"></i>Complain Solve</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>MIS Report</a></li>
        <li><a href="tag_log.php"><i class="fa fa-circle-o"></i>Tag Log</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i> <span>Sales Reporting</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i>Outlet Wise Monthly Sales Target Setup</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Outlet Wise Daily Sales Posting</a></li>
        <li><a href="sales_report.php"><i class="fa fa-circle-o"></i>Sales Report</a></li>
        <li><a href="excel_upload_sales.php"><i class="fa fa-circle-o"></i>Excel Upload for sales</a></li>
      </ul>
    </li> 

    <li class="treeview">
      <a href="#">
        <i class="fa fa-paper-plane"></i> <span>Attendance Management</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="attandance.php"><i class="fa fa-dot-circle-o "></i>Give Attendance</a></li>
        <li><a href="show_attendance.php"><i class="fa fa-dot-circle-o "></i>Attendance List</a></li>
      </ul>
    </li>
  </section>

  <?php } ?>
 
</aside>