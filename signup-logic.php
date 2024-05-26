<?php

require 'config/database.php';

// get signup form data if sign p button is click.
if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    //validate input values
    if(!$firstname){
        $_SESSION['signup'] = "Please enter your First Name";
    }elseif(!$lastname){
        $_SESSION['signup'] = "Please enter your Last Name";
    }elseif(!$username){
        $_SESSION['signup'] = "Please enter your Username";
    }elseif(!$email){
        $_SESSION['email'] = "Please enter your Email";
    }elseif(strlen($password) < 8 || strlen($cpassword) > 8){
        $_SESSION['signup'] = "Password should be 8+ character";
    }elseif(!$avatar['name']){
        $_SESSION['signup'] = "Please add avatar";
    }else{
        //check if password do not match
        if($password !== $cpassword){
            $_SESSION['signup']="Password do not match";
        }else{
            // hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        }

    }
}else{
    //if button wasn't clicked bounce back to signup page
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}
