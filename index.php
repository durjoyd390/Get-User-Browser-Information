<?php 
/*
It is a PHP script. Using this script, you can get User Browser Information.
This Script provided by Durjoysoft.
Email: helpdas@durjoysoft.com
Mobile:  +8801610728750, +8801999737584 (08:00 am to 10:00 pm  BST )
Send a text SMS before making a call.
*/

$link = "https://api.apicagent.com/?ua=";
$ua =  urlencode($_SERVER['HTTP_USER_AGENT']);
$full = $link.$ua;
$getdata=  file_get_contents ($full);
$obj = json_decode($getdata);
$browser_family = $obj->browser_family;
echo "browser_family: ".$browser_family."<br>";
$engine = $obj->client->engine;
echo "engine: ".$engine."<br>";
$engine_version = $obj->client->engine_version;
echo "engine_version: ".$engine_version."<br>";
$browser_name = $obj->client->name;
echo "browser_name: ".$browser_name."<br>";
$browser_type = $obj->client->type;
echo "browser_type: ".$browser_type."<br>";
$browser_version = $obj->client->version;
echo "browser_version: ".$browser_version."<br>";
$device_brand_name = $obj->device->brand;
echo "device_brand_name: ".$device_brand_name."<br>";
$device_model = $obj->device->model;
echo "device_model: ".$device_model."<br>";
$device_type = $obj->device->type;
echo "device_type: ".$device_type."<br>";
$os_name = $obj->os->name;
echo "os_name: ".$os_name."<br>";
$os_platform = $obj->os->platform;
echo "os_platform: ".$os_platform."<br>";
$os_version = $obj->os->version;
echo "os_version: ".$os_version."<br>";
$os_family = $obj->os_family;
echo "os_family: ".$os_family."<br>";
$user_agent = $obj->user_agent;
echo "user_agent: ".$user_agent."<br>";
 ?>