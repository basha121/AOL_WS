<?php

require 'dbconnection.php';

$result = mysqli_query($con,"SELECT * FROM tbl_videos");
	
	while($row = mysqli_fetch_array($result)) {
 		 $videos[] = array("id"=>$row['id'], "title" => $row['title'], "url"=> $row['url']);
	}
	
$success = 1;
	
$response = array('success' => $success, 'list' => $videos);
echo json_encode($response);	
