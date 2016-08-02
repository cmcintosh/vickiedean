<?php

require_once "applogin.inc.php";

$OUTPUT =  "/var/www/lighttpd/viauth_uploads";

/* 
 * Creates a new report using the data passed in the query parameters.
 * We check the physician is allowed to add the report to the account "a".
 * Parameters are [entries in these brackets are removed in favour of createreport.php]:
 * [a = "billing account ID"]
 * d = "deliver location" (0 = "location ID", 1 = physician user, 2 = account e-mail)
 * l = "location ID" (only required if d=0)
 * p = "patient ID"
 * g = "gender" ("M" or "F")
 * r = "age range"
 * All are required fields (except l if d>0).
 * Optional fields:
 * [x = Express? Set to 1 for yes.]
 * [m = Promo code string]
 * [o = Options string]
 * [t = Report type ("F" = full, "M" = mini, "N" = nutritional)]
 */
$accountid = (int) $_REQUEST["a"];
$deliverto = (int) $_REQUEST["d"];
if($deliverto<1 || $deliverto>2) $deliverto=0;
$locnid = (int) $_REQUEST["l"];
$patient = $mysqli->real_escape_string($_REQUEST["p"]);
$gender = $mysqli->real_escape_string($_REQUEST["g"]);
$agerange = $mysqli->real_escape_string($_REQUEST["r"]);
$clinicid = (int) $_REQUEST["c"];
//$express = $_REQUEST["x"]=="1" ? "1" : "0";
//$promo = empty($_REQUEST["m"]) ? "NULL" : ("'" . $mysqli->real_escape_string($_REQUEST["m"]) . "'");
//$opts = empty($_REQUEST["o"]) ? "NULL" : ("'" . $mysqli->real_escape_string($_REQUEST["o"]) . "'");
//$type = (int) $_REQUEST["t"];
//$type = "F";
//if(!empty($_REQUEST["t"])) {
//  if($_REQUEST["t"]=="M") $type="M";
//  else if($_REQUEST["t"]=="N") $type="N";
//}

header("Content-Type: text/plain");

/* Check the account ID is valid */
//$res = $mysqli->query("(SELECT a.id FROM accounts a LEFT JOIN users u ON a.id=u.accountid WHERE u.id=$AppUserId AND a.id=$accountid) UNION (SELECT a.id FROM accounts a LEFT JOIN physicians_clinics pc ON a.id=pc.clinicid WHERE pc.physicianid=$AppUserId AND a.id=$accountid)");
//if(!$res) {
//  response_status("500 Internal Server Error");
//  echo mysqli_error($mysqli);
//  exit;
//}
//if(!$res->fetch_row()) {
//  response_status("403 Forbidden");
//  echo "You do not have permission to charge to that account";
//  exit;
//}
//$res->free();

/* Check location ID is valid */
if($deliverto==0) {
  $res = $mysqli->query("SELECT l.id FROM physicians_locations l WHERE l.physicianid=$AppUserId AND l.id=$locnid");
  if(!$res) {
    response_status("500 Internal Server Error");
    echo mysqli_error($mysqli);
    exit;
  }
  if(!$res->fetch_row()) {
    response_status("403 Forbidden");
    echo "That location does not exist";
    exit;
  }
  $res->free();
}

/* All okay so add */
//$mysqli->query("INSERT INTO reports (id,accountid,physicianid,deliverto,locationid,`date`,patientid,agerange,gender,promocode,express,options,reporttype,price) VALUES (NULL,$accountid,$AppUserId,$deliverto,$locnid,NOW(),'$patient','$agerange','$gender',$promo,$express,$opts,$type,(SELECT price FROM report_types_options WHERE id=$type))");

$mysqli->query("INSERT INTO reports (id,clinicid,accountid,physicianid,deliverto,locationid,`date`,patientid,agerange,gender,promocode,express,options,reporttype,price) VALUES (NULL,$clinicid,0,$AppUserId,$deliverto,$locnid,NOW(),'$patient','$agerange','$gender',NULL,0,NULL,NULL,NULL)");
$newid = $mysqli->insert_id;
if($newid==0) {
  response_status("500 Internal Server Error");
  echo "Error creating report " . mysqli_error($mysqli);
  exit;
}
/* Output the new report ID */
echo $newid;

// This line moved to createreport.php
//mail("admin@vocalimaging.com","New Report Uploaded (#$newid)" .($express>0 ? " (Express)" : ""),"A new report #$newid has been uploaded","From: no-reply@vocalimaging.com");

?>
