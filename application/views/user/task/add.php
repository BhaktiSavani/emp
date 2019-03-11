<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="content">
                                <form role="form" method="post">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Task Name</label>
                                                <input type="text" class="form-control"  value="Enter Task name" name="task_name">
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Employee Name</label>
                                                <select name="emp_id" class="form-control">
                        <option value="" hidden="">Choose employee Name</option>
						<?php $allemp=$this->dbtask->getallemp();?>
						<?php
						foreach($allemp as $row_emp)
						{
							?>
                            <option value="<?php echo $row_emp->emp_id;?>"><?php echo $row_emp->emp_name;?></option>
                            <?php
						}
						?>
                        </select>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label >Task Date</label>
                                                <input type="text" name="task_date" class="form-control" placeholder="Task Date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Task Description</label>
                                                <input type="text" name="task_des" class="form-control" placeholder="Task description" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Complition Date</label>
                                                <input type="text" class="form-control" placeholder="Complition Date" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                            <div class="form-group">
                                                <label >Status</label>
                                                <input type="text" name="status" class="form-control" placeholder="Task Date">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-left">SUBMIT</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
</body>
</html>