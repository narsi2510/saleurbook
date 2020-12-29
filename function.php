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
        $query = "INSERT INTO signup(name,address,phone,dob,email,password,cnfpassword) ";
        $query .="VALUES('$name', '$address', '$phone','$dob','$email','$password','$cnfpassword')";
        $result=mysqli_query($connection,$query);
        if(!$result)
        {
         die('error' . mysqli_error());
        }
    }

  

?>