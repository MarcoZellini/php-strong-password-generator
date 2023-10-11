<?php
include_once __DIR__ . '/partials/head.php';
session_start();
?>

<?php if (isset($_SESSION['password'])) : ?>

    <div class="result text-center">
        <h2>Your new password is:</h2>
        <h3 class="text-danger fw-bold py-3"><?= $_SESSION['password'] ?></h3>
    </div>

<?php endif; ?>

<?php
include_once __DIR__ . '/partials/footer.php';
session_destroy();
?>