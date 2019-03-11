<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link id="bs-css" href="<?php echo base_url();?>admin_css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link id="bs-css" href="<?php echo base_url();?>admin_css/bootstrap.min.css" rel="stylesheet">
	 <link id="bs-css" href="<?php echo base_url();?>admin_css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin_css/charisma-app.css" rel="stylesheet">
    

</head>


<body>

 <div class="row">

        <div class="form col-md-12center login-box">
               <ul class="tab-group">
        <li class="tab active"><a href="<?php echo base_url();?>index.php/admin/man_info/">Sign Up</a></li>
        <li class="tab"><a href="<?php echo base_url();?>index.php/admin/login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
         		<h1>Sign Up</h1>
                <form  method="post" enctype="multipart/form-data">
                      <fieldset>
					  
                      <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" required autocomplete="off" class="form-control" name="man_name" placeholder="Username">
                    </div>
                    </div>
                   <br/>
                    <div class="input-group input-group-lg">
                    	<span class="input-group-addon"><i class="glyphicon glyphicon-th-list blue"></i></span>
                        
                        <select name="dept_id" class="form-control" required autocomplete="off">
                        <option value="" hidden="">Choose Department Name</option>
						<?php $alldept=$this->dbman_info->getalldept();?>
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
                    <br/>
                   
                    <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                       
                        <input type="password" name="password" required autocomplete="off" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Password">
                     </div>
					 <br/>
                    <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                        
                       <div class="form-control">
                        <input type="radio" name="gender"  value="Male">Male<input type="radio" name="gender" value="Female"> Female</div>
                        
                        
                    </div>
                <br/>
                     <div class="input-group input-group-lg">
                     <span class="input-group-addon"><i class=" glyphicon glyphicon-envelope yellow"></i></span>
                       
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" required autocomplete="off" placeholder="Enter email">
                     </div>
                      <br/>
                     <div class="input-group input-group-lg">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                        
                        <input type="text" name="contact_no" class="form-control" id="exampleInputEmail1" required autocomplete="off" placeholder="Enter mobile number">
                        
                     </div>
                      <br/>
                     <div class="input-group input-group-lg">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-picture green"></i></span>
                        
                        <input type="file"  name="image"  class="form-control" required autocomplete="off" placeholder="Enter Your image path">
                     </div>
                    
                    <br/>
                 		  <button type="submit" class="button button-block"/>Sign up</button>
                       
               </fieldset>
                </form>

            </div>
    
    <!--/span-->
</div>
</div>



</body>
</html>