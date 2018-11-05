<?php
if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg"))
	&& ($_FILES["file"]["size"] < 500000))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	}
	else
	{
		echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		echo "Type: " . $_FILES["file"]["type"] . "<br />";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

		$fileName = "asdf.jpg";

		if (file_exists("images/" . $fileName))
		{
			echo $_FILES["file"]["name"] . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],
				"images/" . $fileName);
			echo "Stored in: " . "images/" . $_FILES["file"]["name"];
		}
	}
}
else
{
	echo "Invalid file";
}
?>
<pre>
<?php
	print_r($_FILES);
?>
</pre>

<img src="images/<?php echo $fileName; ?>">