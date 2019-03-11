<!DOCTYPE html>
<html lang="en"><head>
   
    <title>WORKAHOLIQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?php echo base_url();?>admin_css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link id="bs-css" href="<?php echo base_url();?>admin_css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>admin_css/charisma-app.css" rel="stylesheet">
       <!-- jQuery -->
    <script src="<?php echo base_url();?>admin_js/jquery.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico">
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


<div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img src="<?php echo base_url();?>/man_img/logo.png" alt="Charisma Logo" width="500" height="200" class="hidden-xs" style="size:100px"; />
                <strong><span>Workaholiq</span><span></span></strong></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
             	 <a href="#">
                <img class="dashboard-avatar" alt="usman" src="<?php echo base_url();?>man_img/<?php echo $this->session->userdata('image');?>" /></a>
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs" style="text-transform:capitalize;">&nbsp;<?php echo $this->session->userdata('man_name');?></span>
                    <span class="caret"></span>
                </button>
               
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url();?>index.php/admin/man_info/edit/<?php echo $this->session->userdata('man_id');?>">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('index.php/admin/logout');?>">Logout</a></li>
                </ul>
               
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
              
                
                
            </ul>

        </div>
    </div>
    
 <script src="<?php echo base_url();?>admin_js/bootstrap.min.js"></script>
<script src='<?php echo base_url();?>admin_js/jquery.dataTables.min.js'></script>
<!-- library for cookie management -->
<script src="<?php echo base_url();?>admin_js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url();?>admin_js/moment.min.js'></script>
<script src='<?php echo base_url();?>admin_js/fullcalendar.min.js'></script>
<!-- data table plugin -->
<!-- select or dropdown enhancer -->
<script src="<?php echo base_url();?>admin_js/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url();?>admin_js/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url();?>admin_js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url();?>admin_js/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url();?>admin_js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url();?>admin_js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url();?>admin_js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url();?>admin_js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url();?>admin_js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url();?>admin_js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url();?>admin_js/charisma.js"></script>   
    
    </body>
    </html>
    
 
