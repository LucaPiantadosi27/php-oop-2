<?php

// Definizione della classe Category
class Category {
    public function __construct(public string $name, public string $icon) 
    {
        $this->name = $name;
        $this->icon = $icon;
    }
}

// Definizione della classe Product
class Product {
    public function __construct(public int $id, public string $name, public array $categories, public string $prodType, public string $img, public float $price) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->categories = $categories; 
        $this->prodType = $prodType;
        $this->img = $img; 
        $this->price = $price;
    }
}

// Definizione delle classi specifiche che ereditano da Product
class Toy extends Product { }
class Food extends Product { }
class Kennel extends Product { }

// Creazione delle istanze di Category
$cats = new Category('Cats', 'fa-solid fa-cat');
$dogs = new Category('Dogs', 'fa-solid fa-dog');

$category = [$cats, $dogs];

// Creazione degli array di prodotti
$foods = [
    new Food(1, 'Crocchette vegetali', $category, 'Cibo', 'https://picsum.photos/200/300', 10.00),
    new Food(2, 'Crocchete secchi', $category, 'Cibo', 'https://picsum.photos/200/300', 5.00) 
];

$kennels = [
    new Kennel(1, 'Cuccia esterna', $category, 'Cucce', 'https://picsum.photos/200/300', 14.50),
    new Kennel(2, 'Cuccia da interno', $category, 'Cucce', 'https://picsum.photos/200/300', 45.00),
    new Kennel(3, 'Cuccia in legno', $category, 'Cucce', 'https://picsum.photos/200/300', 65.50)
];

$toys = [
    new Toy(1, 'Bistecca di gomma', $category, 'Giochi', 'https://picsum.photos/200/300', 9.60),
    new Toy(2, 'Pallina da tennis', $category, 'Giochi', 'https://picsum.photos/200/300', 5.60),
    new Toy(3, 'Osso di plastica', $category, 'Giochi', 'https://picsum.photos/200/300', 10.50),
];

// Raggruppamento degli array di prodotti
$products = [
    $foods,
    $kennels,
    $toys
];

?>
