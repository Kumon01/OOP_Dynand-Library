<?php
$number1 = 1;
$number = 1;

if (!defined('SECURE_ACCESS')) {
    die('DIRECT IS NOT PERMITTED');
}
include('templates/header.php') ?>

<div class="main-content bg-light py-5">
    <div class="container">
        <h1 class="text-center text-primary mb-4">Dynand Library</h1>
        <h1 class="text-center text-primary mb-4">PEMINJAMAN</h1>

        <form action="/peminjaman" method="POST" class="p-4 shadow rounded bg-white">
            <div class="mb-3">
                <label for="book_id" class="form-label">Pilih Buku</label>
                <select name="book_id" id="book_id" class="form-select" aria-label="Pilih Buku">
                    <option value="">Pilih Buku</option>
                    <?php foreach ($data as $book) : ?>
                        <option value="<?= $book->getId() ?>"><?= $book->getTitle() ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="user_id" class="form-label">Pilih Member</label>
                <select name="user_id" id="user_id" class="form-select" aria-label="Pilih Member">
                    <option value="">Pilih Member</option>
                    <?php foreach ($data2 as $member) : ?>
                        <option value="<?= $member->getId() ?>"><?= $member->getName() ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="borrow_date" class="form-label">Tanggal Peminjaman</label>
                <input type="date" name="borrow_date" id="borrow_date" class="form-control" value="<?= date('Y-m-d') ?>">
            </div>

            <div class="mb-3">
                <label for="return_date" class="form-label">Tanggal Pengembalian</label>
                <input type="date" name="return_date" id="return_date" class="form-control">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary w-50">Pinjam</button>
            </div>
        </form>

        <div class="container mt-5">
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger text-center">
                    <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif ?>

            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success text-center">
                    <?= $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif ?>
        </div>

        <h5 class="mt-5 text-secondary text-uppercase">Buku yang Sedang Dipinjam</h5>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
                <thead class="table-info">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tanggal Pinjam</th>
                        <th>Pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data3 as $list) : ?>
                        <tr>
                            <td><?= $number++ ?></td>
                            <td><?= $list->getTitle() ?></td>
                            <td><?= $list->getAuthor() ?></td>
                            <td><?= $list->getBorrow() ?></td>
                            <td><?= $list->getReturn() ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a href="/" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</div>

<div class="footer bg-dark text-white text-center">
            <p>Copyright© <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Dynand Library</span></p>
        </div>

<?php include('templates/footer.php') ?>
