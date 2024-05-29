<?php
require 'config/database.php';

if(isset($_POST['submit'])){
    //get updated form data
    $id = filter_var($_POST['user_id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $userrole = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);

    // check for valid input
    if(!$firstname || !$lastname) {
        $_SESSION['edit-user'] = "Invalid Form Input";
    }else{
        //update user
        $query = "UPDATE users SET firstname='$firstname', lastname='$lastname', is_admin=$userrole WHERE user_id=$id LIMIT 1";
        $result = mysqli_query($con, $query);

        if(mysqli_errno($con)){
            $_SESSION['edit-user'] = "Failed to update user.";
        }else{
            $_SESSION['edit-user-success']= "User $firstname $lastname updated successfully";
        }
    }

}

header('location: ' . ROOT_URL . 'admin/manage-user.php');
die();