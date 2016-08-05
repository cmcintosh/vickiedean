<?php

require_once "applogin.inc.php";

/*
 * Adds a new location to the doctor's profile and returns the new location ID
 */
$name = mysql_param("n");
$contactname = mysql_param("c");
$phone = mysql_param("p");
$email = mysql_param("e");

if(!filter_var($_REQUEST["e"],FILTER_VALIDATE_EMAIL)) {
  response_status("400 Bad Request");
  echo "Invalid e-mail address supplied";
  exit;
}

/* Add */
if(!$mysqli->query("INSERT INTO physicians_locations (id,physicianid,locationname,contactname,contactphone,deliveryemail) VALUES (NULL,$AppUserId,$name,$contactname,$phone,$email)")) {
      die("Error: " . mysqli_error($mysqli));
}
$newid = $mysqli->insert_id;
if($newid==0) {
  response_status("500 Internal Server Error");
  echo "Error creating location " . mysqli_error($mysqli);
  exit;
}
/* Output the new report ID */
echo $newid;

?>
