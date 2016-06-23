<?php

require_once "applogin.inc.php";

/* If the physician has a personal account this is always valid.
 * If a clinic ID is also supplied, they can use this */
$cid = (int) $_GET["c"];

/* Personal account */
$res = $mysqli->query("SELECT a.id,a.accnum,a.name FROM accounts a LEFT JOIN users u ON a.id=u.accountid WHERE u.id=$AppUserId");
if(!$res) {
  header("Content-Type: text/plain");
  response_status("500 Internal Server Error");
  echo mysqli_error($mysqli);
  exit;
}
$accs = array ( );
if($row = $res->fetch_row()) {
  $a = new stdClass;
  $a->id = (int) $row[0];
  $a->accnum = $row[1];
  $a->name = $row[2];
  $a->clinic = false;
  $accs[] = $a;
}
$res->free();

/* Lookup the clinic account $cid if supplied */
if($cid>0) {
  $res = $mysqli->query("SELECT a.id,a.accnum,a.name FROM accounts a LEFT JOIN physicians_clinics pc ON a.id=pc.clinicid WHERE pc.physicianid=$AppUserId AND pc.clinicid=$cid");
  if(!$res) {
    header("Content-Type: text/plain");
    response_status("500 Internal Server Error");
    echo mysqli_error($mysqli);
    exit;
  }
  if($row = $res->fetch_row()) {
    $a = new stdClass;
    $a->id = (int) $row[0];
    $a->accnum = $row[1];
    $a->name = $row[2];
    $a->clinic = true;
    $accs[] = $a;
  }
  $res->free();
}

header("Content-Type: application/json");
echo json_encode($accs);

?>
