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
 <div class="form">
        
    <div class="row">
        <ul class="tab-group">
        <li class="tab active"><a href="<?php echo base_url();?>index.php/admin/man_info/">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
	 <div class="tab-content">
        <div id="signup">   
          <h1>Manager Login</h1>
                
            <form  method="post">
            <?php echo $msg;?>
                <fieldset>
                 <div class="input-group input-group-lg">
             			<span class="input-group-addon"><i class="glyphicon glyphicon-th-list blue"></i></span>
                        <select name="dept_id" class="form-control" required autocomplete="off">
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
             </div>
                    <br>
                         <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" required autocomplete="off" name="man_name" placeholder="Username">
                    </div>
                 
                    <div align="left" style="color:#F00; text-transform:capitalize;"><?php echo form_error('man_name');?></div>
                   <br>

                    <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                  
                        <input type="password" name="password" required autocomplete="off" class="form-control" placeholder="Password">
                    </div>
                     <div align="left" style="color:#F00; text-transform:capitalize;"><?php echo form_error('password');?></div></br>
                  <div class="center col-md-10">
              	 	 <button class="button button-block"/>Log In</button>
                  </div> 
              
                
					
                   <div class="col-md-3" align="right">
                    </a>
            <a href="<?php echo base_url();?>index.php/admin/man_info/"class="btn btn-primary">
               
                Sign Up
            </a>
                        
                   </div> 	
                   
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div>
</div>

</body>
</html>