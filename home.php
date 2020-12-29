<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Book Website</title>
    <style>
   
.border{
  border:1px solid;
  height:75px;
  background-color:black;

}
#Border{
  border:1px solid;
  height:100%;
  width:100%;
  background-color:black;

}
li input[type=text] {
    border:2px solid;
    width:40%;
    height:45px;
    margin-left:300px;
    margin-top:18px;

}
li input:hover{
  color:blue;
}

li button {
  margin-right:50px;
    border:2px solid;
    height:45px;
    

}

form.example button:hover {
  background: #0b7dda;
}


#nav{
  position:fixed;
        border:0;
        width:100%;
        float:left;
       
      

    }
  
ul {
  list-style-type: none;
  margin: 0;
  padding-left: 50px;
  overflow: hidden;
  background-color: #dddddd;
}

li a {
  float:right;
  margin-right:30px;
  

}

li a {
color:black;
  padding: 5px;
}


#border1{
   border:2px solid;
    width:100%;
    height:50px;
    background-color:pink;
    
    
}
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}
li img{
    border:1px solid;
    height:50px;
    weight:20px;
}
.blink 
{
        animation: blinker 0.6s linear infinite;
        color: #1c87c9;
        font-size: 15px;
        font-weight: bold;
        font-family: sans-serif;
}
      
.blink-one 
{
  animation: blinker-one 1s linear infinite;
}
@keyframes blinker-one {
0% {
opacity: 0;
  }
}
.adds
{
   border:2px solid;
   
    background-color:pink;
}  

.myDiv {
  border: 1px outset red;
  background-color: lightblue;    
  text-align: center;
  height:120px;
}     
.myDiv2 {

  border: 1px outset red;
  background-color: white; 
  height:100%;   
  width:100%;
  

}  
.images{
  width:200px;
  height:130px;
  padding-top: 20px;
  margin-left:30px;
}

article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}    
.buy1{
  float-right:600px; 
  margin-right:10px;
  margin-top:10px;
}
p11{
  margin-left:80px;
  font-size:15px;
}
p12{
  border:none;
  border-width:50px;
  border-height:20px;
  margin-left:40px;
  font-size:20px;
  
}
p13{
  margin-left:80px;
  font-size:15px;
}
p14{
  margin-left:80px;
  font-size:15px;
}
button:hover{
  color:red;
  border:solid;


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
     $query="SELECT * FROM  signup ";
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
    

  
 ?>

<div class="border">
        <ul id="nav">
            <li><a href="login.php">Login</li>
            <li><a href="signup.php"><i class="fa fa-shopping-cart" style="font-size:30px;color:Brown;"></i><br><i><p class="blink blink-one">Cart</p></a></li>
            <li><a href="#"><img src="sale.png" style="font-size:30px;color:white;"></a></li>
            <li><a href="#"><b><?php echo "Hello <br>$db_name"; ?></a></li>
            
            <li>
               <span><img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg" ></span>
               <input type="text" placeholder="Search.." name="search2">
            </li>
           
        </ul>
</div>


<div class="myDiv">
<h2>This is a heading in a div element</h2>
  <p>this is for addvertisement</p>
</div>
<div class="myDiv2">
 

  <?php
   $connection=mysqli_connect('localhost','root','','book');
   if(!$connection)
    {
    die("error");
    }
  $query="SELECT * FROM books_detail";
  $result=mysqli_query($connection,$query);
   while($row=mysqli_fetch_assoc($result))
   {
     $image=$row['image'];
     $price=$row['price'];
     $about=$row['about'];
     $buy=$row['buy'];
     echo "<table>";
     echo "<tr>";
     echo "<td><p15> <img  class='images' src='$image' alt='no image'</p15> </td>";
     echo "<td><p11>$price </p11></td>";
     echo "<td> <p12>$about</p12> </td>";

     echo '<td><p13><button>Buy </button></p13></td>';
     echo "<td><p14> <button>Add to cart</button> </p14></td>";
    
     echo "</tr>";
     echo "<hr>";
     echo "</table>";
     }
  ?>
 
</div>

</body>
</html>
</body>
</html>









