<?php include 'index_X.php'; ?>
<div class="container w-75 mt-3">
  <h3>Create an account</h3>
  <p>Please complete and submit the form.</p>

<div class="container w-75 mt-3">
    <form name="#userregister" action="processForm.php" method="post" class="was-validated">
      <div class="mb-3 mt-3">
        <label for="fname" class="form-label">First Name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    <div class="mb-3">
      <label for="lname" class="form-label">Lastname:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" name="lname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <label for="dob" class="form-label">Date of Birth:</label><br>
      <input type="text" class="form-control" id="dob" placeholder="mm/dd/yyyy" name="dob" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="user@example.com" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3 mt-3">
      <label for="user" class="form-label">Username:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter username" name="user" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
        <input type="password" id="pwd" name="pwd"><br>
      <label for="confirm">Confirm password:</label><br>
        <input type="password" id="pwd" name="pwd"><br>
          <div class="mb-3">
      <label for="usertype" class="form-label">User Type:</label>
      <select class="form-select" name="usertype" required>
        <option value="">Confirm that you are a user.</option>
        <option value="2">User</option>
      </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <label for="login"><a href="login.html">Already have an account?</a></label><br>    
  </form>
</div>

      