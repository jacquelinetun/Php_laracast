<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative Array</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
            [
                'name' => 'The 5AM Club',
                'author' => 'Robin Sharma',
                'purchaseUrl'=> 'https://www.amazon.com/AM-Club-Morning-Elevate-Life/dp/1443456624'
            ],

            [
                'name' => 'Becoming',
                'author' => 'Michelle Obama',
                'purchaseUrl'=> 'https://www.amazon.com/Becoming-Michelle-Obama/dp/1524763136'
            ],

            [
                'name' => 'Think Straight',
                'author' => 'Darius Foroux',
                'purchaseUrl' =>'https://www.amazon.com/THINK-STRAIGHT-Change-Your-Thoughts-ebook/dp/B077NJWFR3'

            ]
            
        ];
    ?>
    
    <ul>
        <?php foreach ($books as $book): ?>
            <?php if ($book['author'] === 'Robin Sharma'): ?>
                <li>
                    <a href="<?= $book['purchaseUrl'];?>">
                        <?= $book['name']; ?> (<?= $book    ['releaseYear']?>) - By <?= $book['author']?>
                    </a>
                </li>
            <?php endif ; ?>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>