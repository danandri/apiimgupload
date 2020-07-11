<?php 
	header('Access-Control-Allow-Origin:*');

	$target_path = 'ionicserver/';

	$target_path = $target_path . basename($_FILES['image']['name']);

	if(move_uploaded_file($_FILES['image']['tmp_name'],$target_path)){
		echo ("Success");
	}
	else{
		echo ("Upload failed");
	}
?>