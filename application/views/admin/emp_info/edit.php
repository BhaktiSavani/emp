<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="content" class="col-lg-10 col-sm-10">
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/emp_info/view");?>">Employee List</a>
        </li>
    </ul>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Employee</h2>

                
            </div>
            <div class="box-content">
                <form role="form" method="post" enctype="multipart/form-data">
                   
                    <div class="form-group">
                    <table  border="3">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emp Name</label>
                        <input type="text" name="emp_name" value="<?php echo $edit->emp_name;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Employee name">
                     </div>

                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" value="<?php echo $edit->password;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter DOB">
                     </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <div class="form-control">
                        <?php
						if($edit->gender=='Male')
						{
						?>
                      <input type="radio" name="gender"  value="Male" checked="checked" placeholder="">Male                      <input type="radio" name="gender"  value="Female"> Female
                        <?php
						}
						else
						{
							?>
                      <input type="radio" name="gender"  value="Male">Male                      
                      <input type="radio" name="gender"  value="Female" checked="checked"> Female
                         <?php            
						}
						?>
                        </div>
                    </div>
                      
                      
                      <div class="form-group">
                        <label>Date of Birth</label>
                        
						<input type="text" name="DOB" class="form-control" value="<?php echo $edit->DOB;?>"id="exampleInputEmail1" placeholder="Enter DOB">	  						
                         </div>
                     
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Age</label>
                        <input type="text" name="age" class="form-control" value="<?php echo $edit->age;?>" id="exampleInputEmail1" placeholder="Enter DOB">
                     </div>
                     
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $edit->email;?>" id="exampleInputEmail1" placeholder="Enter email">
                     </div>
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Contact No</label>
                        <input type="text" name="contact_no" class="form-control" value="<?php echo $edit->contact_no;?>"id="exampleInputEmail1" placeholder="Enter mobile number">
                        
                     </div>
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $edit->address;?>" id="exampleInputEmail1" placeholder="">
                     </div>
                     
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Qualification</label>
                        <input type="text" name="qualification" class="form-control" value="<?php echo $edit->qualification;?>" id="exampleInputEmail1" placeholder="">
                     </div>
                     
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">experince</label>
                      <input type="text" name="experince" class="form-control"  value="<?php echo $edit->experince;?>"id="exampleInputEmail1"placeholder="">
                     </div>
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Salary</label>
                        <input type="text" name="salary" class="form-control" value="<?php echo $edit->salary;?>"id="exampleInputEmail1" placeholder="">
                     </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="hidden" name="old_img" class="form-control" id="exampleInputEmail1" value="<?php echo $edit->image;?>">
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" /><?php echo $edit->image;?>
         
                     </div>
                     
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Date of joing</label>
                        <input type="date" name="DOJ" class="form-control" value="<?php echo $edit->DOJ;?>" id="exampleInputEmail1" placeholder="">
                     </div>
                     <button type="submit" class="btn btn-default">Submit</button>
			
                </form>

            </div>
        </div>
    </div>
    <!--/span-->
</div>
</div>


</body>
</html>