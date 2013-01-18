<?php
global $loginMode, $attributes, $loginUrl, $logoutUrl;

include '../../lib/inc.all.php';
$result = Array();
$result["loginMode"] = $loginMode;
if ($loginMode != "basic") {
  $result["isAuth"] = ($attributes !== NULL);
  $result["email"] = $attributes["mail"][0];
}
$result["loginMode"] = $loginMode;
$result["loginUrl"] = $loginUrl;
$result["logoutUrl"] = $logoutUrl;

header("Content-Type: text/json; charset=UTF-8");
echo json_encode($result);