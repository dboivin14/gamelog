<?php include 'index_X.php'; ?>

<div class="container mt-3">
  <h2>Sign in to your account</h2>
  <form name="signin" action="signinAction.php" method="post">
    <div class="mb-3 mt-3">
      <label for="username">Username:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="username">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="resetpwd_X.php">Forgot your Password?</a>
</div>