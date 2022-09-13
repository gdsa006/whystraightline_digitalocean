<?php
//upload.php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(100, 999) . '.' . $ext;
 $location = './upload/' . $name;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 $response[0] = array(
    'status' => true,
    'filename'=> $name
);

echo json_encode($response);

}
?>