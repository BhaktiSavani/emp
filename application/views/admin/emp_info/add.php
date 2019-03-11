
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="<?php echo base_url();?>admin_css/jquery-ui.css" rel="stylesheet">
<script src="<?php echo base_url();?>admin_js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>/admin_js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>/admin_js/bootstrap-datepicker.min"></script>

  <script  language="javascript">
 /* $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy',minDate: 0,maxDate:0 });
  } );*/
  
  
  <?php /*?>$(function () {
    $("#dateSelector").datepicker({
        dateFormat: "dd/mm/yy",
        changeMonth: true,
        changeYear: true,
        minDate: "dateToday"
     });
    var date = new Date(2008,9,3);
    $("#dateSelector").datepicker("setDate", date);
});<?php */?>

 </script> 
  
 
	
 

</head>

<body>
<div id="content" class="col-lg-10 col-sm-10">
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/emp_info/view");?>"> View Employee</a>
        </li>
    </ul>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
           
            <div class="box-content">
                <form role="form" method="post" enctype="multipart/form-data">
                    <?php echo validation_errors();?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">employee Name</label>
                        <input type="text" name="emp_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Employee Name">
                    </div>
                   
                     <div class="form-group">
                     
                        <label for="exampleInputEmail1">Depatment  id</label>
                        <select name="dept_id" class="form-control">
                        <option value="" hidden="">Choose Department Name</option>
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
                   
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter your Password">
                     </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <div class="form-control">
                        <input type="radio" name="gender"  id="exampleInputEmail1" placeholder="">Male <input type="radio" name="gender" value="female"> Female
                        </div>
                    </div>
                      
                      
                      <div class="form-group">
                      
                        <label for="exampleInputEmail1">Date of Birth</label>
                        
						<input type="date" name="DOB" class="form-control" id="datepicker" placeholder="Enter DOB">	  						
                         </div>
                     
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Age</label>
                        <input type="text" name="age" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Age">
                     </div>
                     
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your email">
                     </div>
                     
                     <div class="form-group">
                        <label>Contact No</label>
                        <input type="text" name="contact_no" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile number">
                        
                     </div>
                     
                     <div class="form-group">
                        <label >Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Address">
                     </div>
                     
                     
                     <div class="form-group">
                        <label>Qualification</label>
                        <input type="text" name="qualification" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Qualification">
                     </div>
                     
                     
                     <div class="form-group">
                        <label>experince</label>
                      <input type="text" name="experince" class="form-control" id="exampleInputEmail1"placeholder="Enter Your Experince in Year">
                     </div>
                     
                     <div class="form-group">
                        <label>Salary</label>
                        <input type="text" name="salary" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Salary">
                     </div>
                     
                     
                     
                     <div class="form-group">
                        <label for="exampleInputEmail1">Date of joing</label>
                        <input type="date" min="2017-01" max="2018-01" name="DOJ" class="form-control" id="datepicker" placeholder="Enter Your Date Of Joing">
                     </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Date Of Joing">
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