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
                <li><a href="Ranking.html">Ranking</a></li>
                <li class="UserLogout"><a href="Login.html">Logout</a></li>
                <li class="UserLogout"><a href="MyProfile.html">My Profile</a></li>
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
<?php 
include("php\includes\includeDB.php");
$query="SELECT moviePoster,movieName FROM movie ORDER BY rand() LIMIT 10";
$result=mysqli_query($connection,$query);

while($row=mysqli_fetch_array($result)){


    echo '  <div class="Element">
                    <img src="data:image/jpeg;base64,'.base64_encode($row[0]).'" />
                    <div class="Element__nameAndInput">
                        <div id="'.$row[1].'">'.$row[1].'</div>
                        <form action="#">
                            <form action="#">
                            <select class="ratingSelect">
                                <option value="" disable selected>Rate</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">6</option>
                                <option value="">8</option>
                                <option value="">9</option>
                                <option value="">10</option>
                            </select>
                        </form>
                        <form action="">
                            <button name="suggest" class="suggest">Suggest</button>
                        </form>    
                    </div>
            </div>';
        }
          
?>
    </div>
    </section>

</main>

</body>
</html>