<?php
include("..\includes\includeSession.php");
$_SESSION=array();
unset($_SESSION);
header("Location:..\..\Login.php");
?>