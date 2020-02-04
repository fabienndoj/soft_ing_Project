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