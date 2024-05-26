<?php
include('./partials/header.php');
?>

    
    <section class="form__section">
    <div class="container form__selection-container">
        <h2>Edits User</h2>
        
        <form action="" enctype="multipart/form-data">
            <input type="text" name="" id="" placeholder="First Name" required>
            <input type="text" name="" id="" placeholder="Last Name" required>
            
            <input type="email" name="" id="" placeholder="Email" required>
            <input type="password" name="" id="" placeholder="Create Password" required>
            <input type="password" name="" id="" placeholder="Confirm Password" required>
            <select name="" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" id="avatar">
            </div>
            <button type="submit" class="btn">Update User</button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>