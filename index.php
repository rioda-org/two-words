<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Words</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php
$myFile="keywords.txt";
$fh=fopen($myFile, 'r');
$text=fread($fh, filesize($myFile));
fclose($fh);
$niz=explode("\n",$text);
echo $niz[array_rand($niz)]."<br>";
echo $niz[array_rand($niz)];
?>
<br>
<br>
<a href="index.php">New words</a>
</div>
</div>
</div>
</body>
</html>