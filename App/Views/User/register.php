<?php
/**
 * 
 */
$nameErr = $emailError = $passwordError = "";
$name = $email = $password = "";
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  /**
   * make name email password required and error message 
   */
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
      } else {
        $name = check_input($_POST["name"]);
      }
      if (empty($_POST["email"])) {
        $emailError = "Email is required";
      } else {
        $email = check_input($_POST["email"]);
      }
      if (empty($_POST["password"])) {
        $passwordError = "password  is required";
      } else {
        $email = check_input($_POST["password"]);
      }
  }
  ?>
<html>
    <head>
        <title>Register</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    </head>
</html>

    <div class="mb-3">
        <h1>Regsiter User</h1>
        <form method="post" action="index.php">
            Name : <input type="text" name="name" ><br><br>
            <span class="error"> <?php echo $nameErr; ?></span>
            Email : <input type="email" name="email"><br><br>
            <span class="error"> <?php echo $emailError; ?></span>
            Password : <input type="password" name="password" ><br><br>
            <span class="error"> <?php echo $passwordError; ?></span>
            <button type="button" class="btn btn-primary"name = "register">Register</button>
        </form>
    </div>
<?php
if (isset( $_POST['register'] ) ) {
echo '<h3>user registerd successfully</h3>';
} 


?>