<html>
<head>
<title>FileME</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="favicon.png" type="image/png"/>
<link rel="stylesheet" href="index.css">
<script src="index.js"></script>
</head>
<body>
<a href="/"><img src="assets/logo.png" width="100%" alt="logo"/></a>
<hr>
<?php 
// Please Change The Domain If You Are Hosting It On Other Server!!
if(isset($_POST['submit'])){
	if($_FILES['file']['name']){
		$time = time();
		$filename = $_FILES['file']['name'];
		$ext = explode(".", $filename);
		$filename = $time.".".$ext[1];
		move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$filename);
		// $img="images/".$_FILES['file']['name'];
        echo "<img src='http://fileme.ml/assets/uploaded.png' width='100%'/>";
	} else{
		echo "<img src='http://fileme.ml/assets/fns.png' width='100%'/>";
	}
}
$extension = explode(".", $filename);
if($extension[1] == "jpg"){
	echo "<img src='http://fileme.ml/uploads/".$filename."' width='100%'/>";
}
else if($extension[1] == "png"){
	echo "<img src='http://fileme.ml/uploads/".$filename."' width='100%'/>";
}
else{
	echo "<img src='http://fileme.ml/assets/np.png' width='100%'/>";
	echo "<hr>";
}
echo "<br>";
if($_FILES['file']['name']){
echo "<a href='http://fileme.ml/uploads/".$filename."' ><img src='http://fileme.ml/assets/ctd.png' width='100%'/></a>";
echo "<hr>";
}
?>
</body>
</html>