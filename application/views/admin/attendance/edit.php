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
        <li>
            <a href="<?php echo base_url("index.php/admin/emp_info/view");?>">Employee List</a>
        </li>
    </ul>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Employee</h2>

                
            </div>
            <div class="box-content">
                <form role="form" method="post" enctype="multipart/form-data">
                   
                    <div class="form-group">
                    <table  border="3">
                    <?php
	$no=1;
	foreach($edit as $edit)
	{
	?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emp Name</label>
                        <input type="text" name="emp_name" value="<?php echo $edit->emp_name;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Employee name">
                     </div>

                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">code</label>
                        <input type="code" name="code" value="<?php echo $edit->code;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter DOB">
                     </div>

<?php
	$no++;
	}
	?>
			
 <button type="submit" class="btn btn-default">Submit</button>                   
</body>
</html>