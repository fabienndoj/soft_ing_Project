<?php
session_start();
if($_SESSION['login']!=1){
    header("Location:Login.php");
    die();
}
?>
<html>
<head>
    <title> Ranking || Film ODDYSEY</title>
    <link rel="stylesheet" href="css\Ranking.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    

</head>
<body>

    <header>
        <nav>
                <ul>
                    <li><a href="MainPageLogedIn.php#yearsBest">This Years best</a></li>
                    <li><a href="MainPageLogedIn.php#EditorsChoice">Editor's Choice</a></li>
                    <li class="UserLogout"><a href="Login.php">Logout</a></li>
                    <li class="UserLogout"><a href="MyProfile.php">My Profile</a></li>
                </ul>
        </nav>   
    </header>   
    <main>
        <section class="SearchBox">
            <form action="">
                <input type="search" name="rankingSearch" id="rankingSearch" placeholder="Search">  
            <div>
                 <select name="GenreSelection" id="GenreSelection">
                    <option value="" disabled selected>Based on Genre</option>
                    <option value="Animated">Animated</option>
                    <option value="Action">Action</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Comedy">Comedies</option>                        
                    <option value="Crime">Crime</option>
                    <option value="Drama">Dramas</option>
                    <option value="History">Epics</option>
                    <option value="Horror">Horror</option>
                    <option value="MusicalDance">Musical || Dance</option>
                    <option value="Sci-fi">Sci-fi</option>
                    <option value="War">War</option>
                    <option value="Western">Westerns</option>
                </select>
            
            
                <select name="RatingSelection" id="RatingSelection">
                    <option value="" disabled selected>Based on Rating</option>
                    <option value="9+">9+</option>
                    <option value="8+">8+</option>
                    <option value="7+">7+</option>
                    <option value="6+">6+</option>
                    <option value="5+">5+</option>
                    <option value="4+">4+</option>
                    <option value="3+">3+</option>
                    <option value="2+">2+</option>
                    <option value="1+">1+</option>
                </select>
            
            
                <select name="" id="">
                    <option value="" disabled selected>List based on:</option>
                    <option value="Alphabetical">Alphabetical</option>
                    <option value="Year">Year</option>
                    <option value="Suggest">Suggest</option>
                </select>
            </div>
               
            
            <input type="submit" value="Search" id="searchButton">  
            </form>
                
    </section>
    <div class="list">
            <!-- Elementi qe duhet perpunuar -->
            <div class="Element">
                    <a href="#"><img src="img\12AM.jpg" alt=""></a>
                    <div class="Element__nameAndInput">
                        <div>Long Names Problem</div>
                        <form action="">
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
                            <input type="submit" names="Rate" class="ratingSelect" value="Rate">
                        </form>
                        <form action="">
                                <input type="submit" name="suggest" class="suggest" value="Suggest">
                        </form>    
                    </div>
                    
            </div> <!--Mbyllja e ELEMENTIT-->
            <div class="Element">
                    <a href="#"><img src="img\12AM.jpg" alt=""></a>
                    <div class="Element__nameAndInput">
                        <div>Long Names Problem</div>
                        <form action="">
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
                            <input type="submit" names="Rate" class="ratingSelect" value="Rate">
                        </form>
                        <form action="">
                                <input type="submit" name="suggest" class="suggest" value="Suggest">
                        </form>    
                    </div>
                    
            </div> <!--Mbyllja e ELEMENTIT-->
            <div class="Element">
                    <a href="#"><img src="img\12AM.jpg" alt=""></a>
                    <div class="Element__nameAndInput">
                        <div>Long Names Problem</div>
                        <form action="">
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
                            <input type="submit" names="Rate" class="ratingSelect" value="Rate">
                        </form>
                        <form action="">
                                <input type="submit" name="suggest" class="suggest" value="Suggest">
                        </form>    
                    </div>
                    
            </div> <!--Mbyllja e ELEMENTIT-->
    </div> <!-- Mbyllja e elementin LIST -->
    </main>
</body>
</html>