<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'ali baba',
            'author' => 'mido',
        ],
        [
            'name' => 'sendbad',
            'author' => 'kiki',
        ],
        [
            'name' => "alaa eldin",
            'author' => 'lolo',
        ],
    ];
    $read = true;
    if ($read) {
        $msg = "<h1>you have read book</h1>";
    }
    $hello = "hello";
    //writeing vars with string without concat
    echo "$hello everybody";
    ?>

    <ul>
        <!--best practice for loop to write html tags -->
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
        <?= $msg ?>

    </ul>
    <p>
        <?= $books[1] ?>
    </p>
</body>

</html>