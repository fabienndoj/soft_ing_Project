<?php 
include("php\includes\includeDB.php");
include("php\includes\includeSession.php");
if($_SESSION['userLevel']!=1){
    header("Location:MainPageLogedIn.php");
}
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
        if(isset($POST['Add'])){
            $movieName=$POST['movieName'];
            $movieDirector=$POST['movieDirector'];
            $movieGenre=$POST['genreId'];
            $movieDescription=$POST['movieDescription'];
            $movieIMDB=$POST['movieIMDB'];
            $movieYear=$POST['movieYear'];
            $moviePoster=$POST['moviePoster'];
            $image = addslashes(file_get_contents($_FILES['moviePoster']['tmp_name']));
            
            $queryInputMovie="INSERT INTO `movie` (`movieId`, `movieName`, `movieDirector`, `movieGenre`, `movieDescription`, `movieYear`,'movieIMDB','moviePoster') VALUES (NULL,'$movieName','$movieDirector','$movieGenre','$movieDescription','$movieYear','$movieIMDB','{$image}'";
            echo mysqli_error($connection,$queryInputMovie);
            
        }
    ?>
    <div class="section__Header">Input information!</div>
    <div class="container">
       <form action="AddMovie.php" method="POST" enctype="multipart/form-data">
        
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
            Movie IMDB Rating:
            <input name="movieIMDB" class="movieIMDB" type="number" min="0" max="10" step="0.1" required>
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