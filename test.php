<?php
session_start();
if($_SESSION['login']!=1){
    header("Location:Login.php");
    die();
}
?>
<html>
<head>
    <title>Home Page || Film ODDYSEY</title>
    <link rel="stylesheet" href="css\MainPageLogedIn.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

</head>
<body>
<header>
    <nav>
            <ul>
                <li><a href="#yearBest">This Years Best</a></li>
                <li><a href="#EditorsChoice">Editor's Choice</a></li>
                <li><a href="Ranking.php">Ranking</a></li>
                <li class="UserLogout"><a href="Login.php">Logout</a></li>
                <li class="UserLogout"><a href="MyProfile.php">My Profile</a></li>
            </ul>
    </nav>   
</header>

<section>
    
    
        <input type="search" name="searchBox" id="searchBox" placeholder="Search">
    
</section>

<main>
    <!-- ******Year Best Section********** -->
    <section class="yearBest" id="yearBest">
        <div class="section__Header">This Years Best</div>
            <!-- Year Best Grid -->
        <div class="list">
        <!-- Elementi qe duhet perpunuar -->

<!-- ******************PHP****************Generate Random Movie -->
<?php
include("php\includes\includeDB.php");
$query="SELECT moviePoster,movieName,movieId FROM movie ORDER BY rand() LIMIT 10";
$result=mysqli_query($connection,$query);

while($row=mysqli_fetch_array($result)){

    echo '  <div class="Element">
                    <img src="data:image/jpeg;base64,'.base64_encode($row[0]).'" />
                    <div class="Element__nameAndInput">
                        <div>'.$row[1].'</div>   
                    </div>
                        <form action="php\fun\validateRate.php" method="GET">
                            <input type="text" name="id" value="'.$row[2].'" hidden>
                            <select class="ratingSelect" name="'.$row[2].'">
                                <option value="Rate" disable selected>Rate</option>
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
                            <input type="submit" names="Rate" class="ratingSelect" value="Rate">
                        </form>
                    
                        <form action="php\fun\validateSuggest.php" method="GET">
                                <input type="text" name="id" value="'.$row[2].'" hidden>
                                <input type="submit" name="'.$row[2].'" class="suggest" value="Suggest">
                        </form>
            </div>';
        }
          
?>    
                    </div>
            </div>
    </div> <!-- Mbyllja e elementin LIST -->

</main>

</body>
</html>