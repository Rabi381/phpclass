<?php require('/xampp/htdocs/rabi/views/partials/head.php') ?>
<?php require('/xampp/htdocs/rabi/views/partials/nav.php') ?>
<?php require('/xampp/htdocs/rabi/views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/rabi/controllers/notes/show.php?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/rabi/controllers/notes/create.php" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>

<?php require('/xampp/htdocs/rabi/views/partials/footer.php') ?>