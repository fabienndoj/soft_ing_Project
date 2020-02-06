<?php
include("..\includes\includeSession.php");
include("..\includes\includeDB.php");

if(isset($_GET['idRate'])){
    $movieId=$_GET['idRate'];
    $movieRating=$_GET[$movieId];
    
    $queryRate="INSERT INTO rating(userId,movieId,rating) VALUES ('{$_SESSION['userId']}','$movieId','$movieRating')";
    $queryRateResult=mysqli_query($connection,$queryRate);
    header("Location:..\..\MyProfile.php");
}
else echo "noo";
?>