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
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li>
       <?php /*?> <li>
            <a href="<?php echo base_url("index.php/admin/emp_info/");?>">Add Employee </a>
        </li><?php */?>
    </ul>
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>All Employees</h2>

       
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Sr.No</th>
        <th>Employee Name</th>
        <th>Gender</th>
        <th>Qualification</th>
        <th>Email</th>
        <th>Profile</th>
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
    <td><?php echo $row->gender;?></td>
     <td><?php echo $row->email;?></td>
      <td><?php echo $row->qualification;?></td>
     <td><img src="<?php echo base_url();?>\emp_img\<?php echo $row->image; ?>"  height="100" width="100"/></td>
      <td>
      		<a class="btn btn-success" href="<?php echo base_url();?>index.php/admin/emp_info/details/<?php echo $row->emp_id;?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
          <?php /*?> <a href="<?php echo base_url();?>index.php/admin/emp_info/edit/<?php echo $row->emp_id;?>" class="btn btn-info" onclick="return confirm('Are u sure about the editing')">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a><?php */?>
            <a href="<?php echo base_url();?>index.php/admin/emp_info/delete/<?php echo $row->emp_id;?>"class="btn btn-danger"  onclick="return confirm('Are You Sure Delete This Record')">
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
 </body>
</html>   
<!-- data table plugin -->



