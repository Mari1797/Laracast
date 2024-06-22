<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-wfidth, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<h1>Recommended Books</h1>

        <?php
      
       $books = [
        [
            'name' => 'Do Andriods dream of Electric Sheep',
            'author' =>'Philip K. Dick',
            'purchaseUrl'=>'http://example.com'
        ],
         [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl'=> 'http://example.com'
         ]
         ];
        ?>

        <ul>
        <?php foreach ($books as $book) :?>
         <li>
            <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name']; ?></li>
        <?php endforeach; ?>
        </ul>
     
</body>
</html>