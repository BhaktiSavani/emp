<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
  <link href="<?php echo base_url();?>user_css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>user_css/animate.min.css" rel="stylesheet"/>
  
   <link href="<?php echo base_url();?>user_css/light-bootstrap-dashboard.css" rel="stylesheet"/>
   <link href="file:///C|/wamp/www/emp/user_css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<style>
 body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background: url("http://i.imgur.com/HgflTDf.jpg") 50% fixed;
  background-size: cover;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background: rgba(4, 40, 68, 0.85);
}

.login .title {
  color: #444;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}

.well
{
	padding:0px !important;
} 
.panel-heading 
{
	text-align:center !important;
	color:#09F !important;
	font-size:20px !important;
	font-family:"Century Gothic";
	font-weight:bold; 
}
.btn
{
	background-color: #3472F7 !important;
	color:#FFF !important;
}
.btn-danger
{
	background-color:#F00 !important;
}
</style>

</head>

<body>
                      <div class="wrapper">   
                     <div class="well col-md-5  col-md-offset-2s" style="margin-top:90px; margin-bottom:90px;">
                    <div class="panel panel-heading">
                          Login
                        </div>
                        
                        
                        
                     <form  method="post" class="form-horizontal" style="padding:20px;">           

                       <?php echo $msg;?>
                           
                    <div class="input-group input-group-lg" align="center">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-th-list red"></i></span>
                        <select name="dept_id" class="form-control">
                        <option value="" hidden="">Choose Department Name</option>
						<?php $alldept=$this->dblogin->getalldept();?>
						<?php
						foreach($alldept as $row_dept)
						{
							?>
                            <option value="<?php echo $row_dept->dept_id;?>"><?php echo $row_dept->dept_name;?></option>
                            <?php
						}
						?>
                        </select>
                        
                       
                        
                    </div>
                    
                     <div align="left" style="color:#F00; text-transform:capitalize;"><?php echo form_error('dept_id');?></div>
             
                    <br>
                         <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" name="emp_name" placeholder="Username" value="<?php echo set_value('emp_name');?>">
                    </div>
                 
                    <div align="left" style="color:#F00; text-transform:capitalize;"><?php echo form_error('emp_name');?></div>
                   <br>

                    <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                  
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                     <div align="left" style="color:#F00; text-transform:capitalize;"><?php echo form_error('password');?></div></br>
                  <div class="">
              	 	<button type="submit" class="btn btn-primary" > LogIn</button>&nbsp;&nbsp;&nbsp;
                 	<a href="<?php echo base_url();?>/index.php/user/dashborad/dashborad" class="col-md-offset-7">
                     <a href="<?php echo base_url();?>index.php/user/emp_info/"class="btn btn-primary">
               
                Sign Up
            </a>
                  </div> 
           
              
                  </div> 
                 </div>  
               </div> 
               </div>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div>
</div>

</body>
</html>