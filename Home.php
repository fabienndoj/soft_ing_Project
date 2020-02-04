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
                <li><section>Please Login</section></li>
                <li class="UserLogout"><a href="Login.php">Login</a></li>
            </ul>
    </nav>   
</header>
<!-- <section>Please Login or create a new account if you don't have an existing one</section> -->
<main>
    <!-- ******Year Best Section********** -->
        <div class="section__Header">Random</div>
            <!-- Year Best Grid -->
        <div class="list">
<!-- Elementi qe duhet perpunuar -->
<?php
include("php\includes\includeDB.php");
$query="SELECT moviePoster,movieName FROM movie ORDER BY rand() LIMIT 6";
$result=mysqli_query($connection,$query);

while($row=mysqli_fetch_array($result)){


    echo '  <div class="Element">
                    <img src="data:image/jpeg;base64,'.base64_encode($row[0]).'" />
                    <div class="Element__nameAndInput">
                        <div id="'.$row[1].'">'.$row[1].'</div>   
                    </div>
            </div>';
        }
          
?>
            
    