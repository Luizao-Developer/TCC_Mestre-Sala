<?php

session_start();

session_unset();
session_destroy();
unset($_SESSION['CodigoBarbearia']);

header("location: ../view_barbearia/MSlogin_barbearia.php");




?>