<?php
include('./partials/header.php');
?>

    
    <section class="form__section">
    <div class="container form__selection-container">
        <h2>Edit Category</h2>
        <form action="<?ROOT_URL?>admin/edit-category-logic.php" method="post">
            <input type="text" name="title" id="" placeholder="Title" required>
            <textarea name="description" id="" cols="30" rows="4" placeholder="Description"></textarea>
            <button type="submit" class="btn" name="submit">Update Category</button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>