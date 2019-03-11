<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WORKAHOLIQ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
        <link type="text/css" href="<?php echo base_url();?>/directer_css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>/directer_css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>/directer_css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>/directer_css/font-awesome.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
     <style>
   .dataTables_filter
   {
	   float:right !important;
	   color:cornflowerblue !important;
   }
   .dataTables_info
   {
	   color:cornflowerblue !important;
   }
   .table thead tr th
   {
	  color:cornflowerblue !important; 
   }
   
   </style>
</head>


<body>
<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
<div class="navbar-inner">
                <div class="container">
                   <div class="nav pull-left"> 
                   <img src="<?php echo base_url();?>/man_img/logo.png" style="size:20";/></div>
                   <a class="brand" href="index.html">WORKAHOLIQ</a>
                 
                       
                        <ul class="nav pull-right">
                         <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-sm hidden-xs" style="text-transform:capitalize;">&nbsp;<?php echo $this->session->userdata('username');?></span>
                    <span class="icon-caret-down"></span>
                </button>
                                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url();?>index.php/directer/emp_info/changepassword">Change password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('index.php/directer/logout');?>">Logout</a></li>
                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
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