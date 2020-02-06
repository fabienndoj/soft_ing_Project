<?php 
include("php\includes\includeDB.php");
include("php\includes\includeSession.php");
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
    <!-- Insert Into Database -->
    <?php
        if(isset($_GET['Add'])){
            $movieName=$_GET['movieName'];
            $movieDirector=$_GET['movieDirector'];
            $movieGenre=$_GET['genreId'];
            $movieDescription=$_GET['movieDescription'];
            $movieYear=$_GET['movieYear'];
            $moviePoster=$_GET['moviePoster'];
            
            $queryInputMovie="INSERT INTO `movie` (`movieId`, `movieName`, `movieDirector`, `movieGenre`, `movieDescription`, `movieYear`) VALUES (NULL,'$movieName','$movieDirector','$movieGenre','$movieDescription','$movieYear'";
            if(mysqli_query($connection,$queryInputMovie)) echo "SUCCESS";
            
        }
    ?>
    <div class="section__Header">Input information!</div>
    <div class="container">
       <form action="AddMovie.php" method="GET">
        
        <div>
            Movie Name:<input type="text" name="movieName" required>
        </div>
        <div>
            Movie Director:<select name="movieDirector" class="movieDirector" required>
        <?php 
            $querySelectMovieDirector="SELECT * FROM director";
            $result=mysqli_query($connection,$querySelectMovieDirector);
            while($row=mysqli_fetch_assoc($result)){
                echo '
                    <option value="'.$row["directorId"].'">'.$row["directorName"].' '.$row["directorSurname"].'</option>
                ';
            }

        ?>
        </select>
        </div>
        <div>
        Genre:<select name="genreId" id="genreId" required>
                    <option value="1">Animated</option>
                    <option value="2">Action</option>
                    <option value="3">Adventure</option>
                    <option value="4">Comedy</option>                        
                    <option value="5">Crime</option>
                    <option value="6">Drama</option>
                    <option value="7">Epic</option>
                    <option value="8">Horror</option>
                    <option value="9">Musical</option>
                    <option value="10">Sci-fi</option>
                    <option value="11">War</option>
                    <option value="12">Western</option>
                </select>
        </div>
        <div>
            Movie Synapses:
            <input type="text" name="movieDescription" class="movieDescription" required>
        </div>
        <div>
            Movie Year:
            <input name="movieYear" class="movieYear" type="number" min="1900" max="2099" step="1" required>
        </div>
        <div>
            Movie Poster:
            <input type="file" name="moviePoster" class="moviePoster" accept="image/*" required>
        </div>
        <input type="submit" value="Add" name="Add" class="Add">
    </form> 
    </div>
    
   
</body>
</html>