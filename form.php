<?php

// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $genderErr = $messageErr= "";
$firstname = $lastname = $email = $gender = $message = "";
$country = $_POST["country"];
$subject = $_POST["subject"];

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

/* Open the try/catch block. */
try {

    /* Set the mail sender. */
    $mail->setFrom('hackers@poulette.com', 'Hackers Poulette');

    /* Add a recipient. */
    $mail->addAddress($email, $name);

    /* Set the subject. */
    $mail->Subject = "Thank you for contacting us!";

    /* Enable HTML */
    $mail->isHTML(TRUE);

    $mail->AddEmbeddedImage("assets/img/logo.png", "logo", "assets/img/logo.png");

    /* Set the mail message body. */
    $mail->Body =
        "Message send automatically.<br>
        Here is the informations you send us :<br>
          <strong>Gender : </strong> $gender<br>
          <strong>Firstname :</strong> $firstname<br>
          <strong>Lastname :</strong> $lastname<br>
          <strong>Mail :</strong> $email<br>
          <strong>Country :</strong> $country<br>
          <strong>Subject :</strong> $subject<br>
          <strong>Message :</strong> $message<br>";

    /* SMTP parameters. */
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'zartovmaroteov@gmail.com';
    $mail->Password = 'under087';

    /* Finally send the mail. */
    $mail->send();
} catch (Exception $e) {
    /* PHPMailer exception. */
    echo $e->errorMessage();
} catch (\Exception $e) {
    /* PHP exception (note the backslash to select the global namespace Exception class). */
    echo $e->getMessage();
}