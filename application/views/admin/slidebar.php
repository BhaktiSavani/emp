<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/dashborad"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/dept/view"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Department</span></a></li>
                       
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/emp_info/view"><i
                                    class="glyphicon glyphicon-edit"></i><span>Employee</span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/task"><i class="glyphicon glyphicon-list-alt"></i><span> Task</span></a>
                        
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/feedback"><i
                                    class="glyphicon glyphicon-eye-open"></i><span>FeedBack</span></a></li>
                          
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Leave</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="<?php echo base_url();?>index.php/admin/leave/">Apply leave</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/leave/view">View Leave</a></li>
                            </ul>
                        </li>
                        
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/man_info/edit/<?php echo $this->session->userdata('man_id');?>"><i class="glyphicon glyphicon-pencil"></i><span>Edit Profile</span></a></li>     
                              <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/man_info/changepassword"><i class="glyphicon glyphicon-retweet"></i><span>Change Password</span></a></li>     
                       
                         
                        
                         <li><a href="<?php echo base_url('index.php/admin/logout');?>"><i class="glyphicon glyphicon-lock"></i><span>Log Out</span></a>
                        </li>
                    </ul>
                     </div>
            </div>
        </div>
 

  

</body>
</html>