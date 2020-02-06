<?php
include("..\includes\includeSession.php");
include("..\includes\includeDB.php");

if(isset($_GET['suggest'])){
    $movieId=$_GET['idSuggest'];
    // $movieRating=$_GET[$movieId];
    $userId=$_SESSION['userId'];
    
    $querySuggest="INSERT INTO suggest(userId,movieId,suggest) VALUES ('$userId','$movieId','1')";
    $querySuggestResult=mysqli_query($connection,$querySuggest);
    header("Location:..\..\MyProfile.php");
}
else echo "noo";
?>