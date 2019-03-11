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
                                      
        <th>Sr.No</th>
    	<th>Employee name</th>
        <th>dept name</th>
        <th>detail</th>
        <th>leave_from</th>
        <th>leave_to</th>
        <th>status</th>
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
    <td><?php $dept=$this->dbleave->getdeptname($row->dept_id); 
	           echo $dept->dept_name;?></td>
      <td><?php echo $row->detail;?></td>
    <td><?php echo $row->leave_from?> </td>
     <td><?php echo $row->leave_to;?>
     <td>
      <?php if($row->status=='0')
	  {
		  ?>
       <a class="btn btn-success" href="<?php echo base_url();?>index.php/admin/leave/app/<?php echo $row->leave_id;?>">Confirm</a>  
            
       <a class="btn btn-danger" href="<?php echo base_url();?>index.php/admin/leave/disapp/<?php echo $row->leave_id;?>">Reject</a>  
       <?php
	  }
	  else if($row->status=='1')
	  {
		  ?>
             <a class="btn btn-danger" href="<?php echo base_url();?>index.php/admin/leave/disapp/<?php echo $row->leave_id;?>">Reject  </a>  
          <?php
	  }
 	  else
	  {
		  ?>
           <a class="btn btn-success" href="<?php echo base_url();?>index.php/admin/leave/app/<?php echo $row->leave_id;?>">Confirm</a>  
          <?php
	  }
	  ?>
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
    </div>
    </body>
</html>