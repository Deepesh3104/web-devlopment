<!-- <?php
// connect to the database
$conn = mysqli_connect("localhost", "username", "password", "login_system");

// check for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // retrieve user input
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  // insert user data into the database
  $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  mysqli_query($conn, $query);

  // redirect to login page
  header("Location: login.php");
  exit;
}
?>

<form method="post">
  <label>Name:</label>
  <input type="text" name="name"><br>

  <label>Email:</label>
  <input type="email" name="email"><br>

  <label>Password:</label>
  <input type="password" name="password"><br>

  <button type="submit">Signup</button>
</form>
 -->