<?php
include_once 'session.php';
$_SESSION['loggedIn']=FALSE;
if(session_destroy())
{
    header("location:index.php");
}
?>