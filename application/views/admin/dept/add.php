<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/dept/view");?>">Department View</a>
        </li>
    </ul>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Add Department Name</h2>

                
            </div>
            <div class="box-content">
                <form role="form" method="post">
              <?php echo validation_errors();?>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Department Name</label> 
                        <input type="text" name="dept_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Department Name">
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