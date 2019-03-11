<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="span9">
 <ul class="breadcrumb">
       <?php /*?> <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li><?php */?>
        <li>
            <a href="<?php echo base_url("index.php/directer/dept/view");?>">Home</a>
        </li>
    </ul>
</div>

<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h4 style="color:#039";>All Employee</h4>
							</div>
		
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Sr.No</th>
        <th>Employee Name</th>
        <th>Department Name</th>
        <th>Email</th>
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
     <td><?php echo $row->emp_name;?></td>
     <td><?php $dept=$this->dbemp_info->getdeptname($row->dept_id); 
	           echo $dept->dept_name;?></td>
     <td><?php echo $row->email;?></td>
     <td><img src="<?php echo base_url();?>\emp_img\<?php echo $row->image; ?>"  height="100" width="100"/>
      <td>
      		<a class="btn btn-success" href="<?php echo base_url();?>index.php/directer/emp_info/details/<?php echo $row->emp_id;?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
          <?php /*?> <a href="<?php echo base_url();?>index.php/admin/emp_info/edit/<?php echo $row->emp_id;?>" class="btn btn-info" onclick="return confirm('Are u sure about the editing')">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a><?php */?>
            <a href="<?php echo base_url();?>index.php/directer/emp_info/delete/<?php echo $row->emp_id;?>"class="btn btn-danger"  onclick="return confirm('Are You Sure Delete This Record')">
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

<script src="<?php echo base_url();?>admin_js/bootstrap.min.js"></script>
<script src='<?php echo base_url();?>admin_js/jquery.dataTables.min.js'></script>
<!-- library for cookie management -->
<script src="<?php echo base_url();?>admin_js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url();?>admin_js/moment.min.js'></script>
<script src='<?php echo base_url();?>admin_js/fullcalendar.min.js'></script>
<!-- data table plugin -->
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

    </div>
 </body>
</html>   
<!-- data table plugin -->



