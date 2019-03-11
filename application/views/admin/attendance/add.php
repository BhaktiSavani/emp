<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Captcha in Codeigniter</title>
<link href="<?php echo base_url();?>admin_css/jquery-ui.css" rel="stylesheet">
<script src="<?php echo base_url();?>admin_js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>/admin_js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>/admin_js/bootstrap-datepicker.min"></script>

<script type="text/javascript">
  
	function change_code()
	{
		var brand=$('#emp_id').val();
		$('#code_id').load('<?php echo base_url();?>index.php/admin/attendance/getcode/'+brand);
	}
	</script>

  <script  language="javascript">
 $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd',minDate: 0,maxDate:0 });
  } );
  
  
/*$(function () {
    $("#dateSelector").datepicker({
        dateFormat: "dd/mm/yy",
        changeMonth: true,
        changeYear: true,
        minDate: "dateToday"
     });
    var date = new Date(2008,9,3);
    $("#dateSelector").datepicker("setDate", date);
});*/

 </script> 
 
 <style>
 input[type=radio]
 {
	
 
 }
 </style>
 
</head>
<body>
<div id="content" class="col-lg-10 col-sm-10">
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/attendance/view");?>">View Attendance List</a>
        </li>
    </ul>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Remark your Attendance &nbsp;<?php echo $this->session->userdata('man_name');?></h2>

            </div>
            <div class="box-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            
                            <div class="content">

<form method="post">
<div class="row">
                                        <div class="col-md-5">
                                           <div class="form-group">
                                                <label>Manager Name</label>
                                                <input type="text" name="man_name" readonly="readonly" class="form-control" value="<?php echo $this->session->userdata('man_name');?>" placeholder="Username">
                                            </div>
                                        </div>
                    
                    
                                          
                     	<div class="col-md-5">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Depatment Name</label>
                       <select name="dept_id"  class="form-control"  readonly="readonly">
						<?php
						
						$man=$this->session->userdata('man_name');
						$result=$this->dbattendance->getmandata($man);
						
						foreach($result as $row)
						{
							$deptname=$this->dbattendance->getdeptname($row->dept_id);
							
						?>
                        <option value="<?php echo $row->dept_id;?>"><?php echo $deptname->dept_name;?></option>
                          <?php
						}
						?>
                        </select>
                    </div>
                    </div>
                    
                    <div class="col-md-5">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <select name="emp_name" id="emp_id" class="form-control" onchange="change_code();">
                        <option value="">Select Employee</option>
                       <?php
						$result=$this->dbattendance->getempdata($row->dept_id);
						foreach($result as $row)
						{
						?>
                        <option value="<?php echo $row->emp_name;?>"><?php echo $row->emp_name;?></option>
                          <?php
						}
						?>
                        </select>
                    </div>
                    </div>
                    
                      <div class="col-md-5">
                                           <div class="form-group">
                                                <label>remark</label><br>
                                                <span class="form-control" style="background-color:#f5f5f5;">
                                                <input type="radio" name="remark"  value="1">&nbsp; <span style="margin-top:-20px;">Present</span> &nbsp;
                                                <input type="radio" name="remark" value="0">&nbsp;  Absent
                                                </span>
                                            </div>
                        </div>
                        
                          
                      <div class="col-md-5">
                                           <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" name="scan_date" readonly="readonly" class="form-control"  id="datepicker"   />
                                                </div>
                       </div>         
                       <div class="col-md-5">
                                           <div class="form-group">
                                         
                                                <label>Random number</label>
                                                <select name="code" id="code_id" class="form-control">
                                                  <option value="">Select Code</option>
                                                  
                                                </select>
                                                </div>
                                             </div>             
                                   
<div class="col-md-5">
  <div class="form-group">
  <input type="submit" value="Remark" class="btn btn-default" />
 </div>
</div> 
 </form>
</html>