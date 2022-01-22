<html>
<head>
<title>FileME</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="favicon.png" type="image/png"/>
</head>
<body>
<body>
<a href="/fileme/"><img src="assets/fileme-light.png" width="240" alt="logo"/></a>
<h4>File Hosting For Java Phones</h4>
<?php
if($_POST){
$url = $_POST['url'];
$name = basename($url);
list($txt, $ext) = explode(".", $name);
$name = $txt.time();
$name = $name.".".$ext;
if($ext == "jpg" or $ext == "png" or $ext == "gif" or $ext == "jar" or $ext == "mp3" or $ext == "pdf" or $ext == "webm"){
$upload = file_put_contents("uploads/$name",file_get_contents($url));
if($upload)  echo "Success: <a href='uploads/".$name."' target='_blank'>Check Uploaded</a>"; else "please check your folder permission";
}else{
echo "Image not selected or the file extension is not supported";
}
}
?>
</body>
</html>