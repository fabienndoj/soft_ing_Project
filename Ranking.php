<?php
include("php\includes\includeSession.php");
include("php\includes\includeDB.php");
?>
<html>
<head>
    <title> Ranking || Film ODDYSEY</title>
    <link rel="stylesheet" href="css\Ranking.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    

</head>
<body>

    <header>
    <?php 
        include("php\component\barNav.php");
    ?>   
    </header>   
    <main>
        <section class="SearchBox">
            <p class="form__header">Search Movie name:</p>
            <form action="searchResult.php" method="GET" class="SearchBox__form">
                <input type="text" name="rankingSearch" id="rankingSearch" placeholder="Search">
                <div>
                <input type="submit" value="Search" id="searchButton"><p class="text--warning">Will open new page</p>
                </div>
            </form>
            <form action="Ranking.php" method="GET" class="SearchBox__form">
                <p>Or</p>
                <p class="form__header">Order <strong>THIS</strong> page by the options below</p>
            <div>
                 <select name="genreId" id="genreId">
                    <option value="1,2,3,4,5,6,7,8,9,10,11,12">Based on Genre</option>
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
            
            
                <select name="movieIMDB" id="movieIMDB">
                    <option value=".">Based on Rating</option>
                    <option value="9.">9</option>
                    <option value="8.">8</option>
                    <option value="7.">7</option>
                    <option value="6.">6</option>
                    <option value="5.">5</option>
                    <option value="4.">4</option>
                    <option value="3.">3</option>
                    <option value="2.">2</option>
                    <option value="1.">1</option>
                </select>
            
            
                <select name="orderMoviesBy" id="orderMoviesBy">
                    <option value="movieYear">List based on:</option>
                    <option value="movieName">Alphabetical</option>
                    <option value="movieYear">Year</option>
                </select>
            </div>
               
            
            <input type="submit" value="Order" id="searchButton" name="Order">  
            </form>
                
    </section>
    <div class="list">
        <!-- Elementi qe duhet perpunuar -->

            <!-- ******************PHP****************Generate Random Movie -->

<?php
if(!isset($_GET['Order'])){
    $query="SELECT moviePoster,movieName,movieId FROM movie ORDER BY rand()";
    $result=mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_array($result)){
    
        echo '  <div class="Element">
        <a href="Movie.php?movieAppear=Appear&movieId='.$row[2].'"><img src="data:image/jpeg;base64,'.base64_encode($row[0]).'" /></a>
                        <div class="Element__nameAndInput">
                            <div>'.$row[1].'</div>   
                        </div>
                            <form action="php\fun\validateRate.php" method="GET">
                                <input type="text" name="idRate" value="'.$row[2].'" hidden>
                                <select class="ratingSelect" name="'.$row[2].'">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <input type="submit" names="Rate" class="ratingSelect" value="Rate"';
                                
                                $queryTestRate="SELECT rating FROM rating WHERE userId=".$_SESSION['userId']." AND movieId=$row[2]";
                                $resultQueryTestRate=mysqli_query($connection,$queryTestRate);
                                $rowRate=mysqli_num_rows($resultQueryTestRate);
                                if($rowRate>0){
                                    echo ' disabled';
                                }
                                echo '>
                            </form>
                        
                            <form action="php\fun\validateSuggest.php" method="GET">
                                    <input type="text" name="idSuggest" value="'.$row[2].'" hidden>
                                    <input type="submit" name="suggest" class="suggest" value="Suggest"';
                                   
                                    $queryTestSuggest="SELECT suggest FROM suggest WHERE userId=".$_SESSION['userId']." AND movieId=$row[2]";
                                    $resultQueryTestSuggest=mysqli_query($connection, $queryTestSuggest);
                                    $rowSuggest=mysqli_num_rows($resultQueryTestSuggest);
                                     if($rowSuggest==1){
                                        echo ' disabled';
                                     }
                                    echo '>
                            </form>
                </div>';
            }
}
// *************************IF ANY OF THE ORDER BY SELECTIONS ARE SELECTED**************************//

else {
    
    
    $genreId=$_GET['genreId'];
    $movieIMDB=$_GET['movieIMDB'];
    $orderMoviesBy=$_GET['orderMoviesBy'];
    $queryOrder="SELECT moviePoster, movieName, movieId FROM movie WHERE movieGenre IN ($genreId) AND  movieIMDB LIKE '%$movieIMDB%'  ORDER BY $orderMoviesBy DESC";
    $result=mysqli_query($connection,$queryOrder);
    
    while($row=mysqli_fetch_array($result)){
    
        echo '  <div class="Element">
                        <a href="Movie.php?movieAppear=Appear&movieId='.$row[2].'"><img src="data:image/jpeg;base64,'.base64_encode($row[0]).'" /></a>
                        <div class="Element__nameAndInput">
                            <div>'.$row[1].'</div>   
                        </div>
                            <form action="php\fun\validateRate.php" method="GET">
                                <input type="text" name="idRate" value="'.$row[2].'" hidden>
                                <select class="ratingSelect" name="'.$row[2].'">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <input type="submit" names="Rate" class="ratingSelect" value="Rate"';
                                
                                $queryTestRate="SELECT rating FROM rating WHERE userId=".$_SESSION['userId']." AND movieId=$row[2]";
                                $resultQueryTestRate=mysqli_query($connection,$queryTestRate);
                                $rowRate=mysqli_num_rows($resultQueryTestRate);
                                if($rowRate>0){
                                    echo ' disabled';
                                }
                                echo '>
                            </form>
                        
                            <form action="php\fun\validateSuggest.php" method="GET">
                                    <input type="text" name="idSuggest" value="'.$row[2].'" hidden>
                                    <input type="submit" name="suggest" class="suggest" value="Suggest"';
                                   
                                    $queryTestSuggest="SELECT suggest FROM suggest WHERE userId=".$_SESSION['userId']." AND movieId=$row[2]";
                                    $resultQueryTestSuggest=mysqli_query($connection, $queryTestSuggest);
                                    $rowSuggest=mysqli_num_rows($resultQueryTestSuggest);
                                     if($rowSuggest==1){
                                        echo ' disabled';
                                     }
                                    echo '>
                            </form>
                </div>';
            }
}

          
?> 
    </div> <!-- Mbyllja e elementin LIST -->
    </div>
    </main>
</body>
</html>