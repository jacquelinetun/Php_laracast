<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functions</title>
</head>
<body>
    <h1>Recommended Books</h1>

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

        function filterByAuthor($books, $author) {
            $filteredBooks = [];

            foreach($books as $book){
                if ($book['author'] === $author){
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }

        //filterByAuthor();
    ?>
    
    <ul>
        <?php foreach (filterByAuthor($books, 'Robin Sharma') as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'];?>">
                    <?= $book['name']; ?> (<?= $book    ['releaseYear']?>) - By <?= $book['author']?>
                </a>
            </li>    
        <?php endforeach; ?>
    </ul>

</body>
</html>