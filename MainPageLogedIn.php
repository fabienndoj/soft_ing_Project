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
            </div>
    </div> <!-- Mbyllja e elementin LIST -->

    </section> <!-- Year Best Section End -->

    <!-- ******Editors Choice Section********** -->
    <section class="EditorsChoice" id="EditorsChoice">
        <div class="section__Header">Editor's Choice</div>
        <div class="list">
            <!-- EditorsChoice Grid -->
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
                </div>
            </div>
    </section>

</main>

</body>
</html>