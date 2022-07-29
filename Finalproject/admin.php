<!DOCTYPE html>
<html>
<head>

    <div class="container">
    <div class="box">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <link rel="stylesheet" href="css/style.css">
</head>
<body>
          <form method="post">
              <h1><center><b>ADMIN LOGIN</b></center></h1>
                     <img src="icon.png"  width="300" height="300">
                     
                     
                     <br>NAME: <input type="text" name="username" required/>
                     PASSWORD: <input type="password" name="password"required/>   <input type="submit" name="login" value="login"/><br>
                         
                           
<br>                               
<br>
</html> 
<?php


                $username = (isset($_POST["username"]))? $_POST["username"] : null;
                $password = (isset($_POST["password"]))? $_POST["password"] : null;
                $login = (isset($_POST["login"]))? $_POST["login"]:null ;

        if($login != ""){
        if(!($username == "admin" && $password == "password")){
                    echo "<center><b><h4> User not Found </center></b></h4>";
               }else{
                     echo '<a href="front.php" class="link-primary"> <center> <b><h4> SUCCESSFULLY LOGIN ! CLICK HERE TO OPEN </h4> </b> </center> </a>';
            }
            }
?> 
          </form>  <h3 class="display-5 text-center"> <a href="index.php" class="link-primary"><b>BACK</b></h3></a>  
   
</div>
</div>           
</body>

                                        
               
