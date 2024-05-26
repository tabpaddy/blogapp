<?php
include('./partials/header.php');
?>

    
    <section class="form__section">
    <div class="container form__selection-container">
        <h2>Add Post</h2>
        <div class="alert__message error">
            <p>this is a success message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" name="" id="" placeholder="Title" required>
            <select name="" id="">
                <option value="1">Travel</option>
                <option value="2">Food</option>
                <option value="3">Music</option>
                <option value="4">Drugs</option>
            </select>
            <textarea name="" id=""  rows="10" placeholder="Body"></textarea>
            <div class="form__control Featured">
                <input type="checkbox" id="is_featured">
                <label for="is_featured" checked>Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Add Post</button>
        </form>
    </div>
</section>



<?php
include '../partials/footer.php';
?>