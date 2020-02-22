<?php

// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $genderErr = $messageErr= "";
$firstname = $lastname = $email = $gender = $message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "First name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
  }

  if (empty($_POST["lastname"])) {
    $lastnameErr = "Lastname name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["message"])) {
    $messageErr = "message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


/* Namespace alias. */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

