<?php

session_start();

session_unset();
session_destroy();

header("location: ../view_barbearia/MSlogin_barbearia.php");




?>