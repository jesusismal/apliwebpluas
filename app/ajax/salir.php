<?php
session_start();
session_destroy();

header('location: http://localhost/sgsp/app/inicio/login.php');