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
            'purchaseUrl'=>'http://example.com',
            'releaseYear' => 1968
        ],
         [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl'=> 'http://example.com',
            'releaseYear' => 2021
         ],
         [
            'name' => 'The Marlian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
         ]
         ];

        function filterByAuthor($books, $author) {
            $filteredBooks = [];

             foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
             }
             return $filteredBooks;
        }
        
        ?>

        <ul>
        <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) : ?>
         <li>
            <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) By <?= $book['author'] ?>
        </a>
        </li>
           
            <?php endforeach; ?>
        </ul>

     
</body>
</html>