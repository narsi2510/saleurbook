
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         /* Bordered form */
form {
  border: 3 px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 90%;
  padding: 2px 2px;
  margin: 12px 2px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.box1{
  width: 400px;
  padding: 40px 50px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: grey;
  text-align: left;
  border-radius: 40px;

}

/* Set a style for all buttons */
button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 12px 0;
  border: none;
  cursor: pointer;
  width: 40%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.9;
  
  background-color: black;
  box-shadow: 0 6px #666;
  transform: translateY(4px);
}

/* The "Forgot password" text */
span.psw {
  float: left;
}
 
    </style>
</head>
<body>
<?php
$connection=mysqli_connect('localhost','root','','book');
if(!$connection)
{
    die("error");
}

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM  signup WHERE email ='{$email}'";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
        die('error' .mysqli_error($connection));
    }
    while($row=mysqli_fetch_assoc($result))
    {
        $db_name=$row['name'];
        $db_address=$row['address'];
        $db_phone=$row['phone'];
        $db_dob=$row['dob'];
        $db_email=$row['email'];
        $db_password=$row['password'];
        
    }
    if($email===$db_email && $password==$db_password){
      header("Location:../Book/home.php");

    }
    else{
      echo '<script>alert("Please enter valid Data")</script>';
    }
    
   
   

}


?>

    <form action="" method="post">
      <div class="box1">
        <div class="container">
          <label for="email"><b>Email : </b></label>
          <input type="text" placeholder="Enter your email address" name="email" required>
      <br>
          <label for="psw"><b>Password : </b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      <br>
    
          
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
<br>
<button type="submit" name="submit">Login</button>
        
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          
          <span class="psw"><a href="#">Forgot Password?</a></span>
        </div>
        </div>
      </form> 
      
</body>
</html>