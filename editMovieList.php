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
<!-- ***********VALIDATION OF THE FORM AND RESULT ************* -->
<?php
        if(isset($_GET['update'])){
            $movieId=$_GET['movieID'];
            $position=$_GET['position'];
                $updateQuery="UPDATE editor SET movieId=$movieId WHERE position=$position";
                $resultUpdate=mysqli_query($connection,$updateQuery);
                if($resultUpdate){
                    echo 'The id:'.$movieId.' has been set to position:'.$position;
                }
            }
    ?>
<!-- **********SECTION HEADER & FORM TO UPDATE THE MOVIES*********** -->
<div class="section__Header">Update a position in the Editor's Choice Section of Main Page</div>

<form action="editmovieList.php" method="GET">
    <div>
        The name of the movie:
        <select name="movieID" id="movieID">
            <?php
                $queryEditorChoice="SELECT movieID,movieName FROM movie ";
                $queryEditorChoiceResult=mysqli_query($connection,$queryEditorChoice);
                         while($row=mysqli_fetch_assoc($queryEditorChoiceResult)){
                             echo '<option value="'.$row["movieID"].'">'.$row["movieName"].'</option>';    
                         }
            ?>
        </select>
    </div>
    <div>
        Position on the Page:
        <select name="position" id="position">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Update Page" name="update">
    </div>
    
    
    
</form>