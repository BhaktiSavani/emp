<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<body>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Leave Status</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                 <thead>
                                         <tr>
   
                                      
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
	foreach($leave_noti as $row)
	{
	?>
    		 <tr>
     <td><?php echo $no;?></td>
    <td><?php echo $row->emp_name;?></td>
    <td><?php $dept=$this->dbdashborad->getdeptname($row->dept_id); 
	           echo $dept->dept_name;?></td>
      <td><?php echo $row->detail;?></td>
    <td><?php echo $row->leave_from?> </td>
    
     <td><?php echo $row->leave_to;?>
     <td>
      <?php if($row->status=='0')
	  {
		  ?>
            <div class="alert alert-warning"><?php echo 'Pending';?></div>
       <?php
	  }
	  else if($row->status=='1')
	  {
		  ?>
            <div class="alert alert-success"><?php echo 'Confirm';?></div>
          <?php
	  }
 	  else
	  {
		  ?>
          <div class="alert alert-danger"><?php echo 'Reject';?></div>
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
    </div></body>
</html>