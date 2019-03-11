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
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <thead>
                                      
        <th>Sr.No</th>
    	
        <th>Manager name</th>
         <th>Task name</th>
        <th>comment</th>
       
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
    
     
    <td><?php echo $row->man_name;?> </td>
     <td><?php echo $row->task_name;?></td>
    <td><?php echo $row->comment;?></td>
    <td>
      <?php if($row->status=='Execelnt')
	  {
		  ?>
       <a class="alert alert-success">Excellent</a>  
            
         
       <?php
	  }
	  else if($row->status=='Good')
	  {
		  ?>
             <a class="alert alert-warning">Good  </a>  
          <?php
	  }
 	  else
	  {
		  ?>
           <a class="alert alert-danger">POOR</a>  
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