<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="content" class="col-lg-10 col-sm-10">
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li>
       
    </ul>
<div class="row">



    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Sr.No</th>
        <th>code Name</th>
        <th>Employee Name</th>
        
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
     <td><?php echo rand();?></td>        
        
              
      <td>
     
      		
           <a href="<?php echo base_url();?>index.php/admin/attendance/edit/<?php echo $row->code_id;?>" class="btn btn-info" onclick="return confirm('Are u sure about the editing')">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
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