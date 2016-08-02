<?php

require_once "../config.inc.php";

$un = empty($_REQUEST["un"]) ? "" : $mysqli->real_escape_string($_REQUEST["un"]);
$pw = empty($_REQUEST["pw"]) ? "" : $mysqli->real_escape_string($_REQUEST["pw"]);

$res = $mysqli->query("SELECT id,ref FROM users WHERE email='$un' AND type='physician' AND password=SHA1(CONCAT(id,'/$pw'))");
if(!$res) {
  header("Content-Type: text/plain");
  response_status("500 Internal Server Error");
  echo mysqli_error($mysqli);
  exit;
}
$AppUserId = 0;
$AppUserRef = null;
if($row = $res->fetch_row()) {
  $AppUserId = (int) $row[0];
  $AppUserRef = $row[1];
}
$res->free();

if($AppUserId<=0) {
  response_status("401 Unauthorized");
  exit;
}

/* Set response headers identifying the physician ID */
header("X-Physician-ID: $AppUserId");
header("X-Physician-Ref: $AppUserRef");

// otherwise we fall through to the script including this one, with $AppUserId defined
?>
