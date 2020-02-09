<?php
include("..\includes\includeSession.php");
include("..\includes\includeDB.php");
if(isset($_GET['addShporta'])){
     $shtoMovieId=$_GET['movieId'];
    array_push($_SESSION['shporta'], $shtoMovieId);
    header("Location:..\..\Movie.php?movieAppear=Appear&movieId=$shtoMovieId");
}
   
    
?>