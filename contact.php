<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'cdn.php'; ?>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/services.css">
    <link rel="stylesheet" href="./styles/media.css">

</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="about-hero">
        <h1 style="color:#343e61;">Contact Us</h1>
        <h1><span id="typewriter"></span></h1>
    </div>

    <?php include 'contact-grid.php'; ?>
    </section>
    <?php include 'cta.php'; ?>
    <section>
        <?php include 'footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="./scripts/swiper.js"></script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>