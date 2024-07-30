<?php require('/xampp/htdocs/rabi/views/partials/head.php') ?>
<?php require('/xampp/htdocs/rabi/views/partials/nav.php') ?>
<?php require('/xampp/htdocs/rabi/views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/rabi/controllers/notes/index.php" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($note['body']) ?></p>
    </div>
</main>

<?php require('/xampp/htdocs/rabi/views/partials/footer.php') ?>
