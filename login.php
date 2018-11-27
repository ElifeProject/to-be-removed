<?php
include_once "config/core.php";

$page_title = "Login";
//include login cheker
$require_login =false;
include_once "login_checker.php";
//default  to false
$access_denied=false;

//<!-- Post Content -->
if($_POST){
    //email checks
    include_once "config/database.php";
    include_once "object/user.php";
    //email check
    $database = new Database();
    $db = $database->getConnection();

    //initializing object
    $user = new User($db);
    //check email $ password exist in database

    $user->email =$_POST['email'];
    $email_exists = $user->emailExists();

    //login validations
    if($email_exists && password_verify($_POST['password'] , $user->password) && $user->status==1 ){
        //if than set session
        $_SESSION['logged_in'] = true ;
        $_SESSION['user_id'] = $user->id ;
        $_SESSION['access_level'] = $user->access_level;
        $_SESSION['lastname'] = htmlspecialchars($user->firstname, ENT_QUOTES,'UTF-08');
        $_SESSION['lastname'] = $user->lastname;

        //if access-level ==admin than redirest to admin
        if($user->access_level =='Admin'){
            header("Location : {$home_url}admin/index.php?action = login_success");
        }
        //redirect to user section
        else{
             header("Location : {$home_url}index.php?action=login_success");
        }
    }
    //if username doesnot exist or password is wrong
    else{
        $access_denied =true;
    }
   
}

//form
include_once "layout_head.php";
echo"<div class='col-md-8 col-sm-12'>";

//alert messages
//when user tries to access a page where login is required ,it will generate a "please login" action that will used to show "please login to access this page" message

    $action =isset($_GET['action']) ? $_GET['action'] : "";

     //tell the user he is not yet logged in-->
     if($action == 'not_yet_logged_in'){
        echo "<div class='alert alert_danger margin-top-40' role='alert'>Please Login.</div>";
     }
     //tell user to be login
    else if($action =='please_login'){
        echo "<div class='alert alert-info'>
           <strong>Please login to access that page.</strong>
          </div>";
    }
    //<!--tell the user if denied-->
    if($access_denied){
         echo "<div class='alert alert_danger margin-top-40' role='alert'>
            Access Denied.<br/><br/>
            Your username or password maybe incorrect
            </div>";
    }


    echo"<form action='".htmlspecialchars($_SERVER["PHP_SELF"]) ."' method='post'>";
            echo"<div class='form-group'>";
                echo"<label for='name'><div class='font-clr'>Email:</div></label>";
                echo"<input type='text' class='form-control' id='' placeholder='Enter email' name='email' required autofocus>";
            echo"</div>";
            echo"<div class='form-group'>";
                echo"<label for='password'><div class='font-clr'>Password:</div></label>";
                echo"<input type='password' class='form-control' id='' placeholder='Enter Password' name='password' required>";
            echo"</div>";
            echo"<br>";
            echo"<button name='submit' type='submit' class='btn btn-default'>Log In</button>";
            echo"</form>";
            echo"<br>";
            echo"<h4 class='font-clr'>Don't have an account yet. <a href='SignUp.php'><h4 class='font-clr'>Sign Up!</h4></a></h4>";
        echo"</div>";
    echo"</div>";
echo"</div>";
 ///form end

 ///footer
 include_once "layout_foot.php";  
?>
        