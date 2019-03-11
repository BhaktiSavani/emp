<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="span9">
 <ul class="breadcrumb">
       <?php /*?> <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li><?php */?>
        <li>
            <a href="<?php echo base_url("index.php/directer/dept/view");?>">All Department</a>
        </li>
    </ul>
</div>
     <div class="span9">
	<div class="module-head">
    		<h4 style="color:#039";>All Employee</h4>
	</div>
	<div class="box col-md-10">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i>List of Employee</h2>

   <?php
	$no=1;
	foreach($deptdata as $row)
	{
	?>
                        <li>
                            <a href="#">
                                <img class="dashboard-avatar" 
                                     src="<?php echo base_url();?>emp_img/<?php echo $row->image;?>"></a>
                            <strong>Name:</strong><?php echo $row->emp_name;?> 
                            <br>
                            <strong>email:</strong><?php echo $row->email;?><br>
                            <strong>Qualification:</strong><?php echo $row->qualification;?>
                        </li>
                        
                            <?php
	$no++;
	}
	?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>