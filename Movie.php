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
if(isset($_GET['movieAppear'])){
    $movieId=$_GET['movieId'];
    $queryMovie="SELECT * FROM movie inner join director on movie.movieDirector=director.directorId INNER JOIN genre on movie.movieGenre=genre.genreId WHERE movieId=$movieId";
    $queryResult=mysqli_query($connection,$queryMovie);
    while($row=mysqli_fetch_assoc($queryResult)){
        echo '<table><tr><td rowspan=7><img src="data:image/jpeg;base64,'.base64_encode($row["moviePoster"]).'" /></td></tr>';
        echo '<tr><td><span class="movie__text--left">Name:</span><span class="movie_text--center">'.$row["movieName"].'</span></td></tr>';
        echo '<tr><td><span class="movie__text--left">Year:</span><span class="movie_text--center">('.$row["movieYear"].')</span></td></tr>';
        echo '<tr><td><span class="movie__text--left">Movie Director:</span><span class="movie_text--center">'.$row["directorName"].' '.$row["directorSurname"].'</span></td></tr>';
        echo '<tr><td><span class="movie__text--left">IMDB:</span><span class="movie_text--center">'.$row["movieIMDB"].'</td></tr>';
        echo '<tr><td><span class="movie__text--left">Synapses:</span><span class="movie_text--center">'.$row["movieDescription"].'</span></td></tr>';
        echo '<tr><td><span class="movie__text--left">Genre:</span><span class="movie_text--center">'.$row["genreName"].'</span></td></tr></table>';
    }

}

?>
<div>
 <form action="php\fun\shtoShport.php" method="GET" id="toWatch">
    <input type="text" name="movieId" value="<?php echo $movieId;?>" hidden>
    <button type="submit" name="addShporta" id="addShporta" value="Add" <?php
    if(isset($_SESSION['shporta'])){
        for($start=0;$start<count($_SESSION['shporta']);$start++){
            if($_SESSION['shporta'][$start]==$movieId){
                echo 'disabled';
                break;
            }
        }
    }
    ?> 
    >Add "To Watch" </button>
</form>   
</div>

</body>
</html>