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
            <a href="#">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/man_info");?>">Add Manager</a>
        </li>
    </ul>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Edit</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" method="post" enctype="multipart/form-data">
                   
                    <div class="form-group">
                    <table  border="3">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Manager Name</label>
                        <input type="text" name="man_name" value="<?php echo $edit->man_name;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter DOB">
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
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $edit->email;?>" id="exampleInputEmail1" placeholder="Enter email">
                     </div>
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Contact No</label>
                        <input type="text" name="contact_no" class="form-control" value="<?php echo $edit->contact_no;?>"id="exampleInputEmail1" placeholder="Enter mobile number">
                        
                     </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="hidden" name="old_img" class="form-control" id="exampleInputEmail1" value="<?php echo $edit->image;?>">
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" /><?php echo $edit->image;?>
         
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