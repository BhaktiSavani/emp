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
    <a href="<?php echo base_url("index.php/admin/emp_info/view");?>">
    	<i class="glyphicon glyphicon-arrow-left" > </i>
    </a>
    </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url("index.php/admin/emp_info/view");?>">View All Employee</a>
        </li>
    </ul>
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2 style="text-transform:capitalize;"><i class="glyphicon glyphicon-user"></i> Detail Of
         <?php foreach ($empdata as $row)?>
		<?php echo $row->emp_name;?></h2>
	</div>
    
    
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
     <?php
	$no=1;
	foreach($empdata as $row)
	{
	?>
    <tr>
    	
        <th>Sr.No</th>
        <td><?php echo $row->emp_id;?></td>
    </tr>
    <tr>
        <th>Employee Name</th>
        <td><?php echo $row->emp_name;?></td>
     </tr>
     <tr>
        <th>Department Name</th>
        <td><?php $dept=$this->dbemp_info->getdeptname($row->dept_id); 
	           echo $dept->dept_name;?></td>
     </tr>
     <tr>
        <th>Email</th>
        <td><?php echo $row->email;?></td>
      </tr>
      <tr>
         <th>DOB</th>
         <td><?php echo $row->DOB;?></td>
      </tr>
      <tr>
          <th>Age</th>
          <td><?php echo $row->age;?></td>
      </tr>
      <tr>
          <th>gender</th>
          <td><?php echo $row->gender;?></td>
      </tr>
      <tr>
          <th>Address</th>
          <td><?php echo $row->address;?></td>
      </tr>
      <tr>
          <th>Contact No</th>
          <td><?php echo $row->contact_no;?></td>
      </tr>
      <tr>
          <th>Qualification</th>
           <td><?php echo $row->qualification;?></td>
      </tr>
      <tr>
          <th>experince</th>
          <td><?php echo $row->experince;?></td>
      </tr>
      
       <tr>
          <th>Date Of Joing</th>
           <td><?php echo $row->DOJ;?></td>
     	</tr>
        <tr>
          <th>Image</th>
           <td><img src="<?php echo base_url();?>\emp_img\<?php echo $row->image; ?>"  height="100" width="100"/></td>
     	</tr>
    </thead>
    <tbody>
   <?php
	$no++;
	}
	?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
    
</body>
</html>