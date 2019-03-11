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
                                                <label>Emp Name</label>
                                                <input type="text" readonly="readonly" class="form-control" value="<?php echo $this->session->userdata('man_name');?>" placeholder="Username">
                                            </div>
                                        </div>
                        <div class="form-group">
                     	<div class="col-md-5">
                        <label for="exampleInputEmail1">Depatment Name</label>
                       <select name="dept_id"  class="form-control"  readonly="readonly">
						<?php
						
						$emp=$this->session->userdata('emp_name');
						$result=$this->dbleave->getempdata($emp);
						
						foreach($result as $row)
						{
							$deptname=$this->dbleave->getdeptname($row->dept_id);
							
						?>
                        <option value="<?php echo $row->dept_id;?>"><?php echo $deptname->dept_name;?></option>
                          <?php
						}
						?>
                        </select></div></div></div>
                         <div class="row">
                                        <div class="col-md-10">
                                           <div class="form-group">
                                                <label for="exampleInputEmail1">Detail</label>
                        
						<input type="text" name="detail" class="form-control"  placeholder="Enter DOB">
                                          </div></div></div>
                     				<div class="row">
                                        <div class="col-md-5">
                                           <div class="form-group">
                                                <label for="exampleInputEmail1">Leave from</label>
                        
						<input type="date" name="leave_from" class="form-control" id="dateSelector" placeholder="Enter DOB">
                                          </div></div>
                                           <div class="row">
                                        <div class="col-md-5">
                                           <div class="form-group">
                                                <label for="exampleInputEmail1">Leave To</label>
                        
						<input type="date" name="leave_to" class="form-control" id="dateSelector" placeholder="Enter DOB">
                                           </div></div></div>
                                            
                                       <input type="hidden" name="status" value="0">
                                          
                                            
                                        	<div class="col-md-5">
                                           <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-fill pull">Submit</button>
                                    </div></div></div>
                                </form>
                           
                           
</body>
</html>