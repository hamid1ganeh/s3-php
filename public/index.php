<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>upload S3</title>
</head>
<body>
<?php
require_once 'upload.php';
if(!empty($statusMsg))
{  
    echo $status.":".$statusMsg;
}
?>
<form action="" method="post" enctype="multipart/form-data">
  <p><input type="file" name="file">
  <p><button type="submit" name="submit">Submit</button>
</form>
<?php
if(!empty($s3_file_link))
{
    echo "S3 Object URL:".$s3_file_link;
}
?>
</body>
</html>