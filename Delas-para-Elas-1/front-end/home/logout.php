<?php

session_start();
$_SESSION['log']="";
session_destroy();

header('Location:../home-s-log/index.html');




?>