<?php
include_once "config/core.php";

$page_title="Index";
$require_title=true;
include_once "login_checker.php";

include_once "layout_head.php";

echo"<div class='col-md-12'>";

   // prevent undefined index
   $action = isset($_get['action']) ? $_GET['action'] : "";
    //if login succeessful
    if($action=='login_success'){
        echo"<div class='alert alert-info'>";
            echo "<strong>Hi ". $_SESSION['firstname'] . ", Welcome Back!</strong>";
        echo "</div>"; 
    }

    //if useris already is logged in
    else if($action=='already_logged_in'){
        echo"<div class='alert alert-info'>";
            echo "<strong>You are already logged in.</strong>";
        echo "</div>"; 
    }
    //once logged in than 
    echo "<div class='alert alert-info'>";
         echo "Content when logged in";
    echo "</div>";
echo"</div>";

//footer file
include 'layout_head.php';
?>