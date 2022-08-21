<?php
session_start();
echo "logout successfull";
session_destroy();
header("location: index.php");
?>