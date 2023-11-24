<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books recommendation</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
            "Midnight Cafe",
            "Becoming",
            "Think Straight"
        ];
    ?>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>