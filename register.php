
<?php
require 'config.php';
if(isset($_POST["submit"])) 
{
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $duplicate=mysqli_query($conn ,"SELECT * FROM table1 WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($duplicate)> 0) 
    {
        echo "<script> alert('Username or Email is Already Taken'); </script>";
    }
    else
    {
        if($password == $confirmpassword)
        {
            $query = "INSERT INTO table1 VALUES('','$name','$username','$email','$password')";
            mysqli_query($conn , $query);
            echo "<script> alert('Register Successfully'); </script>";
        }
        else
        {
            echo "<script> alert('Password Does Not Match'); </script>";
        }

    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    
    <div class="main">
       
           <!-- <text>Register Here</text> -->
           <h2 align="center">Sign in to complete your order</h2>
           <p align="center">Dont't have an account?<a href='login.php'><b>Sign In</b></a></p>
          
           <form action=""  method="post">
               <!-- <label>First Name</label><br> -->
               <input type="text" name="name" id="name" placeholder="Enter Your Name">
               <br><br>
               <!-- <label>Last Name</label><br> -->
               <input type="text" name="username" id="name" placeholder="Enter Your UserName">
               <br><br>
               <!-- <label>Your Age</label><br> -->
               <input type="email" name="email" id="name" placeholder="Enter Your email">
               <br><br>
               <!-- <label>Password</label><br> -->
               <input type="password" name="password" id="name" placeholder="Enter Your Password">
               <br><br>
               <input type="password" name="confirmpassword" id="name" placeholder="Re Enter Password">
               <br><br>
   
              
               
               <input type="submit" name="submit" value="Sign up"  id="submit">
   
   
   
           </form>
   
   
   
       
      </div> <!-- end main -->
</body>
</html>