<?php
session_start();
if($_SESSION['login']!=1){
    header("Location:Login.php");
    die();
}
?>
<html>
<head>
    <title>Profile || Film ODDYSEY </title>
    <link rel="stylesheet" href="css\MainPageLogedIn.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

</head>
<body>
<header>
    <nav>
            <ul>
                <li><a href="MainPageLogedIn.php#yearsBest">This Years best</a></li>
                <li><a href="MainPageLogedIn.php#EditorsChoice">Editor's Choice</a></li>
                <li><a href="Ranking.php">Ranking</a></li>
                <li class="UserLogout"><a href="Login.php">Logout</a></li>
            </ul>
    </nav>   
</header>

<main>
<?php
    echo "<h1 style='text-align:center;'>The profile of the great: ".$_SESSION['username']."</h1>";
?>
<div class="list">
        <!-- Elementi qe duhet perpunuar -->
                    <div class="Element">
                            <img src="img\12AM.jpg" alt="">
                            <div class="Element__nameAndInput">
                                <div>Long Names Problem</div>
                                <form action="validateRanking" method="Get">
                                    <form action="#">
                                    <select class="ratingSelect" name="ratingSelect">
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
                            </div>
                    </div>
</main>
</body>
</html>