<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/man_info/");?>">Add Manager</a>
        </li>
    </ul>
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>Manager View</h2>

        
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Sr.No</th>
        <th>Manager Name</th>
        <th>Department Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
	$no=1;
	foreach($alldata as $row)
	{
	?>
    <tr>
     <td><?php echo $no;?></td>
     <td><?php echo $row->man_name;?></td>
     
     <td><?php $dept=$this->dbman_info->getdeptname($row->dept_id); 
	           echo $dept->dept_name;?></td>
      
           
     	       
     <td><?php echo $row->email;?></td>
     
     <td><?php echo $row->gender;?></td>
     <td><img src="<?php echo base_url();?>\man_img\<?php echo $row->image; ?>"  height="100" width="100"/></td>
      <td>
      		
           <a href="<?php echo base_url();?>index.php/admin/man_info/edit/<?php echo $row->man_id;?>" class="btn btn-info" >
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a href="<?php echo base_url();?>index.php/admin/man_info/delete/<?php echo $row->man_id;?>"class="btn btn-danger"  onclick="return confirm('Are You Sure Delete This Record')">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>

    </tr>
    
    <?php
	$no++;
	}
	?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
    
<script src="<?php echo base_url();?>admin_js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url();?>admin_js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url();?>admin_js/moment.min.js'></script>
<script src='<?php echo base_url();?>admin_js/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo base_url();?>admin_js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url();?>admin_js/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url();?>admin_js/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url();?>admin_js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url();?>admin_js/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url();?>admin_js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url();?>admin_js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url();?>admin_js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url();?>admin_js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url();?>admin_js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url();?>admin_js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url();?>admin_js/charisma.js"></script>



</body>
</html>