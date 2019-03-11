<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="<?php echo base_url();?>admin_css/jquery-ui.css" rel="stylesheet">
<script src="<?php echo base_url();?>admin_js/jquery-ui.js"></script>
  <script>
    $(document).ready(function() {
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd'
		
        });
    })
	
	
	$(document).ready(function() {
    $("#datepicker1").datepicker({
        dateFormat: 'yy-mm-dd'
		
        });
    })
</script>



</head>

<body>
<div id="content" class="col-lg-10 col-sm-10">
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/task/view");?>"> View Task</a>
        </li>
    </ul>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>New Task </h2>

            </div>
            <div class="box-content">
                <form role="form" method="post">
                   <div class="row">
                   <div class="col-md-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Task Name</label>
                        <input type="text" name="task_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Task Name">
                    </div></div>
                     <div class="col-md-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Manager Name</label>
                         <input type="text" name="man_id" readonly="readonly" class="form-control" value="<?php echo $this->session->userdata('man_name');?>">
                    </div></div>
                     <input type="hidden" name="dept_id" class="form-control" value="<?php echo $this->session->userdata('dept_id');?>">
                   
                     
                   <div class="col-md-5">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Depatment Name</label>
                       <select name="dept_id"  class="form-control"  readonly="readonly">
						<?php
						
						$man=$this->session->userdata('man_name');
						$result=$this->dbtask->getmandata($man);
						
						foreach($result as $row)
						{
							$deptname=$this->dbtask->getdeptname($row->dept_id);
							
						?>
                        <option value="<?php echo $row->dept_id;?>"><?php echo $deptname->dept_name;?></option>
                          <?php
						}
						?>
                        </select>
                    </div></div>
                   <div class="col-md-5">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <select name="emp_id" id="emp_id" class="form-control" onchange="change_code();">
                        <option value="">Select Employee</option>
                       <?php
						$result=$this->dbtask->getempdata($row->dept_id);
						foreach($result as $row)
						{
						?>
                        <option value="<?php echo $row->emp_id;?>"><?php echo $row->emp_name;?></option>
                          <?php
						}
						?>
                        </select>
                    </div>
                    </div>
                    
                    
                    
                 <?php /*?>  <div class="form-group">
                        <label for="exampleInputEmail1">Depatment Name</label>
                        <select name="dept_id" class="form-control">
                        <option value="" hidden="">Choose Department Name</option>
						<?php $alldept=$this->dbtask->getalldept();?>
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
                    <?php */?>
                   <?php /*?> <div class="form-group">
                        <label for="exampleInputEmail1">Manager Name</label>
                        <select name="man_id" class="form-control">
                        <option value="" hidden="">Choose manager Name</option>
						<?php $allman=$this->dbtask->getallman();?>
						<?php
						foreach($allman as $row_man)
						{
							?>
                            <option value="<?php echo $row_man->man_id;?>"><?php echo $row_man->man_name;?></option>
                            <?php
						}
						?>
                        </select>
                    </div>
                   <?php */?>
                  <div class="col-md-5">
                  <div class="form-group">
                        <label for="exampleInputEmail1">Task Date</label>
                        <input type="text" name="task_date" class="form-control" id="datepicker" placeholder="Enter Assign Date of Task ">
                        </div></div>
                    <div class="col-md-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Task Description</label>
                        <input type="text" name="task_des" class="form-control" id="exampleInputEmail1" placeholder="Enter Task Description">
                     </div></div>
                     
                     <input type="hidden" name="man_id" value="<?php echo $this->session->userdata('man_name');?>">
					<div class="col-md-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Complition Date</label>
                        <input type="text" name="comp_date" class="form-control"  id="datepicker1" placeholder="Enter Task Complition Date">
                        
                    </div>
                    <input type="hidden" name="status" value="0">
                    <button type="submit" class="btn btn-info btn-fill pull">Give Task</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->
</div>
</div>


</body>
</body>
</html>