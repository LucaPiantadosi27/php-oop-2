<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). 
-->




<?php include 'products_data.php'; ?>




<!doctype html>
<html lang="en">
    <head>
        <title>esercizio php-oop2</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    </head>

    <body>
        <header class=" bg-light rounded-3  text-green p-3 d-flex">
           
        <div class="logo-circle  ">
            <img src="./img/pupa.jpg" alt="Logo">
        </div>

            <div class="container w-50 ">

                <h1>PuP Shop-Online</h1>
            </div>

            <div class="container w-25 " >
            <ul class="header-icons list-unstyled mb-0 ml-auto w-80">
                <i class="fa-solid fa-angle-down"></i>
                <li><i class="fas fa-shopping-cart"></i></li>  
                <i class="fa-solid fa-angle-down"></i>
                <li><i class="fas fa-heart"></i></li>
                <i class="fa-solid fa-angle-down"></i>
                <li><i class="fas fa-user"></i></li>
            </ul>
            </div>
        </header>
       
    <main>
    <div class="container w-80 mb-3">
    <h3 class="mt-4 mb-2 text-green ">Prodotti per animali</h3>
    <div class="row">
        <?php foreach($products as $product) : ?>
            <?php foreach($product as $index => $prod) : ?>
                <div class="card bg-gradient mb-2 " style="width: 18rem;">
                    <img src="<?= $prod->img; ?>" class="card-img-top" alt="Immagine di <?= $prod->name; ?>">
                    <div class="card-body p-2 border-secondary ">
                        <h5 class="card-title text-success"><?= $prod->name; ?></h5>
                        <p class="card-text">Prezzo: € <?= number_format($prod->price, 2); ?></p>
                        <p class="card-text">Categoria: <i class="<?= $prod->animal[$index % count($prod->animal)]->icon; ?>"></i></p>
                        <p class="card-text text-danger">Tipo di prodotto: <?= $prod->prodType; ?></p>
                        <a href="#" class="btn ">Acquista</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</div>


<style>
        .logo-circle {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            overflow: hidden;
            margin-left: 15px;
            border: solid green;
        }

        .logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-icons li {
            margin-top:10px ;
            display: inline-block;
            margin-right: 10px;
            color: green;
            cursor: pointer;
        }

        .btn{
            background-color: lightgreen;
            border: solid 1px green;
        }
    
        body{
            background-color: rgb(144, 238, 144);
        }

    </style>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>