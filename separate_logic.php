<?php
$books = [
    [
        'name' => 'The 5AM Club',
        'author' => 'Robin Sharma',
        'releaseYear'=> '2018',
        'purchaseUrl'=> 'https://www.amazon.com/AM-Club-Morning-Elevate-Life/dp/1443456624'
    ],

    [
        'name' => 'The Monk Who Sold His Ferrari',
        'author' => 'Robin Sharma',
        'releaseYear'=> '1996',
        'purchaseUrl'=> 'https://www.amazon.com/Monk-Who-Sold-His-Ferrari/dp/0062515675'
    ],

    [
        'name' => 'Becoming',
        'author' => 'Michelle Obama',
        'releaseYear'=> '2018',
        'purchaseUrl'=> 'https://www.amazon.com/Becoming-Michelle-Obama/dp/1524763136'
    ],

    [
        'name' => 'Think Straight',
        'author' => 'Darius Foroux',
        'releaseYear'=> '2017',
        'purchaseUrl' =>'https://www.amazon.com/THINK-STRAIGHT-Change-Your-Thoughts-ebook/dp/B077NJWFR3'

    ]
            
];

$filteredBooks = array_filter($books, function($book){
    return $book['releaseYear'] >= 2017;
});

require "index.view.php";