<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "emp");
  if (! $conn) {
    die('could not connect'.mysql_error());
  }

   //$sql = "SELECT * FROM empList WHERE ID = ".$_REQUEST['ID'];
  //$sql = "INSERT INTO empList (Name, EmailID) VALUES ('".$_REQUEST['Name']."', '".$_REQUEST['EmailID']."')";
  // $insert = "INSERT INTO emp_info (Name, EmailID) VALUES ('".$_REQUEST['Name']."', '".$_REQUEST['EmailID']."')";

//UPDATE MyGuests SET lastname='Doe' WHERE id=2
 $update = "UPDATE task SET status ='1' WHERE emp_id = '".$_REQUEST['Name']."' AND task_id='".$_REQUEST['task_id']."'";

   if($conn->query($update)){
     //die("There's little problem: ".mysql_error());
	 $result_arr=array('sucess'=>1,'Result'=>1);
   }else{
	
	$result_arr=array('sucess'=>0,'Result'=>0);   
	}
	echo json_encode($result_arr);
  //echo $sql;
  //$sql='SELECT * FROM empList WHERE ID = 1';

  //if ($conn->query($sql)) {
    //$result_arr=array('sucess'=>1,'Result'=>1);

//  } else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
  //  $result_arr=array('sucess'=>0,'Result'=>0);
  //}
   //echo json_encode($result_arr);
  // $sql = 'SELECT * FROM empList';
  //$result = $conn->query($sql);
   /*if (! $result) {
     die('could not get'.mysql_error());
   }
  
   if ($result->num_rows > 0) {
     while($r = mysqli_fetch_assoc($result)) {
       $rows[] = $r;
     }
  
     $jsonArr = array("Result" => $rows );
     print json_encode($jsonArr);
   }*/

$conn->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>