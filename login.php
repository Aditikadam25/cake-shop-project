<?php
require 'config.php';
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn,"SELECT * FROM table1 WHERE username = '$username'") ;
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)> 0)
    {
        if($password == $row["password"])
        {
            $_SESSION["login"] = true;
            $_SESSION["id"]= $row["id"];
            header("Location: Home.html");
        }
        else
        {
            echo "<script> alert('Wrong Password'); </script>";
        }

    }
    else
    {
        echo "<script> alert('User Not Registered'); </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sign In Page</title>
    <link rel="stylesheet" href="login.css">
    <link href="Home.html">
</head>
<body>

  <div id='login-form'>
      <div class="form-box">
        <h2 align="center">Sign in to complete your order</h2>
        <p align="center">Dont't have an account?<a href='register.php'>Sign up</a></p>

            <form class='input-group-login' action="" method="post" id='login'>
                <!-- <label for="ipname">Email Id*</label> -->
                <br>
                <input type='text' name='username' class='input-field'placeholder='Username' required >
                <br>
                <!-- <label for="ipname">Password*</label> -->
                <br>
                <input type='password' name='password' class='input-field'placeholder='Enter Password' required>
            
              
               <br><br>
                <button type='submit' name='submit' class='submit-btn'>Log in</button>
            </form>
      </div>
  </div>
</div>
    
</body>
</html>