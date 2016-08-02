<?php

require_once "applogin.inc.php";

$OUTPUT = $UPLOADS_DIR; // from ../config.inc.php

/* 
 * This uploads files to an existing report, after verifying the report exists for the user.
 * Files are submitted as multipart forms so many can be uploaded and they each carry a name etc.
 * Login details are also supplied alongside in the usual "un" and "pw" parameters.
 */
$repid = (int) $_POST["r"];

$res = $mysqli->query("SELECT id FROM reports WHERE id=$repid AND physicianid=$AppUserId");
if(!$res) {
  header("Content-Type: text/plain");
  response_status("500 Internal Server Error");
  echo mysqli_error($mysqli);
  exit;
}
if(!$res->fetch_row()) {
  response_status("403 Forbidden");
  exit;
}

/* Returns true if successful, false if file not found */
$status = array ( );
$errors = false;
foreach($_FILES as $fn => $farr) {
  $status[$fn] = (int) $farr["error"];
  if($status[$fn]>0) {
    $errors = true;
  } else {
    $name = $farr["name"];
    $locn = $farr["tmp_name"];
    mkdir("{$OUTPUT}/$repid",0770);
    if(!move_uploaded_file($locn,"{$OUTPUT}/$repid/$name")) {
      $status[$fn] = UPLOAD_ERR_CANT_WRITE;
    }
  }
  if($status[$fn]==0) {
    $fname = $mysqli->real_escape_string($farr["name"]);
    $desc = $mysqli->real_escape_string($_POST["n_$fn"]);
    $code = $mysqli->real_escape_string($_POST["c_$fn"]);
    $mysqli->query("INSERT INTO reports_files (id,reportid,shortcode,name,filename) VALUES (NULL,$repid,'$code','$desc','$fname')");
  }
}

header("Content-Type: application/json");
if($errors) response_status("400 Bad Request");
echo json_encode($status);

?>
