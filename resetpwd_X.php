<?php include 'index_X.php'; ?>

  <div class="container w-75 mt-3">
  <h3>Reset password Form</h3>
  <p>Please complete and submit the form.</p>
    

  <body>
    <form name="forgotpwd" action="forgotpwd.php" class="was-validated">
      <div class="mb-3 mt-3">
        <label for="reset" class="form-label">Confirm your email:</label><br>
        <input type="text" class="form-control" id="confirmEmail" placeholder="user@example.com" name="confirmEmail" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </form>
  </body>
