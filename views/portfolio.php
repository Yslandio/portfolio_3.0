<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include(ROOT_DIR . '/views/partials/head.php'); ?>
    <title>Portifólio</title>
    <link rel="stylesheet" href="<?= BASE_URL . '/public/css/menu.css' ?>">
</head>

<body>
    <?php include(ROOT_DIR . '/views/components/menu.php'); ?>

    <section id="home" class="container menu-content">
        <?php include(ROOT_DIR . '/views/components/home.php'); ?>
    </section>

    <section id="about" class="container menu-content">
        <?php include(ROOT_DIR . '/views/components/about.php'); ?>
    </section>

    <section id="projects" class="container menu-content">
        <?php include(ROOT_DIR . '/views/components/projects.php'); ?>
    </section>

    <section id="contact" class="container menu-content">
        <?php include(ROOT_DIR . '/views/components/contact.php'); ?>
    </section>



    <script src="<?= BASE_URL . '/public/js/menu.js' ?>"></script>
</body>

</html>
