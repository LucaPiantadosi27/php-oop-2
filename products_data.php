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
    new Food( 1, 'Crocchette vegetali', $category, 'Cibo', 'https://picsum.photos/200/300', 10.00),
    new Food( 2, 'Crocchete secchi', $category, 'Cibo', 'https://picsum.photos/200/300', 5.00) 
    

];

$kennels = [
    new kennel( 1, 'Cuccia esterna', $category, 'Cucce', 'https://picsum.photos/200/300', 14.50),
    new kennel( 2, 'Cuccia da interno', $category, 'Cucce', 'https://picsum.photos/200/300', 45.00),
    new kennel( 3, 'Cuccia in legno', $category, 'Cucce', 'https://picsum.photos/200/300', 65.50)
    ];

$toys = [
    new Toy( 1, 'Bistecca di gomma', $category, 'Giochi', 'https://picsum.photos/200/300', 9.60),
    new Toy( 2, 'Pallina da tennis', $category, 'Giochi', 'https://picsum.photos/200/300', 5.60),
    new Toy( 2, 'Osso di plastica', $category, 'Giochi', 'https://picsum.photos/200/300', 10.50),
];

//var_dump($products);

// Raggruppamento degli array
$products = [
    $foods,
    $kennels,
    $toys
]

?>