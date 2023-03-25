<?php
// start the session
session_start();

// connect to the database
$conn = mysqli_connect("localhost", "username", "password", "login_system");

// check for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // retrieve user input
  $email = $_POST["email"];
  $password = $_POST["password"];

  // retrieve user data from the database
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $query);
  $user = mysqli_fetch_assoc($result);

  // check if user exists and password is correct
  if ($user && password_verify($password, $user["password"])) {
    // set session variables
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["user_name"] = $user["name"];

    // redirect to dashboard
    header("Location: dashboard.php");
    exit;
  } else {
    // display error message
    echo "Invalid email or password";
  }
}
?>

<form method="post">
  <label>Email:</label>
  <input type="email" name="email"><br>

  <label>Password:</label>
  <input type="password" name="password"><br>

  <button type="submit">Login</button>
</form>
