<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link id="bs-css" href="<?php echo base_url();?>admin_css/bootstrap-cerulean.min.css" rel="stylesheet">
</head>

<body>

 
<div class=" row">
	<div class="col-md-3 col-sm-3 col-xs-4">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="<?php echo base_url();?>index.php/admin/dept/view">
            <i class=" glyphicon glyphicon-th-list red"></i>

            <div>Total Department</div>
            </br>
            <span class="notification green"><?php echo $alldeptcount;?> </span>
        </a>
    </div>

    	
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="<?php echo base_url();?>index.php/admin/emp_info/view">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Members</div>
     </br>
            <span class="notification"><?php echo $allempcount;?></span>
        </a>
    </div>

    
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="<?php echo base_url();?>index.php/admin/task/view">
            <i class="glyphicon glyphicon-tasks yellow"></i>

            <div>Task</div>
          </br>
            <span class="notification yellow"><?php echo $alltaskcount;?></span>
        </a>
    </div>
     <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="<?php echo base_url();?>index.php/admin/feedback/">
            <i class="glyphicon glyphicon-eye-open green"></i>

            <div>FeedBack Of Task</div>
            <div>.</div>
            <span class="notification green">4</span>
        </a>
        </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="<?php echo base_url();?>index.php/admin/leave/view">
            <i class="glyphicon glyphicon-calendar green"></i>
			<div>Leave</div>
            <div>.</div>
            <span class="notification green"><?php echo $allleavecount;?></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"class="well top-block" href="<?php echo base_url('index.php/admin/logout');?>">
            <i class="glyphicon glyphicon-star pink"></i>

            <div>Log Out</div>
            <div>.</div>
            
        </a>
    </div>
   
	
    <div class=" row">
    <div class="box col-md-8">
     
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i>Notification</h2>
			</div>
            <div class="box-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a data-toggle="tab" href="#info">Task</a></li>
                    <li><a data-toggle="tab" href="#custom">Employee</a></li>
                    <li><a data-toggle="tab" href="#messages">leave</a></li>
                </ul>
				<div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                    <hr />
                       
    <?php
	$no=1;
	foreach($task_noti as $row)
	{
	?>
   	<?php if($row->status=='0')
	  {
		  ?>
            <div class="alert alert-info"> <?php echo $no;?>. &nbsp; <?php echo $row->task_name;?> &nbsp; is &nbsp; <?php echo 'Pending';?></div>
       <?php
	  }
	  else if($row->status=='1')
	  {
		  ?>
            <div class="alert alert-success"> <?php echo $no;?>. &nbsp; <?php echo $row->task_name;?> &nbsp;is &nbsp;<?php echo 'Started';?></div>
          <?php
	  }
 	  else
	  {
		  ?>
          <div class="alert alert-danger"> <?php echo $no;?>. &nbsp; <?php echo $row->task_name;?> &nbsp; is&nbsp; <?php echo 'Done';?></div>
          <?php
	  }
	  ?>
  <?php
	$no++;
	}
	?></div>
    		
                    <div class="tab-pane " id="custom">
                    <hr />
    <?php
	$no=1;
	$date = date("Y-m-d");
	foreach($emp_noti as $row)
	{
	?>
   	<?php if($row->DOJ==$date)
	  {
		  ?>
            <div class="alert alert-info"><?php echo $no;?> &nbsp;<?php echo $row->emp_name;?>&nbsp;&nbsp; IS CURRUNTLY REGISTER.</div>
       <?php
	  }
	 else
	  {
		  ?>
          <div class="alert alert-danger"><?php echo $no;?></div>
          <?php
	  }
	  
	  ?>
  <?php
	$no++;
	}
	?></div>
                    <div class="tab-pane" id="messages">
                    <hr />
                        <?php
	$no=1;
	foreach($leave_noti as $row)
	{
	?>
                                       
                                            <tr>
                                           
                                                <td>
      <?php if($row->status=='0')
	  {
		  ?>
            <div class="alert alert-info"> <?php echo $no;?>. &nbsp; <?php echo $row->detail;?> &nbsp; is &nbsp; <?php echo 'Pending';?></div>
       <?php
	  }
	  else if($row->status=='1')
	  {
		  ?>
            <div class="alert alert-success"> <?php echo $no;?>. &nbsp; <?php echo $row->detail;?> &nbsp; is &nbsp; <?php echo 'Confirm';?></div>
          <?php
	  }
 	  else
	  {
		  ?>
          <div class="alert alert-danger"> <?php echo $no;?>. &nbsp; <?php echo $row->detail;?> &nbsp; is &nbsp; <?php echo 'Reject';?></div>
          <?php
	  }
	  ?>
     </td>
    </tr>
                                            <?php
	$no++;
	}
	?>
                
                    </div>
                </div>
            </div>
      

 

</body>
</html>