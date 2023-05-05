<?php
require_once './my_db.php';
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog&Cat</title>
    <link rel="shortcut icon" href="./img/paw-icon.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/df25a5e9aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="text-center mt-5">
        <h1>Tutto quello che serve per i tuoi animali!!</h1>
    </header>
    <main>
        <section class="pt-3 d-flex gap-2 px-2">
            <?php foreach ($prodotti as $prodotto) {
            ?>
                <div class="card m-auto" style="width: 18rem;">
                    <img src="<?= $prodotto->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $prodotto->nome ?></h5>
                        <span class="card-text"><?= $prodotto->prezzo ?>€</span>
                        <div class="text-center"><i class="<?= $prodotto->categoria->icona ?>"></i></div>
                    </div>
                    <button type="button" class="btn btn-outline-success">Compra ora</button>
                </div>
            <?php } ?>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>