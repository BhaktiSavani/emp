<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
box-sizing@media (min-width: 992px){
    .typo-line{
        padding-left: 140px;
        margin-bottom: 40px;
        position: relative;
    }

    .typo-line .category{
        transform: translateY(-50%);
        top: 50%;
        left: 0px;
        position: absolute;
    }
}

.all-icons [class*="pe-"]{
    font-size: 40px;
}
.all-icons input{
    border: 0;
}
.all-icons .font-icon-detail{
    text-align: center;
    padding: 45px 0px 30px;
    border: 1px solid #e5e5e5;
    border-radius: 6px;
    margin: 15px 0;
}
.all-icons .font-icon-detail input{
    margin: 25px auto 0;
    width: 100%;
    text-align: center;
    display: block;
    color: #aaa;
    font-size: 13px;
}

	
</style>
</head>

<body>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              
                           
                              
                            <div class="content all-icons">
                                		
                                <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                  
                                    <div class="font-icon-detail"><a href="<?php echo base_url();?>index.php/user/emp_info/edit/<?php echo $this->session->userdata('emp_id');?>"><i class="pe-7s-users"></i>
                                       <p class="text-muted">
                                           User Profile</p>
                                    </div>

                                  </div></a>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                 	<div class="font-icon-detail"><a href="<?php echo base_url();?>index.php/user/task/view"><i class="pe-7s-note2"></i>
                                       <p class="text-muted"><span class="text-success"><?php echo $alltaskcount;?></span>
                                           Task</p>
                                           
                                    </div></a>
									</div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                  
                                    <div class="font-icon-detail"><a href="<?php echo base_url();?>index.php/user/emp_info/changepassword/<?php echo $this->session->userdata('emp_id');?>"><i class="pe-7s-refresh-2"></i>
                                       <p class="text-muted">
                                           Change Password</p>
                                    </div>

                                  </div></a>
                                   
                                   <div class="row">
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                 	<div class="font-icon-detail"><a href="<?php echo base_url("index.php/user/feedback/view");?>"><i class="pe-7s-news-paper"></i>
                                       <p class="text-muted">
                                           Feedback</p>
                                    </div>

                                  </div></a>
                                  
                                  	
                                   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                 	<div class="font-icon-detail"><a href="<?php echo base_url("index.php/user/leave");?>"><i class="pe-7s-ribbon"></i>
                                       <p class="text-muted">
                                           Leave</p>
                                    </div>
									</div></a>
                              
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                 	<div class="font-icon-detail"><a href="<?php echo base_url('index.php/user/logout');?>"><i class="pe-7s-power"></i>
                                       <p class="text-muted">
                                           Log Out</p>
                                    </div>
									</div></a>
                                    
                              <div class=" row">
    <div class="box col-md-8">
     
        <div class="box-inner homepage-box">
        <div class ="card">
            <div class="box-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a data-toggle="tab" href="#info">Leave</a></li>
                    <li><a data-toggle="tab" href="#custom">FeedBack</a></li>
                   
                </ul>
				<div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                    <hr />
   
                                    <table class="table">
                                        <tbody>
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
            <div class="alert alert-warning"><?php echo 'Pending';?></div>
       <?php
	  }
	  else if($row->status=='1')
	  {
		  ?>
            <div class="alert alert-success"><?php echo 'Confirm';?></div>
          <?php
	  }
 	  else
	  {
		  ?>
          <div class="alert alert-danger"><?php echo 'Reject';?></div>
          <?php
	  }
	  ?>
     </td>
                                                
                                                
                                               
                                                <td><td><?php echo $no;?></td> <td><?php echo $row->detail;?></td>
    <td><?php echo $row->leave_from?> </td>
    
     <td><?php echo $row->leave_to;?></td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs"><a href="<?php echo base_url();?>/index.php/user/leave">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    
                                                        
                                                </td>
                                            </tr>
                                            <?php
	$no++;
	}
	?>
                                            
                                    </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane " id="custom">
                    <hr />
                   <table class="table">
                                        <tbody>
                                         <?php
	$no=1;
	foreach($feedback_noti as $row)
	{
	?>
                                       
                                            <tr>
                                                <td>
      <?php if($row->status=='good')
	  {
		  ?>
            <div class="alert alert-warning"><?php echo 'Pending';?></div>
       <?php
	  }
	  else if($row->status=='Excellent')
	  {
		  ?>
            <div class="alert alert-success"><?php echo 'Confirm';?></div>
          <?php
	  }
 	  else
	  {
		  ?>
          <div class="alert alert-danger"><?php echo 'Reject';?></div>
          <?php
	  }
	  ?>
     </td>
                                                
                                                
                                               
                                                <td><td><?php echo $no;?></td> <td><?php echo $row->task_name;?></td>
    <td><?php echo $row->man_name?> </td>
    
     
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs"><a href="<?php echo base_url();?>/index.php/user/leave">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    
                                                        
                                                </td>
                                            </tr>
                                            <?php
	$no++;
	}
	?>
                                            
                                    </tbody>
                                    </table>
                                </div>
                   
</body>
</html>