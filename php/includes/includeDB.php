<?php
$connection=mysqli_connect("localhost","root","");
if (!$connection)
        die("Could not connect");
$connectDB=mysqli_select_DB($connection,"detyre_kursi");
if(!$connectDB)echo mysqli_error($connection);

?>