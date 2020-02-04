<?php
session_start();
include("php\includes\includeDB.php");
unset($_SESSION['login']);
?>
<html>
    <head>
        <title>Login || Film ODDYSEY</title>

        
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css\Login.css">
        
    </head>
    <body>
        <?php
        include("php\includes\loginNav.php");
        if(isset($_POST['Login'])){
            $username=$_POST['username'];
            $userPassword=$_POST['password'];
            $query="SELECT * FROM `user` WHERE username='$username' AND userPassword='$userPassword'";
            $result=mysqli_query($connection,$query);
            $rows=mysqli_num_rows($result);
            if($rows){
                $_SESSION['login']=1;
                $_SESSION['username']=$username;
                header("Location:MainPageLogedIn.php");
            }
            else
            echo "<h1 style='color:red;font-wight:300;'>Please try again</h1>";
        }
        ?>
        <div class="trupi">
        <form action="Login.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <div><input type="password" name="password" placeholder="Password"></div>
            <input type="submit" name="Login" value="Login">
        </form>
        </div>
    </body>
</html>