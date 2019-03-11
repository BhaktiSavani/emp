<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<body>
<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url("index.php/user/task/view");?>">
    	<i class="glyphicon glyphicon-arrow-left" > </i>
    </a>
        </li>
         <li>
            <a href="<?php echo base_url("index.php/user/dashborad/dashborad");?>">Home</a>
        </li>
       <?php /*?> <li>
            <a href="<?php echo base_url("index.php/admin/emp_info/");?>">Add Employee </a>
        </li><?php */?>
    </ul>
    <div class="row">
    <div class="box col-md-12">
   
    <div class="box-inner">
   
    </div>

   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
     <?php
	$no=1;
	foreach($taskdata as $row)
	{
	?>
    <tr>
    	
        <th>Sr.No</th>
        <td><?php echo $row->task_id;?></td>
    </tr>
    <tr>
        <th>Task Name</th>
        <td><?php echo $row->task_name;?></td>
     </tr>
      <tr>
                    
      
      <tr>
          <th>Task Date</th>
          <td><?php echo $row->task_date;?></td>
      </tr>
      <tr>
          <th>Complitation Date</th>
          <td><?php echo $row->comp_date;?></td>
      </tr>
      <tr>
          <th>Task Description</th>
           <td><?php echo $row->task_des;?></td>
      </tr>
      
    </thead>
    <tbody>
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