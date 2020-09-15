<!DOCTYPE html>
<html lang="en">
<?= $this->include('includes\head') ?>
<body class="d-flex flex-column">
    <?= $this->include('includes\navbar') ?>
    <main class="container py-5">
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->include('includes\footer') ?>
    <?= $this->include('includes\script') ?>
</body>
</html>