<?php
include ('config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- icon scout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    
    <section class="form__section">
    <div class="container form__selection-container">
        <h2>Sign Up</h2>
        <div class="alert__message error">
            <p>this is an error message</p>
        </div>
        <form action="<?=ROOT_URL?>signup-logic.php" enctype="multipart/form-data" method="post">
            <input type="text" name="firstname" id="" placeholder="First Name" required>
            <input type="text" name="lastname" id="" placeholder="Last Name" required>
            <input type="text" name="username" id="" placeholder="Username" required>
            <input type="email" name="email" id="" placeholder="Email" required>
            <input type="password" name="password" id="" placeholder="Create Password" required>
            <input type="password" name="cpassword" id="" placeholder="Confirm Password" required>
            <div class="form__control">
                <label for="avatar">Avatar</label>
                <input type="file" name="avatar" id="avatar" required>
            </div>
            <button type="submit" class="btn" name="submit">Sign Up</button>
            <small>Already have an account? <a href="<?=ROOT_URL?>signing.php">Sign In</a></small>
        </form>
    </div>
</section>




<script src="js/main.js"></script>
</body>
</html>