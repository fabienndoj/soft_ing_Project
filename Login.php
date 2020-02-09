<?php
session_start();
include("php\includes\includeDB.php");
// unset($_SESSION['login']);
// unset($_SESSION['username']);
// unset($_SESSION['userLevel']);
// unset($_SESSION['userId']);
?>
<html>
<head>
    <title>Film ODDYSEY</title>
    <link rel="stylesheet" href="css\login.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
    <body>
        <?php
        include("php\includes\loginNav.php");
        if(isset($_POST['Login'])){
            $username=mysqli_escape_string($connection,$_POST['username']);
            $userPassword=mysqli_escape_string($connection,$_POST['password']);
            $query="SELECT userId, username, userLevel FROM `user` WHERE username='$username' AND userPassword='$userPassword'";
            $result=mysqli_query($connection,$query);
            $row=mysqli_fetch_assoc($result);
            if($row){
                // Ka nevoje per rregullim kjo kam pershtypje
                $_SESSION['userId']=$row['userId'];
                $_SESSION['login']=1;
                $_SESSION['username']=$username;
                $_SESSION['userLevel']=$row['userLevel'];
                
                header("Location:MainPageLogedIn.php");
            }
            else
            echo "<h1 style='color:red;font-wight:300;'>Please try again</h1>";
        }
        ?>
        <div class="trupi">
        <form action="Login.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <div><input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"></div>
            <input type="submit" name="Login" value="Login">
        </form>
        </div>
    </body>
</html>