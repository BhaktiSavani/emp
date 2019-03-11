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
    <a href="<?php echo base_url("index.php/admin/task/view");?>">
    	<i class="glyphicon glyphicon-arrow-left" > </i>
    </a>
    </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/task/view");?>">View All Task</a>
        </li>
    </ul>
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2 style="text-transform:capitalize;"><i class="glyphicon glyphicon-user"></i> Detail Of
         
	</div>
    
    
    <div class="box-content">
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
                       <th> Employee Name</th>
                        
                       
						<td>
                        <?php $allemp=$this->dbtask->getallempname($row->emp_id);?>
						<?php echo $allemp->emp_name; ?> 
						
                        
                    </td>
         </tr>
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
      <tr>
          <th>Task Description</th>
           <td><?php echo $row->status;?></td>
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