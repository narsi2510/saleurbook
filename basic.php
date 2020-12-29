<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic</title>
    <style>
    #apple{
        text-align:center;
        color:red;
        font-size:42px;
    }
    </style>
    <script>
    function msg(){ 
       /* var name=document.myform.name.value;
        var password=document.myform.password.value;
        if (name==null || name==""){ 
            alert("Name can't be blank");
            return false;
            }
            else if(password.length<6){
                 alert("Password must be at least 6 characters long."); 
                 return false;
                  } 
                  }*/
        document.getElementById('demo').innerHTML="<h2>This is heading using JavaScript</h2>";
                }
         
                  </script>
</head>
<body>

<p id="demo">Hello world</p>
<input type="button" value="click me" onclick="msg()" >
  </form>
</body>
</html>