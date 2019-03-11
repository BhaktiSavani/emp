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
            <a href="<?php echo base_url("index.php/admin/emp_info/view");?>"> View Employee</a>
        </li>
    </ul>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
           
            <div class="box-content">
                                  <form role="form" method="post" >
                   
                                    <div class="row">
                                        <div class="col-md-5">
                                           <div class="form-group">
                                                <label>Manager Name</label>
                                                <input type="text" readonly="readonly" class="form-control" value="<?php echo $this->session->userdata('man_name');?>" placeholder="Username">
                                            </div>
                                        </div>
                                       
                                                
                                        
                      
                       
                   <div class="col-md-5">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Depatment Name</label>
                       <select name="dept_id"  class="form-control"  readonly="readonly">
						<?php
						
						$man=$this->session->userdata('man_name');
						$result=$this->dbfeedback->getmandata($man);
						
						foreach($result as $row)
						{
							$deptname=$this->dbfeedback->getdeptname($row->dept_id);
							
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
                        <select name="emp_id" id="emp_id" class="form-control">
                        <option value="">Select Employee</option>
                       <?php
					   
						$result=$this->dbfeedback->getempdata($row->dept_id);
						foreach($result as $row)
						{
						?>
                        <option value="<?php echo $row->emp_id;?>"><?php echo $row->emp_name;?></option>
                          <?php
						}
						?>
                        </select>
                    </div></div>
                    <div class="col-md-5">
                                  <div class="form-group">
                        <label for="exampleInputEmail1">Task Name</label>
                        <select name="task_name" class="form-control">
                        <option value="" hidden="">Choose Task You Want Feedback</option>
						<?php
					   
						$result=$this->dbfeedback->getalltask($row->dept_id);
						foreach($result as $row)
						{
						?>
                        <option value="<?php echo $row->task_name;?>"><?php echo $row->task_name;?></option>
                          <?php
						}
						?>
                        </select>
                    </div>              </div>
                                        <div class="col-md-5">
                                           <div class="form-group">
                                                <label for="exampleInputEmail1">Comment</label>
                        
						<input type="text" name="comment" class="form-control"  placeholder="Enter Comment">
                                          </div></div>
                                     <div class="col-md-5">
                                           <div class="form-group">
                                                <label>Status</label><br>
                                                
                                                <input type="radio"  name="status"  value="Execelnt">&nbsp; <span style="color:#363";>Execelnt</span> &nbsp;<br />
                                                <input type="radio" name="status" value="Good">&nbsp;<span style="color:#009";>  Good    </span><br />
                                                <input type="radio" name="status" value="Poor">&nbsp;<span style="color:#F00";>  Poor    </span><br />
                                                </span></div></div>
                                          
                                        	<div class="col-md-5">
                                           <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-fill pull">Submit</button>
                                    </div>
                                </form>
                           
                           
</body>
</html>