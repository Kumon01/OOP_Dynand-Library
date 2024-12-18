<?php
$number = 1;
if (!defined('SECURE_ACCESS')) {
    die('DIRECT IS NOT PERMITTED');
}
// echo isset($_SESSION['is_login']);
// var_dump(isset($_SESSION['is_login']));
if (isset($_SESSION['is_login']) == false) {
    header('location: /login');
}
include('templates/header.php');
include('config/database.php')
?>

<div class="main-content bg-white">
    <section class="container my-5">
        <h3 class="text-center text-primary mb-4">Dynand Library</h3>
        <h3 class="text-center text-primary mb-4">Member</h3>
        <a href="/register">

            <button class="btn btn-sm btn-primary mx-3">Add Membership</button>
        </a>
        <div class="table table-responsiven my-4">
            <table class="table">
                <thead class="table-info">
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $pdo->query("SELECT * FROM users WHERE role_id = 2");
                    $members = $query->fetchAll(PDO::FETCH_OBJ);
                    $number = 1;
                    foreach ($members as $member) {
                        echo "<tr>
                        <td>{$number}</td>
                        <td>{$member->name}</td>
                        <td>{$member->username}</td>
                        <td>Member</td>
                        <td>
                            <a href='/membership?delete={$member->id}' class='fa fa-trash'></a> 
                        </td>
                    </tr>";
                        $number++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            <div class="my-4">
                <a href="/">Back to Home</a>
            </div>
        </div>

        <div class="footer bg-dark text-white text-center">
            <p>Copyright© <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Dynand Library</span></p>
        </div>
    </section>
</div>




<?php include('templates/footer.php') ?>