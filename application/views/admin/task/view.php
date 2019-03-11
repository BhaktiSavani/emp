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
    <li><a href="<?php echo base_url("index.php/admin/task/");?>">
    <i class="glyphicon glyphicon-arrow-left" ></i></a>
        <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</li></a>
        
        <li>
            <a href="<?php echo base_url("index.php/admin/task/");?>">Task Add</a>
        </li>
    </ul>
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i>All Task</h2>

       
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Sr.No</th>
        <th>Task Name</th>
        <th>Employee Name</th>
        <th>Task Date</th>
        <th>Complitation Date</th>
        <th>Task Description</th>
        <th>status</th>
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
     <td><?php echo $row->task_name;?></td>
      <td><?php $emp=$this->dbtask->getempname($row->emp_id); 
	           echo $emp->emp_name;?></td>
      
     <td><?php echo $row->task_date; ?></td>
               
    <td><?php echo $row->comp_date; ?></td>
               
   
     <td><?php echo $row->task_des;?></td>        
        <td>
      <?php if($row->status=='0')
	  {
		  ?>
            <div class="alert alert-info"><?php echo 'Pending';?></div>
       <?php
	  }
	  else if($row->status=='1')
	  {
		  ?>
            <div class="alert alert-success"><?php echo 'Started';?></div>
          <?php
	  }
 	  else
	  {
		  ?>
          <div class="alert alert-danger"><?php echo 'Done';?></div>
          <?php
	  }
	  ?>
     </td>
              
      <td>
      <a class="btn btn-success" href="<?php echo base_url();?>index.php/admin/task/details/<?php echo $row->task_id;?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
      		
           <a href="<?php echo base_url();?>index.php/admin/task/edit/<?php echo $row->task_id;?>" class="btn btn-info" onclick="return confirm('Are u sure about the editing')">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a href="<?php echo base_url();?>index.php/admin/task/delete/<?php echo $row->task_id;?>"class="btn btn-danger"  onclick="return confirm('Are You Sure Delete This Record')">
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