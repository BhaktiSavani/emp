<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="span9">
 <ul class="breadcrumb">
       <?php /*?> <li>
            <a href="<?php echo base_url("index.php/admin/dashborad/dashborad");?>">Home</a>
        </li><?php */?>
        <li>
            <a href="<?php echo base_url("index.php/directer/dept/view");?>"> All Department</a>
        </li>
    </ul>
</div>

<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h4 style="color:#039";> Detail Of
                                 <?php foreach ($empdata as $row)?>
		<?php echo $row->emp_name;?></h4>
							</div>
							<div class="module-body">
  
    
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