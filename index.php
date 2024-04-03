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
$dogs = new Category('Dogs', 'fa-solid fa-dog');
$cats = new Category('Cats', 'fa-solid fa-cat');


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
