<?php

session_start();

if (!($_SESSION['user_id'])){
    header("Location:sign-in.php");
}