<?php
include("php\includes\includeSession.php");
include("php\includes\includeDB.php");
?>
<html>
<head>
    <title>Film ODDYSEY</title>
    <link rel="stylesheet" href="css\addMovie.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <?php 
        include("php\component\barNav.php");
    ?>  
</header>
    <?php
        if(isset($_GET['Update'])){
            $userId=$_GET['userId'];
            $queryCheckLevel="SELECT userLevel,username FROM user where userId=$userId";
            $result=mysqli_query($connection,$queryCheckLevel);
            $row=mysqli_fetch_array($result);
            if($row['userLevel']==2){
                $updateQuery="UPDATE user  SET userLevel=1 WHERE userId=$userId";
                $resultUpdate=mysqli_query($connection,$updateQuery);
                if($resultUpdate){
                    echo '<h2 style="text-align:center;color:green;">The Update to Admin of "'.$row['username'].'" was completed</h2>';
                }
                else echo '<h2 style="text-align:center;color:red;">The user "'.$row['username'].'" probably is an Admin already</h2>';
            }
        }
    ?>
    <div class="section__Header">Update to Admin!</div>
    <div class="container">
        <form action="updateToAdmin.php" method="GET">
            <div>
                Username:
                <select name="userId" class="userId">
                    <?php
                         $queryUsername="SELECT userId,username FROM user Where userLevel='2'";
                         $queryUsernameResult=mysqli_query($connection,$queryUsername);
                         while($row=mysqli_fetch_assoc($queryUsernameResult)){
                             echo '<option value="'.$row["userId"].'">'.$row["username"].'</option>';    
                         }
                    ?>

                </select>
            </div>
                <input type="submit" value="Update" name="Update">
        </form>
    </div>
    
</body>
</html>