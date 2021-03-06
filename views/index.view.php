<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/780d1b883d.js" crossorigin="anonymous"></script>

</head>
<body>

    <?php require 'navbar.view.php' ?>

    <header>
        <div class="container">
            <h1 class="title">Galería de Imagenes</h1>
        </div>
    </header>

    <section class="photos">
        <div class="container">
            <?php foreach($photos as $photo): ?>

                <div class="thumb">
                    <a href="<?php echo 'photo.php?id=' . $photo['id']; ?>">
                        <img src="<?php echo $photo['photo'] ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="pagination">
                <?php if($current_page > 1): ?>
                    <a href="<?php echo 'index.php?page=' . $current_page - 1 ?>" class="left"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
                <?php endif; ?>

                <?php if($pages_number != $current_page): ?>
                    <a href="<?php echo 'index.php?page=' . $current_page + 1 ?>" class="right">Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif; ?>

            </div>

        </div>
    </section>

    <footer>
        <p class="copyright">Galería creada por Angel Aguirre</p>
    </footer>

</body>
</html>