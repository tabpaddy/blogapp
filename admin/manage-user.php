<?php
include('./partials/header.php');

// fetch users from database but not current user
$current_admin_id = $_SESSION['user-id'];

$query = "SELECT * FROM users WHERE NOT id=$current_admin_id";
?>

<section class="dashboard">
<?php if(isset($_SESSION['add-user-success'])): ?>
            <div class="alert__message success container">
                <p>
                    <?= 
                    $_SESSION['add-user-success'];
                    unset($_SESSION['add-user-success']);
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
                <li><a href="manage-user.php" class="active"><i class="uil uil-users-alt"></i>
                <h5>Manage User</h5>
                </a></li>
                <li><a href="add-category.php"><i class="uil uil-edit"></i>
                <h5>Add Category</h5>
                </a></li>
                <li><a href="manage-category.php" ><i class="uil uil-list-ul"></i>
                <h5>Manage Category</h5>
                </a></li>
                <?php endif ?>
            </ul>
        </aside>

        <main>
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ernest achieve</td>
                        <td>achieve</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="Delete-user.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>kingsley achieve</td>
                        <td>kingsley</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="Delete-user.php" class="btn sm danger">Delete</a></td>
                        <td>No</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>

<?php
include '../partials/footer.php';
?>