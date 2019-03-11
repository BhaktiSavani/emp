<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <form class="form-horizontal"  method="post">
                <fieldset>
                
                <?php echo $msg;?>
                
                	<div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" name="man_name" class="form-control" value="<?php echo $this->session->userdata('man_name');?>" placeholder="Username">
                    </div>
                    <br />
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Old Password">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-random green"></i></span>
                        <input type="password" name="newpass" class="form-control" placeholder="New Password">
                        <?php echo form_error('newpass');?>
                    </div>
                    <br />
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock green"></i></span>
                        <input type="password" name="conpass" class="form-control" placeholder="Confirm Password">
                        <?php echo form_error('conpass');?>
                    </div>
                    <div class="clearfix"></div>

                   
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </p>
                </fieldset>
            </form>
        </div>
    
</body>
</html>