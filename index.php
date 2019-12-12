<?php
    
    $title = 'index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?> 

  <!--
    First name
    lastname
    date of birth (use datapicker)
    specialty (database Admin, Software Developer, web administrator, other)
    Email address
    contact Number
  -->

<h1 class = "text-center">Registration for  IT Conference</h1>

<form method = "post" action ="success.php">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>

  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>

  <div class="form-group">
    <label for="dob">Date Of Birth</label>
    <input type="text" class="form-control" id="dob" name="dob">
  </div>

  <div class ="form-group">
    <label for="specialty">Area of Expertise</label>
    <select class="form-control" id="specialty" name="specialty">
      <option value="1">Database Admin</option>
      <option value="3">Software Developer</option>
      <option value="4">web administrator</option>
      <option value="7">other</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" 
    name="email"aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">
    We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="phone">Contact Number</label>
    <input type="text" class="form-control" id="phone" 
    name="phone"aria-describedby="phoneHelp">
    <small id="phoneHelp" class="form-text text-muted">
    We'll never share your number with anyone else.</small>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<br>
<br>
<br>
<?php require 'includes/footer.php';?> 