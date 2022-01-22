<html>
<head>
<title>FileME</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="favicon.png" type="image/png"/>
</head>
<body>
<a href="/fileme/"><img src="assets/fileme-light.png" width="240" alt="logo"/></a>
<h4>File Hosting For Java Phones</h4>
<?php 
if(isset($_POST['submit'])){
if($_FILES['file']['name']){
		$time = time();
		$filename = $_FILES['file']['name'];
		$filename = $time."_".$filename ;
		move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$filename);
		$img="images/".$_FILES['file']['name'];
        echo "$filename has been uploaded successfully!";
	} else {
		echo "Something went wrong";
	}
}
echo "<br>";
echo "<br>";
echo "<a href='uploads/".$filename."' >Click To Download</a>";
?>
</body>
</html>