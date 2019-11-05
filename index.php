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

  <header class ="top-container">
    <h1> Contact Us </h1>
    <img src="assets/img/logo.png" alt="The Logo">
  </header> 

  <div class="container">
    <!-- FORM START -->
    <form action="index.php" method="POST">
      <!-- Gender -->
      <div class="red"><?php echo $genderErr; ?></div>
      <label for="gender">Gender<br></label>
      <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo 'checked=checked' ?>>Female
      <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo 'checked=checked' ?>>Male
      <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo 'checked=checked' ?>>Other<br><br>
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
      
        <option>-- Choose your country</option>
        <option value="Austria">Austria</option>
        <option value="Belgium">Belgium</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Croatia">Croatia</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech_Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Estonia">Estonia</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="Germany">Germany</option>
        <option value="Greece">Greece</option>
        <option value="Hungary">Hungary</option>
        <option value="Ireland">Ireland</option>
        <option value="Italy">Italy</option>
        <option value="Latvia">Latvia</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Malta">Malta</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Romania">Romania</option>
        <option value="Slovak_Republic">Slovak Republic</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Spain">Spain</option>
        <option value="Sweden">Sweden</option>
        <option value="United_Kingdom">United Kingdom</option>
      </select>
      <!-- Subject -->
      <label for="subject">Subject</label> 
      <select id="subject" name="subject">
        <option value="others" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'others') ? 'selected="selected"' : ''; ?>>Others</option>
        <option value="rasberrypi"  <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'rasberrypi') ? 'selected="selected"' : ''; ?>>Rasberry Pi</option>
        <option value="accessories"  <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'accessories') ? 'selected="selected"' : ''; ?>>Accessories </option>
      </select>
      <!-- message area -->
      <div class="red"><?php echo $messageErr; ?></div>
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Type your message here ..." style="height:100px"><?php echo test_input($message); ?></textarea>
      <!-- submit button -->
      <input type="submit" name="submit" value="Submit">
    </form>
  
  </div>
 
</body>
</html>
