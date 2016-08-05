<?php

require_once "applogin.inc.php";

/* Get the major report types, and the options for each */
$res = $mysqli->query("SELECT t.id,t.name,o.id,o.name,o.price FROM report_types t LEFT JOIN report_types_options o ON t.id=o.reporttype ORDER BY t.displayorder,t.name,o.displayorder,o.name");
if(!$res) {
  header("Content-Type: text/plain");
  response_status("500 Internal Server Error");
  echo mysqli_error($mysqli);
  exit;
}
$types = array ( );
$opts = array ( );
$typeid = 0;
$typeobj;
while($row = $res->fetch_row()) {
  $tid = (int) $row[0];
  if($tid!=$typeid) {
    if($typeobj) {
      $typeobj->options = $opts;
      $types[] = $typeobj;
    }
    $typeobj = new stdClass;
    $typeobj->id = $tid;
    $typeobj->name = $row[1];
    $opts = array();
  }
  $o = new stdClass;
  $o->id = (int) $row[2];
  $o->name = $row[3];
  $o->price = $row[4];
  if($o->id) $opts[] = $o;
}
if($typeobj) {
  $typeobj->options = $opts;
  $types[] = $typeobj;
}
$res->free();

header("Content-Type: application/json");
echo json_encode($types);

?>
