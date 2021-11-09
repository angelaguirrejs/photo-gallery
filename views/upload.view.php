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
            <h1 class="title">Subir fotos</h1>
        </div>
    </header>

    <div class="container">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" class="form">
            <label for="photo">Selecciona la foto</label>
            <input type="file" id="photo" name="photo" require>

            <label for="title">Título de la foto</label>
            <input type="text" id="title" name="title"  placeholder="Título" require>

            <label for="text">Descripción</label>
            <textarea name="description" id="text" cols="30" rows="10" placeholder="Descripción" require></textarea>

            <?php if(isset($errors)): ?>
                <p class="error"><?php echo $errors ?></p>
            <?php endif ?>

            <input type="submit" class="submit" value="Subir foto">
        </form>
    </div>

    <footer>
        <p class="copyright">Galería creada por Angel Aguirre</p>
    </footer>

</body>
</html>