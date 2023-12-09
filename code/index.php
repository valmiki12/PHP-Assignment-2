<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <meta name = "robots" content = "noindex, nofollow">
    <meta name = "description" content = "home-page">
  <title>login </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <!-- Header Section -->
  <header>
    <h1>PHP ASSIGNMENT-2</h1>
  </header>
  <!-- Main Content Body -->
  <div class="container">
    <div class="row">
      <div class="container">
        <h2>Login</h2>
        <!-- Login Form Submission -->
        <form action="login.php" method="post">
          <!-- Email Input -->
          <div class="form-group">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" id="Email" name="Email" required>
          </div>
          <!-- Password Input -->
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="Password" name="Password" required>
          </div>
          <!-- Login Button -->
          <button type="submit" class="btn btn-primary">Login</button>
          <!-- Link to Register Page -->
          <a href="register.html" target="_blank" rel="noreferrer">Register here</a>
        </form>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>