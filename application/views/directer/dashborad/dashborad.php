<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

 
<div class=" row">
	 <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="<?php echo base_url("index.php/directer/dept");?>" class="btn-box medium span3"><i class="menu-icon icon-tasks"></i><b><?php echo $alldeptcount;?></b>
                                        <p class="text-muted">
                                           Department</p>
                                    </a><a href="<?php echo base_url("index.php/directer/man_info/view");?>" class="btn-box medium span3"><i class="icon-user"></i><b><?php echo $allempcount;?></b>
                                        <p class="text-muted">
                                           Manager</p>
                                    </a><a href="<?php echo base_url("index.php/directer/emp_info/view");?>" class="btn-box medium span3"><i class="icon-group"></i><b><?php echo $allmancount;?></b>
                                        <p class="text-muted">
                                            Employee</p>
                                    </a>
                                    </a><a href="<?php echo base_url("index.php/directer/leave/view");?>" class="btn-box medium span3"><i class="icon-edit"></i><b><?php echo $allleavecount;?></b>
                                        <p class="text-muted">
                                            Leave</p>
                                    </a>
                                  </div>
                                <div class="btn-box-row row-fluid">
                                	
                                    
                                    </a><a href="<?php echo base_url("index.php/directer/emp_info/changepassword");?>" class="btn-box medium span3"><i class="menu-icon icon-cog"></i><b></b>
                                        <p class="text-muted">
                                            Setting</p>
                                    </a>
                                    </a><a href="<?php echo base_url('index.php/directer/logout');?>" class="btn-box medium span3"><i class="menu-icon icon-signout"></i><b></b>
                                        <p class="text-muted">
                                           Logout</p>
                                    </a>
                                    </div>
                               
                                        </div>
                                    </div>
                                  
                            </div>

</body>
</html>