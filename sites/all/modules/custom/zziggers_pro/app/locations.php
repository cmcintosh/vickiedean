<?php

require_once "applogin.inc.php";

$res = $mysqli->query("SELECT id,locationname,contactname,contactphone,deliveryemail FROM physicians_locations WHERE physicianid=$AppUserId ORDER BY locationname ASC");
if(!$res) {
  header("Content-Type: text/plain");
  response_status("500 Internal Server Error");
  echo mysqli_error($mysqli);
  exit;
}
$arr = array ( );
while($row = $res->fetch_row()) {
  $l = new stdClass;
  $l->id = (int) $row[0];
  $l->name = $row[1];
  $l->contact = $row[2];
  $l->phone = $row[3];
  $l->email = $row[4];
  $arr[] = $l;
}
$res->free();

header("Content-Type: application/json");
echo json_encode($arr);

?>
