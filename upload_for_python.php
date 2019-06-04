<?php
	echo $_FILES['myFile']['name'];
	if (isset($_FILES['myFile'])) 
	{
		//$names = $_FILES["myFile"]['name'];
		//$arr   = explode('.', $names);
		//$name  = $arr[0];
		//$date  = date('Y-m-d H:i:s');

		$fp    = fopen($_FILES['myFile']['tmp_name'], 'rb');
		$type  = $_FILES['myFile']['type'];
		$filename = $_FILES['myFile']['name'];
		$tmpname = $_FILES['myFile']['tmp_name'];

		if(move_uploaded_file($tmpname,$_SERVER['DOCUMENT_ROOT']."/upload/".$filename))
			echo " upload image succeed";
		else
            echo " upload image failed";
		}
?>