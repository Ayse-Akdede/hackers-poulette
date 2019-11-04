<?php include("form.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>Hackers Poulette</title>
    
</head>
<body>

<div class ="top-container">
  <h1> Contact Us </h1>
  <img src="assets/img/logo.png" alt="The Logo">
</div> 

<div class="container">
  <!-- FORM START -->
  <form action="index.php" method="POST">
    <!-- Gender -->
    <div class="red"><?php echo $genderErr; ?></div>
    <label for="gender">Gender</br></label>
    <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo 'checked=checked' ?>>Female
    <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo 'checked=checked' ?>>Male
    <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo 'checked=checked' ?>>Other</br></br>  
    <!-- First name -->
    <div class="red"><?php echo $firstnameErr; ?></div>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your firstname.." value="<?php echo test_input($firstname); ?>">
    <!-- Last name -->
    <div class="red"><?php echo $lastnameErr; ?></div>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your lastname.." value="<?php echo test_input($lastname); ?>">
    <!-- Mail -->
    <div class="red"><?php echo $emailErr; ?></div>
    <label for="email">Email Address</label>
    <input  type="text" name="email" maxlength="80" size="30" placeholder="example@hotmail.com" value="<?php echo test_input($email); ?>">
    <!-- country -->
    <label for="country">Country</label>
    <select id="country" name="country" value="<?php echo test_input($country); ?>">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    <!-- Subject -->
    <label for="subject">Subject</label> 
    <select id="subject" name="subject">
      <option value="others" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'others') ? 'selected="selected"' : ''; ?>>Others</option>
      <option value="rasberrypi"  <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'rasberrypi') ? 'selected="selected"' : ''; ?>>Rasberry Pi</option>
      <option value="accessories"  <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'accessories') ? 'selected="selected"' : ''; ?>>Accessories </option>
    </select>
    <!-- message area -->
    <div class="red"><?php echo $message; ?></div>
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Type your message here ..." style="height:100px"><?php echo test_input($message); ?></textarea>
    <!-- submit button -->
    <input type="submit" name="submit" value="Submit">
  </form>
 
</div>


    
</body>
</html>
