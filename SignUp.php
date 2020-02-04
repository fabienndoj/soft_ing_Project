<?php
include("php\includes\includeDB.php");
?>
<html>
    <head>
        <title>Sign Up || Film ODDYSEY</title>
        <link rel="stylesheet" href="css\SignUp.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <script src="js\passwordCheck.js"></script>
    </head>
    
    <body>
        <header class="header">
            <nav>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li id="login"><a href="Login.php">Login</a></li>
                </ul>
            </nav>
        </header>
        <?php
        if(isset($_POST['SignUp'])){
            $username=$_POST['username'];
            $userPassword=$_POST['password'];
            $userEmail=$_POST['email'];
            $query="INSERT INTO `user` (`userId`, `username`, `userEmail`, `userPassword`, `userLevel`) VALUES (NULL, '$username', '$userEmail', '$userPassword', '2')";
            $result=mysqli_query($connection,$query);
            if($result){
                echo "<h1 style='text-align:center;color:green;'>You have succesfully signed up for the website!Try and Login with your created account</h1>";
            }
            else
            echo "<h1 style='color:red;font-wight:300;'>Please try again</h1>";
        }
        ?>
        <div class="trupi">
            <form action="SignUp.php" method="POST">
                    <div><label for="username">Username:</label></div>
                    <div><input type="text" name="username" id="username" placeholder="Needs to be unique"></div>

                    <div><label for="email">E-mail:</label></div>
                    <div><input type="email" name="email" id="email" placeholder="name@adress.com"></div>
                    
                    <div><label for="password">Password:</label></div>
                    <div><input name="password" id="password" type="password" onkeyup='check();' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    <!-- <span id="passwordPattern">Passwords must contain at least six characters, including uppercase, lowercase letters and numbers.</span> -->
                    </div>    
                    
                    <div><label for="confirm_password">Rewrite your password:</label></div>
                    <div>
                    <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' /> 
                    <span id='message'></span>
                    </div>

                
                     <br>
                <button type="submit" name="SignUp" id="SignUp">Sign Up</button>  
                </div>
            </form>
        </div> 
    </body>
</html>