<?php include 'index.html'; ?>
<div class="container w-75 mt-3">
  <h3>Create an account</h3>
  <p>Please complete and submit the form.</p>
    <form name="#userregister" action="#user" class="was-validated">
      <div class="mb-3 mt-3">
        <label for="fname" class="form-label">First Name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="lname" class="form-label">Last name:</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" name="lname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth:</label>
        <input type="text" class="form-control" id="dob" placeholder="dd/mm/yyyy" name="dob" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="user@example.com" name="email" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3 mt-3">
        <label for="user" class="form-label">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label"> Confirm Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="pwd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      
    </form>
   </div>
   <label for="login"><a href="login.html">Already have an account?</a></label><br>
  </body>
</html>

      
