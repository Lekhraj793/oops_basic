<?php
if(isset($_POST['submit']));
$arr[]= array($_POST['ed_on'],$_POST['rd_on'],$_POST['lab'],$_POST['min']);

$data= serialize($arr);

$det= unserialize($data);

echo $data;
echo"<br>";
print_r($det);


 ?>
