<?php

require_once './controllers/AdminController.php';

AdminController::logout();

header('location:login');

?>