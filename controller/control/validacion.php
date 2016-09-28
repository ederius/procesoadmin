<?php
session_start();
if($_SESSION['valido']!=1)
{
    header("location:http://localhost/procesoadmin/");
    exit;
}
?>