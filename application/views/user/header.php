<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WORKAHOLIQ</title>

</head>

<body>
 <div class="main-panel">
<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <img src="<?php echo base_url();?>/man_img/logo.png" style="size:20";/>
                   
                </div> &nbsp; &nbsp;
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                             <a class="navbar-brand" href="#">WORKAHOLIQ</a>
                               
                            </a>
                        </li>
                        
                      
                    </ul>
                    <div class="row">
                  <?php /*?>  <div class="col-md-2 col-md-offset-3">
                     <button class="btn btn-default btn-block" onclick="demo.showNotification('top','left')" >love it</button>
                    </div><?php */?>
                    
                     <div class="btn-group pull-right">
             	 
               <?php /*?> <img class="avatar border-gray" src="<?php echo base_url();?>emp_img/<?php echo $this->session->userdata('image');?>" /><?php */?>
              <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs" style="text-transform:capitalize;">&nbsp;<?php echo $this->session->userdata('emp_name');?></span>
                    <span class="caret"></span>
                </button>
               
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url();?>index.php/user/emp_info/edit/<?php echo $this->session->userdata('emp_id');?>">Profile</a></li>
                    <li class="divider"></li>
                   <li><a href="<?php echo base_url('index.php/user/logout');?>">Logout</a></li>
                </ul>
               
            </div>
                     
              

                  
                </div>
            </div>
        </nav>
       
</body>
</html>