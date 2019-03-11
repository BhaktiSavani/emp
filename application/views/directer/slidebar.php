<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link type="text/css" href="<?php echo base_url();?>/directer_css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>/directer_css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>/directer_css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>/directer_css/font-awesome.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
     
</head>

<body>
 <div class="wrapper">
            <div class="container">
             <div class="row">
<div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo base_url("index.php/directer/dashborad/dashborad");?>"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="<?php echo base_url("index.php/directer/dept");?>"><i class="menu-icon icon-bullhorn"></i>Department</a>
                                </li>
                                <li><a href="<?php echo base_url("index.php/directer/emp_info/view");?>"><i class="menu-icon icon-inbox"></i>Employee<b class="label green pull-right">
                                   </b> </a></li>
                                <li><a href="<?php echo base_url("index.php/directer/man_info/view");?>"><i class="menu-icon icon-tasks"></i>Manager<b class="label orange pull-right">
                                    </b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="<?php echo base_url("index.php/directer/leave/view");?>"><i class="menu-icon icon-paste"></i>Leave</a></li>
                               
                                  <li><a href="<?php echo base_url("index.php/directer/emp_info/changepassword");?>"><i class="menu-icon icon-table"></i>Change Password</a></li>
						</ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url('index.php/directer/logout');?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                       </div>
                       
                        <!--/.sidebar-->
                    </div>
                    <script src="<?php echo base_url();?>/directer_js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/directer_js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/directer_js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/directer_js/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/directer_js/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/directer_js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>/directer_js/common.js" type="text/javascript"></script>
      
             
</body>
</html>