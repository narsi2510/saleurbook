<?php include "function.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  input[type=text], input[type=password],input[type=date],input[type=int],input[type=email]  
  {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=date]:focus,input[type=int]:focus,input[type=email]:focus{
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.8;
}

button:hover {
  opacity:0.5;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>
<body>
<?php
    $connection=mysqli_connect('localhost','root','','book');
    if(!$connection)
    {
      die("error");
    }

    
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cnfpassword=$_POST['cnfpassword'];
        if($password == $cnfpassword)
        {
          $query = "INSERT INTO signup(name,address,phone,dob,email,password,cnfpassword) ";
          $query .="VALUES('$name', '$address', '$phone','$dob','$email','$password','$cnfpassword')";
          $result=mysqli_query($connection,$query);
         
        }else
        {
          
          echo '<script>alert("password not matched")</script>';

        }
          
        
      }
       
        
    

?>
    <form action="login.php" style="border:1px solid #ccc" method="post">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter your Name" name="name" required>

          <label for="Address"><b>Address</b></label>
          <input type="text" placeholder="Enter Address" name="address" required>
      
          
          <label for="Phone"><b>Phone</b></label>
          <input type="int" placeholder="Enter Phone Number" name="phone" required>

          <label for="dob"><b>D.O.B</b></label>
          <input type="date" placeholder="Enter date of birth" name="dob" required>

          <label for="email"><b>Email</b></label>
          <input type="email" placeholder="Enter Email" name="email" required>

      
          <label for="psw"><b>Password</b></label>
          <input type="text" placeholder="Enter Password" name="password" required>
          
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="cnfpassword" required>
          

          

      
          
      
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
          <div class="clearfix">
            
            <button type="submit" class="signupbtn" name="submit">Sign Up</button>
          </div>
        </div>
      </form>
</body>
</html>