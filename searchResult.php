<?php
include("php\includes\includeSession.php");
?>
<html>
<head>
    <title>Film ODDYSEY</title>
    <link rel="stylesheet" href="css\MainPageLogedIn.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <?php 
        include("php\component\barNav.php");
    ?>  
</header>
        <div class="section__Header">The Search Result</div>
            <!-- Grid -->
        <div class="list">
        <!-- Elementi qe duhet perpunuar -->

            <!-- ******************PHP****************Generate Random Movie -->
            <?php
include("php\includes\includeDB.php");
$searchInput=$_GET['rankingSearch'];
$query="SELECT moviePoster,movieName,movieId FROM movie WHERE movieName LIKE '%$searchInput%'";
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


          
?> 
    </div> <!-- Mbyllja e elementin LIST -->