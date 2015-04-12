<?php

session_start();

if (!isset($_SESSION['nombre'])){
    echo 0;
} else echo 1;
