<html>
<head>
<title>FileME</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="favicon.png" type="image/png"/>
<link rel="stylesheet" href="index.css">
<script src="index.js"></script>
</head>
<body>
<body>
<a href="/"><img src="assets/logo.png" width="100%" alt="logo"/></a>
<hr>
<?php
// Please Change The Domain If You Are Hosting It On Other Server!!
if($_POST){
$url = $_POST['url'];
$name = basename($url);
list($txt, $ext) = explode(".", $name);
$name = "uu".time();
$name = $name.".".$ext;
if($ext){
$upload = file_put_contents("uploads/$name",file_get_contents($url));
if($upload){
	echo "Success: <a href='uploads/".$name."' target='_blank'>Check Uploaded</a>";
	echo "<a href='http://fileme.ml/uploads/".$name."' ><img src='http://fileme.ml/assets/ctd.png' width='100%'/></a>";
} else {"please check your folder permission";}
}else{
echo "Image not selected or the file extension is not supported";
}
}
?>
</body>
</html>