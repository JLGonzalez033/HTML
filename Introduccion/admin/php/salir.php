<?php
session_star();
//unset($_SESSION['userData']);
session_destroy();
header("Location: ../login.php");

?>