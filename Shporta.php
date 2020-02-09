<?php
include("php\includes\includeSession.php");
include("php\includes\includeDB.php");
if($_SESSION['userLevel']==1){
    header("Location:MainPageLogedIn.php");
}
if(!$_SESSION['login']=1){
    header("Location:MainPageLogedIn.php");
}
?>
<html>
<head>
    <title>Film ODDYSEY</title>
    <link rel="stylesheet" href="css\Shporta.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<header>
<?php 
    include("php\component\barNav.php");
?>   
</header>
<div class="section__Header">Shporta to Watch</div>
<form action="php\fun\shportePerfundo.php" method="GET" class="table--position">
<?php
        echo "<table border=1>";
        for($start=0;$start<count($_SESSION['shporta']);$start++){
            $queryMovieName="SELECT * FROM movie WHERE movieId=".$_SESSION['shporta'][$start];
            $resultShporta=mysqli_query($connection,$queryMovieName);
            while($row=mysqli_fetch_assoc($resultShporta)){
                echo '<tr><td class="table__Poster"><a href="Movie.php?movieAppear=Appear&movieId='.$row['movieId'].'"><img src="data:image/jpeg;base64,'.base64_encode($row['moviePoster']).'" /></a></td><td>'.$row["movieName"].'<td>Shto<input type="checkbox" name="shto[]" value="'.$row['movieId'].'"></td>';          
                }
            }
        echo "</table>";
    ?> 
    <div>
        <input type="submit" value="Perfundo" name="shportaPerfundim" class="shportaPerfundim">  
    </div>
   
</form>

</body>
</html>