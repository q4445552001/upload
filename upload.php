<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
檔案名稱: <input type="file" name="file" id="file" ><br>
<input type="submit" name="submit" value="上傳檔案">
</form>

</body>
</html> 

<?php
	if ($_FILES["file"]["error"] > 0)
		echo "Error: " . $_FILES["file"]["error"];
	else
	{
		echo "檔案名稱: " . $_FILES["file"]["name"] . "<br>";
		echo "檔案類型: " . $_FILES["file"]["type"] . "<br>";
		echo "檔案大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
		echo "暫存名稱: " . $_FILES["file"]["tmp_name"];

		move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
	}
?>