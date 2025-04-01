<?php
session_start();
session_destroy();
header("Location: latihan6login.php");
exit();
?>