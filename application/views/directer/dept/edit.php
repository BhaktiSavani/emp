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
            <a href="<?php echo base_url("index.php/directer/dept/view");?>"> All Department</a>
        </li>
    </ul>
</div>
<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h4 style="color:#039";>Edit Department</h4>
							</div>
							<div class="module-body">
                                            <form role="form" method="post">
<form method="post">
<div class="form-group">
 <label for="exampleInputEmail1">Department Name</label>
<div><input type="text" name="dept_name" class="form-control" value="<?php echo $edit->dept_name;?>"></div>
</div>


<div><button type="submit" class="btn-info">Update</button>&nbsp; &nbsp;

<button type="reset" class="btn-primary">Reset</button>

</form>

</body>
</html>