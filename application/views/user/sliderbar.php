<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>WORKAHOLIQ</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>user_css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>user_css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>user_css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>user_css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>


<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    &nbsp;<?php echo $this->session->userdata('emp_name');?>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url("index.php/user/dashborad/dashborad");?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/user/emp_info/edit/<?php echo $this->session->userdata('emp_id');?>">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url("index.php/user/task/view");?>">
                        <i class="pe-7s-note2"></i>
                        <p>View Task</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/user/emp_info/changepassword/<?php echo $this->session->userdata('emp_id');?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Change Password</p>
                    </a>
                </li>
               
                <li>
                    <a href="<?php echo base_url("index.php/user/leave");?>">
                        <i class="pe-7s-map-marker"></i>
                        <p>Leave</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("index.php/user/feedback/view");?>">
                        <i class="pe-7s-bell"></i>
                        <p>Feedback</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="<?php echo base_url('index.php/user/logout');?>">
                        <i class="pe-7s-rocket"></i>
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

   </div>
   <script src="<?php echo base_url();?>user_js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>user_js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url();?>user_js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url();?>user_js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url();?>user_js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url();?>user_js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url();?>user_js/demo.js"></script>

</body>
</html>
