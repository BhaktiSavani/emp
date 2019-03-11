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
    <a href="<?php echo base_url("index.php/admin/dept/view");?>">
    	<i class="glyphicon glyphicon-arrow-left" > </i>
        
    </a>
    </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/emp_info/view");?>">View All Employee</a>
        </li>
    </ul>
    <div class="row">
    <div class="box col-md-12">
    
	
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i>List of Employee</h2>
			</div>
            <div class="box-content">
                <div class="box-content">
                    <ul class="dashboard-list">
                     <?php
	$no=1;
	foreach($deptdata as $row)
	{
	?>
                        <li>
                            <a href="#">
                                <img class="dashboard-avatar" 
                                     src="<?php echo base_url();?>emp_img/<?php echo $row->image;?>"></a>
                            <strong>Name:</strong><?php echo $row->emp_name;?> <a href="#">
                            </a><br>
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