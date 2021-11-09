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
    <header>
        <div class="container">
            <h1 class="title"><?php echo $photo['title'] ?></h1>
        </div>
    </header>

    <div class="container">
        <div class="photo">
            <img src="<?php echo $photo['photo'] ?>" alt="">
            <p class="text"><?php echo $photo['description'] ?></p>
            <a href="index.php" class="back"><i class="fa fa-long-arrow-left"></i> Regresar</a>
        </div>
    </div>

    <footer>
        <p class="copyright">Galería creada por Angel Aguirre</p>
    </footer>

</body>
</html>