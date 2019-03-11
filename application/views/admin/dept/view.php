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
        <?php /*?><li>
            <a href="<?php echo base_url("index.php/admin/dept");?>"> Add Department</a>
        </li><?php */?>
    </ul>
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> All Department</h2>

      
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Sr.No</th>
        <th>Department Name</th>
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
     <td><?php echo $row->dept_name;?></td>
      <td>
      		  <a href="<?php echo base_url();?>index.php/admin/dept/details/<?php echo $row->dept_id;?>" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
               View Employee
            </a>
          <?php /*?> <a href="<?php echo base_url();?>index.php/admin/dept/edit/<?php echo $row->dept_id;?>" class="btn btn-info">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a href="<?php echo base_url();?>index.php/admin/dept/delete/<?php echo $row->dept_id;?>"class="btn btn-danger" href="#" onclick="return confirm('Are You Sure Delete This Record')">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a><?php */?>
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