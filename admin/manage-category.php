<?php
include('./partials/header.php');

// fetch categories from database
$query = "SELECT * FROM categories ORDER BY title";
$result = mysqli_query($con, $query);
?>

<section class="dashboard">
<?php if(isset($_SESSION['add-category-success'])): // show if delete user was successful?>
            <div class="alert__message success container">
                <p>
                    <?= 
                    $_SESSION['add-category-success'];
                    unset($_SESSION['add-category-success']);
                    ?>
                </p>
        </div>
<?php elseif(isset($_SESSION['add-category'])): // show if edit user was not successful?>
            <div class="alert__message error container">
                <p>
                    <?= 
                    $_SESSION['add-category'];
                    unset($_SESSION['add-category']);
                    ?>
                </p>
        </div>
        <?php endif ?>
    <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
        <aside>
            <ul>
                <li><a href="add-post.php"><i class="uil uil-pen"></i>
                <h5>Add Post</h5>
                </a></li>
                <li><a href="index.php"><i class="uil uil-postcard"></i>
                <h5>Manage Post</h5>
                </a></li>
                <?php if(isset($_SESSION['user_is_admin'])): ?>
                <li><a href="add-user.php"><i class="uil uil-user-plus"></i>
                <h5>Add User</h5>
                </a></li>
                <li><a href="manage-user.php"><i class="uil uil-users-alt"></i>
                <h5>Manage User</h5>
                </a></li>
                <li><a href="add-category.php"><i class="uil uil-edit"></i>
                <h5>Add Category</h5>
                </a></li>
                <li><a href="manage-category.php" class="active"><i class="uil uil-list-ul"></i>
                <h5>Manage Category</h5>
                </a></li>
                <?php endif ?>
            </ul>
        </aside>

        <main>
            <h2>Manage Categories</h2>
            <?php if(mysqli_num_rows($result) > 0):?>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($category = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $category['title']?></td>
                        <td><a href="<?= ROOT_URL ?>admin/edit-category.php?id=<?= $category['id'] ?>" class="btn sm">Edit</a></td>
                        <td><a href="<?= ROOT_URL ?>admin/Delete-category.php?id=<?= $category['id'] ?> " class="btn sm danger">Delete</a></td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
            <?php else : ?>
                <div class="alert__message error"><?= "No categories found" ?></div>
                <?php endif ?>
        </main>
    </div>
</section>

<?php
include '../partials/footer.php';
?>