<?php 
$number = 1;
if (!defined('SECURE_ACCESS')){
    die('Direct access not pemitted');
}
include('templates/header.php') ?>

<div class="main-content bg-white">  
    <section class="container my-5">
    <h3 class="text-center text-primary mb-4">Search Book Dynand Library</h3>
    <center><div class="login-body login-body-2 p-4">
        <form action="" class="d-flex justify-content-between align-items-center">
            <input 
            type="text" 
            class="form-control" 
            placeholder="Cari Buku"
            name="sesrch"
            required
            />
            <button class="btn btn-sm btn-primary mx-3">Search</button>
        </form>
</div> 
</center>

    <div class="table table-responsive my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>no</th>
                    <th>title</th>
                    <th>author</th>
                    <th>years</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $book) : ?>
                <tr>
                    <th><?=$number ++ ?></th>
                    <th><?=$book->getTitle() ?></th>
                    <th><?=$book->getAuthor() ?></th>
                    <th><?=$book->getYear() ?></th>
                </tr>
                <?php endforeach?>
            </tbody>

        </table>    
            <div class="d-flex justify-content-center">
                        <div class="my-4">
                            <a href="/">Back to Home</a>
                        </div>
                    </div>
                </div>

                <div class="footer bg-dark text-white text-center">
            <p>Copyright© <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Dynand Library</span></p>
        </div>
    </div>

<?php include('templates/footer.php') ?>