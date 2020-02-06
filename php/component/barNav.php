<?php 
    echo '
            <nav>
                    <ul>
                        <li><a href="MainPageLogedIn.php#yearBest">This Years Best</a></li>
                        <li><a href="MainPageLogedIn.php#EditorsChoice">Editor\'s Choice</a></li>
                        <li><a href="Ranking.php">Ranking</a></li>';
                        if($_SESSION["userLevel"]==1){
                            echo 
                            '
                            <li><a href="AddMovie.php">Add Movie</a></li>
                            <li><a href="updateToAdmin.php">Update User</a></li>
                            ';
                        }
    echo '
                        <li class="UserLogout"><a href="Login.php">Logout</a></li>
                        <li class="UserLogout"><a href="MyProfile.php">My Profile</a></li>

                    </ul>
            </nav> 
    ';
    
?>