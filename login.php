<?php
   ob_start();
   session_start();
   $page_title = 'Login Page';
   include ('connect_to_sql.php');
?>
<html lang="en">
<link rel="stylesheet" href="style2.css" type="text/css">
<style>
   #back 
   {
      background-color: pink;
      width: 100px;
      height: 50px
   }
   #login
   {
      background-color: lightyellow;
      width: 100px;
      height: 50px
   }

   #h2{
      color:gold;
   }
</style>
<body style="background-image: url(image/apar.jpg)">
      
            <?php
            $msg = '';
          
           //logic to check if correct user id and password entered - Start()
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
                $username=$_POST['username'];
                $password=$_POST['password'];
                //Stored Procedure implementation 
                $result = mysqli_query($dbc,"CALL GetLoginDetail('$username', '$password')" ) or die("Query fail:". mysqli_error($dbc));
                $row = mysqli_fetch_array($result);
                
                $noOfrecords=$row[0];
                
               if ($noOfrecords>0) {
                  $_SESSION['username'] = $username;
                  header('Location: home.php');  
               }else {
                  $msg = 'Wrong username or password';
               }
            }
          //logic to check if correct user id and password entered - End()
         ?>
        
        <!-- /container -->

        <!-- /Login Form -->
        <div class="container">
        <center>
            <h2 id="h2">Enter Username and Password</h2>
            
            <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <h4 class="form-signin-heading"><?php echo $msg; ?></h4><span style="color:white"> User Name</span>&nbsp;:
                <input type="text" class="form-control" name="username" placeholder="admin" required autofocus style="width:300px;height:40px;">
                <br>
                <br>
               <span style="color:white"> Password </span>&nbsp;&nbsp;&nbsp;:
                <input type="password" class="form-control" name="password" placeholder="admin" required style="width:300px;height:40px;">
                <br>
                <br>
                <button id="login" style="width:100px;height:50px;" type="submit" name="login">Login</button>
              <a href="index.php">  <input id="back" type="button" value="Back"></a>
                </center>
            </form>
        </div>
    </body>

    </html>