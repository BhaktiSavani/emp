<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="<?php echo base_url();?>user_css/bootstrap.min.css" rel="stylesheet" />
 <link href="<?php echo base_url();?>user_css/animate.min.css" rel="stylesheet"/>
  <link href="<?php echo base_url();?>user_css/style" rel="stylesheet"/>
<link href="<?php echo base_url();?>user_css/light-bootstrap-dashboard.css" rel="stylesheet"/>
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd'
        });
    })
</script>

</script>
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

</style>
</head>

<body>
<div class="content">
              <div class="wrapper">   
                     <div class="well col-md-8  col-md-offset-4"  style="margin-top:5px; margin-bottom:2px; background-color:#FFF;">
                   
                  <div class="content">
                                  <form role="form" method="post" enctype="multipart/form-data">
                   
                      <?php echo validation_errors();?>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Employee Name</label>
                                                <input type="text" name="emp_name" required autocomplete="off" class="form-control" placeholder="Enter Employee name" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password"required autocomplete="off" class="form-control" placeholder="Enter Employee password">
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                         <div class="form-group">
                       
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <div class="form-control">
                        <input type="radio" name="gender"  id="exampleInputEmail1" required autocomplete="off" placeholder="">Male <input type="radio" name="gender" value="female"> Female
                        </div>
                    </div>
                      
                      
                        </div>
                    </div>
                    </div>  
                      <div class="form-group">
                     
                        <label for="exampleInputEmail1">Depatment  id</label>
                        <select name="dept_id" required autocomplete="off" class="form-control">
                        <option>Choose Department Name</option>
						<?php $alldept=$this->dbemp_info->getalldept();?>
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
                    		 <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Date of Birth</label>
                        
						<input type="date" name="DOB" required autocomplete="off"class="form-control" id="dateSelector" placeholder="Enter Date Of Birth">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Age</label>
                        <input type="text" name="age" class="form-control" required autocomplete="off" id="exampleInputEmail1" placeholder="Enter Your Age">
                                            </div>
                                        </div>
                     </div>
                                         <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" name="email" required autocomplete="off" class="form-control" placeholder="Enter Email name" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Contact No</label>
                                                <input type="text" name="contact_no" required autocomplete="off" class="form-control" placeholder="Enter your phone number">
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                         <div class="form-group">
                       
                    <div class="form-group">
                        <label>Address</label>
                    	<input type="text" name="address" class="form-control" required autocomplete="off" id="exampleInputEmail1" placeholder="Enter Your Address">
                    </div>
                    </div>
            		</div>
                    </div>  
                                 <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                               <label>Qualification</label>
                        <input type="text" name="qualification" required autocomplete="off" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Qualification">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>experince</label>
                      <input type="text" name="experince" required autocomplete="off" class="form-control" id="exampleInputEmail1"placeholder="Enter Your Experince in Year">
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                         <div class="form-group">
                       
                    <div class="form-group">
                       
                          
                        <input type="hidden" name="code" required autocomplete="off" readonly="readonly" class="form-control" id="exampleInputEmail1" value="<?php echo random_string('alnum',5);?>" placeholder="Enter Your Salary">
                        </div>
                   		</div>
                                    </div>
                                        </div>
                                        
                                        <div class="col-md-7">
                                            <div class="form-group">
                                               <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="image" required autocomplete="off" class="form-control" id="exampleInputEmail1" placeholder="select Your profile">
                                            </div>
                                        </div>
                                        
                                      
                                      
 
                                        <div class="col-md-12">
                                            <div class="form-group">
                       <button type="submit" class="btn btn-info btn-fill pull-right">Add Employee</button>
                               </div></div>
                                </form>
                   </div></div>
</body>
</html>