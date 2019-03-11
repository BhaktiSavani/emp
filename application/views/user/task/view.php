<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">TASK DETAIL</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                         <tr>
        <th>Sr.No</th>
        <th>Task Name</th>
        <th>Department Name</th>
        <th>Employee name</th>
        <th>Task Date</th>
        <th>Complitation Date</th>
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
    
     
     <td><?php echo $row->task_date; ?></td>
               
    <td><?php echo $row->comp_date; ?></td>
               
     <td><?php $emp=$this->dbtask->getempname($row->emp_id); 
	           echo $emp->emp_name;?></td>
      
     <td><?php echo $row->task_des?></td>        
      
       <td>
      <?php if($row->status=='0')
	  {
		  ?>
       <a class="btn btn-success" href="<?php echo base_url();?>index.php/user/task/app/<?php echo $row->task_id;?>">Started</a>  
            
       <a class="btn btn-danger" href="<?php echo base_url();?>index.php/user/task/disapp/<?php echo $row->task_id;?>">Done</a>  
       <?php
	  }
	  else if($row->status=='1')
	  {
		  ?>
             <a class="btn btn-danger" href="<?php echo base_url();?>index.php/user/task/disapp/<?php echo $row->task_id;?>">Done  </a>  
          <?php
	  }
 	  else
	  {
		  ?>
           <a class="btn btn-success" href="<?php echo base_url();?>index.php/user/task/disapp/<?php echo $row->task_id;?>">Compilited</a>  
          <?php
	  }
	  ?>
     </td>
    

    
      <td>
      <a class="btn btn-success" href="<?php echo base_url();?>index.php/user/task/details/<?php echo $row->task_id;?>" onclick="return confirm('Are u sure about the editing')">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
      		
           
            
        </td>
    
     <?php
	$no++;
	}
	?>
                                      </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    
</div>
</div>
</div>



</body>
</html>