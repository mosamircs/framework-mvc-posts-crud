<?php
use App\Controllers\UserController;
?>

<?php
    $user= new UserController();
    echo "<pre>";
    $user->index();
?>

<html>
<head>
    <title>Login</title>
   
</head>
<body>
    <h1>Login User</h1>
    <div>
        <form>
            Email: <input type="email" name="email" ><br><br>
            Password: <input type="password" name="password" >
            <button name = "login">Login</button>
        </form>
    </div>
</body>
</html>