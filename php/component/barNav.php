<?php 
    echo '
            <nav>
                    <ul>
                        <li><a href="MainPageLogedIn.php#yearBest">Home</a></li>
                        <li><a href="Ranking.php">Ranking</a></li>';
                        if($_SESSION["userLevel"]==1){
                            echo 
                            '
                            <li><a href="AddMovie.php">Add Movie</a></li>
                            <li><a href="updateToAdmin.php">Update User</a></li>
                            <li><a href="editMovieList.php">Edit</a></li>
                            ';
                        }
    echo '
                        <li class="UserLogout"><a href="php\fun\LogOut.php">Logout</a></li>
                        <li class="UserLogout"><a href="MyProfile.php">My Profile</a></li>

                    </ul>
            </nav> 
    ';
    
?>