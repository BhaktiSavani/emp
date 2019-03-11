<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile  &nbsp;<?php echo $this->session->userdata('emp_name');?></h4>
                            </div>
                            <div class="content">
                                  <form role="form" method="post" enctype="multipart/form-data">
                   
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Employee Name</label>
                                                <input type="text" name="emp_name" value="<?php echo $edit->emp_name;?>" class="form-control" placeholder="Enter Employee name" >
                                            </div>
                                        </div>
                                       
                                         <div class="col-md-4">
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
                    </div>  
                     
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $edit->email;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" name="age" class="form-control" placeholder="Company" value="<?php echo $edit->age;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" name="DOB" class="form-control" placeholder="Last Name" value="<?php echo $edit->DOB;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Home Address" value="<?php echo $edit->address;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Contact No</label>
                                                <input type="text" name="contact_no" class="form-control" placeholder="City" value="<?php echo $edit->contact_no;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Qualification</label>
                                                <input type="text" name="qualification" class="form-control" placeholder="Country" value="<?php echo $edit->qualification;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>experince</label>
                                                <input type="number" name="experince" class="form-control" value="<?php echo $edit->experince;?>">
                                            </div>
                                        </div>
                                        
                                  
                                      <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date Of Joning</label>
                                                <input type="text" name="DOJ" class="form-control" value="<?php echo $edit->DOJ;?>">
                                            </div>
                                        </div>
                                     
         
                    </div>


                                
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                     
                                    <img class="avatar border-gray" src="<?php echo base_url();?>emp_img/<?php echo $edit->image; ?>" />

                                      <h4 class="title"><?php echo $edit->emp_name;?><br />
                                         <small><?php echo $edit->qualification;?></small>
                                      </h4>
                                    </a>
                                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/user/emp_info/image_edit/<?php echo $edit->emp_id;?>">
                                    <input type="file" name="image" class="form-control">
                                    <input type="submit" value="Update" class="form-control success" style="background-color:#3CF";>
                                    </form>
                                </div>
                             
                            </div>
                            <hr>
                            
                        </div>
                    </div>
</div></div>
                </div>
            </div>
        </div>
       </form>
</body>
</html>