<?php
// class file needed
include 'class.yahoo.php';

// create an instance of the yahoo class
$ys = new Yahoo();

// assign a yahoo id to check
$id = 'ernmats';

// get the online status of the yahoo id
$status = $ys->Get_status($id);

// display the current status of the yahoo id
if ($status == false)
	echo "$id is offline";
elseif($status == true)
	echo "$id is online";
?>