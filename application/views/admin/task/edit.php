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
    <a href="<?php echo base_url("index.php/admin/task/view");?>">
    	<i class="glyphicon glyphicon-arrow-left" > </i>
    </a>
    </li>
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
                <h2><i class="glyphicon glyphicon-edit"></i>Edit Task</h2>

               
            </div>
            <div class="box-content">
                <form role="form" method="post">
                   
                    <div class="form-group">
                    <table  border="3">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Task Name</label>
                      <input type="text" name="task_name" class="form-control" id="exampleInputEmail1" value="<?php echo $edit->task_name;?>" placeholder="Enter DOB">
                     </div>

                    
                    
                    <?php /*?><div class="form-group">
                        <label for="exampleInputEmail1">Manager Name</label>
                        <select name="man_id" class="form-control">
                        <option value="" hidden="">Choose manager Name</option>
						<?php $allman=$this->dbtask->getallman();?>
						<?php
						foreach($allman as $row_man)
						{
							if($edit->man_id == $row_man->man_id)
							{
							?>
                            <option value="<?php echo $row_man->man_id;?>" selected="selected"><?php echo $row_man->man_name;?></option>
                            <?php
							}
							else
							{
								?>
                            <option value="<?php echo $row_man->man_id;?>"><?php echo $row_man->man_name;?></option>
                            <?php
							
							}
						}
						?>
                        </select>
                    </div>
                   
                   <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <select name="emp_id" class="form-control">
                        <option value="" hidden="">Choose employee Name</option>
						<?php $allemp=$this->dbtask->getallemp();?>
						<?php
						foreach($allemp as $row_emp)
						{
							if($edit->emp_id == $row_emp->emp_id)
							{
							?>
                            <option value="<?php echo $row_emp->emp_id;?>" selected="selected"><?php echo $row_emp->emp_name;?></option>
                            <?php
							}
							else
							{
								?>
                            <option value="<?php echo $row_emp->emp_id;?>"><?php echo $row_emp->emp_name;?></option>
                            <?php
							
							}
						}
						?>
                        </select>
                    </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Depatment Name</label>
                        <select name="dept_id" class="form-control">
                        <option value="" hidden="">Choose Department Name</option>
						<?php $alldept=$this->dbtask->getalldept();?>
						<?php
						foreach($alldept as $row_dept)
						{
							if($edit->dept_id == $row_dept->dept_id)
							{
							?>
                            <option value="<?php echo $row_dept->dept_id;?>" selected="selected"><?php echo $row_dept->dept_name;?></option>
                            <?php
							}
							else
							{
								?>
                            <option value="<?php echo $row_dept->dept_id;?>"><?php echo $row_dept->dept_name;?></option>
                            <?php
                            }
						}
						?>
                        </select>
                    </div>
                   
                   
                   
                    
                    
                  <?php */?> <div class="form-group">
                        <label for="exampleInputEmail1">Task Date</label>
                        <input type="date" name="task_date" value="<?php echo $edit->task_date;?>"class="form-control" id="exampleInputEmail1" placeholder="Enter Employee Name">
                        </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Task Description</label>
                        <input type="text" name="task_des" value="<?php echo $edit->task_des;?>"class="form-control" id="exampleInputEmail1" placeholder="Enter DOB">
                     </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Complition Date</label>
                        <input type="date" name="comp_date" value="<?php echo $edit->comp_date;?>"class="form-control" id="exampleInputEmail1" placeholder="Enter Employee Name">
                        
                    </div>
                   
                    
                      
                      
                     
                     
                     
                     
                        
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