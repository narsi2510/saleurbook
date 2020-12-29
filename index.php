<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $connection=mysqli_connect('localhost','root','','student');
    if($connection)
    {
      echo "success";

    }
    else{
      die("Error");
    }
    ?>
    

    <form action="submit" method=post>
     name:   <input type="text" name="name" placeholder="enter your name" required>
     <br>
     <br>
     usn:   <input type="text" name="usn" placeholder="usn" required>
     <input type="submit" name="submit" value="submit" >

    </form>
  </body>
</html>