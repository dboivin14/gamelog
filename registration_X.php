<?php include 'index.php'; ?>
<div class="container w-75 mt-3">
  <h3>Create an account</h3>
  <p>Please complete and submit the form.</p>
  <form name="registration" action="registrationAction.php" method="POST" class="was-validated">
      <div class="mb-3">
        <label for="firstname" class="form-label">First Name:</label>
        <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname" autocomplete="on" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label">Last name:</label>
        <input type="text" class="form-control" id="lastname" placeholder="Enter your lastname" name="lastname" autocomplete="off" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth:</label>
        <input type="text" class="form-control" id="dob" placeholder="dd/mm/yyyy" name="dob" autocomplete="off" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="user@example.com" name="email" autocomplete="off" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3 mt-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" autocomplete="off" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>      
    </form>
   </div>
   <label for="login"><a href="login.html">Already have an account?</a></label><br>


      
