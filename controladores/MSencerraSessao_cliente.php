<?php

session_start();

session_unset();
session_destroy();

header("location: \TCC_Mestre-Sala\MSlogin_cliente.php");




?>