<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). 
-->


<?php

// definizioni classi + function
class Toy { 

    public function __construct(public int $id, public string $name, public array $animal, public string $prodType, public string $img, public float $price) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->animal = $animal; 
        $this->prodType = $prodType;
        $this->img = $img; 
        $this->price = $price;
    }
};

// Costruttore della classe Food
class Food { 

    public function __construct(public int $id, public string $name, public array $animal, public string $prodType, public string $img, public float $price) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->animal = $animal; 
        $this->prodType = $prodType;
        $this->img = $img; 
        $this->price = $price;
    }
};

class kennel { 

    public function __construct(public int $id, public string $name, public array $animal, public string $prodType, public string $img, public float $price) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->animal = $animal; 
        $this->prodType = $prodType;
        $this->img = $img; 
        $this->price = $price;
    }
};

class Category {
    public function __construct(public string $name, public string $icon) 
    {
        $this->name = $name;
        $this->icon = $icon;
    }
};
// Creazione delle istanze

$cats = new Category('Cats', 'fa-solid fa-cat');
$dogs = new Category('Dogs', 'fa-solid fa-dog');

$category = [$cats, $dogs];


// arrays
$foods = [
    new Food( 1, 'Crocchette vegetali', $category, 'Cibo', 'https://picsum.photos/200/300/?blur', 10.00),
    new Food( 2, 'Crocchete secchi', $category, 'Cibo', 'https://picsum.photos/200/300/?blur', 5.00) 
    

];

$kennels = [
    new kennel( 1, 'Cuccia esterna', $category, 'Cucce', 'https://picsum.photos/200/300/?blur', 14.50),
    new kennel( 2, 'Cuccia da interno', $category, 'Cucce', 'https://picsum.photos/200/300/?blur', 45.00),
    new kennel( 3, 'Cuccia in legno', $category, 'Cucce', 'https://picsum.photos/200/300/?blur', 65.50)
    ];

$toys = [
    new Toy( 1, 'Bistecca di gomma', $category, 'Giochi', 'https://picsum.photos/200/300/?blur', 9.60),
    new Toy( 2, 'Pallina da tennis', $category, 'Giochi', 'https://picsum.photos/200/300/?blur', 5.60),
    new Toy( 2, 'Osso di plastica', $category, 'Giochi', 'https://picsum.photos/200/300/?blur', 10.50),
];

//var_dump($products);

// Raggruppamento degli array
$products = [
    $foods,
    $kennels,
    $toys
]

?>

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
        <header class="bg-primary text-white p-3  ">
           
            <div class="container w-80 ">
                <h1>PuP Shop-Online</h1>
            </div>
            
        </header>
       
    <main>
    <div class="container w-80 mb-3">
    <h1 class="mt-4 mb-2">Prodotti per animali</h1>
    <div class="row">
        <?php foreach($products as $product) : ?>
            <?php foreach($product as $index => $prod) : ?>
                <div class="card mb-2" style="width: 18rem;">
                    <img src="<?= $prod->img; ?>" class="card-img-top" alt="Immagine di <?= $prod->name; ?>">
                    <div class="card-body p-2 border-secondary ">
                        <h5 class="card-title text-success"><?= $prod->name; ?></h5>
                        <p class="card-text">Prezzo: € <?= number_format($prod->price, 2); ?></p>
                        <p class="card-text">Categoria: <i class="<?= $prod->animal[$index % count($prod->animal)]->icon; ?>"></i></p>
                        <p class="card-text text-danger">Tipo di prodotto: <?= $prod->prodType; ?></p>
                        <a href="#" class="btn btn-primary">Acquista</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>