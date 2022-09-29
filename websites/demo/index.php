<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display:grid;
            place-items:center;
            /* height: 100vh; */
            margin:0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <h1>
        Laracasts Lessons: Demo Workspace
    </h1>

    <p>
        This is page is currently a workspace for current lessons via Laracasts.
    </p>
    <p>
        View past assignments in the following links:
    </p>

    <ul>
        <li>
            <a href="http://localhost:8888/firstPhpTag.php">First PHP Tag</a>
        </li>
        <li>
            <a href="http://localhost:8888/variables.php">Variables</a>
        </li>
        <li>
            <a href="http://localhost:8888/associateArrays.php">Associate Arrays</a>
        </li>
    </ul>

    <h3>
        Recommended Books
    </h3>

    <?php
        $books = [
            [
                "name" => "Do Androids Dream of Electric Sheep?",
                "author" => "Philip K. Dick",
                "purchaseUrl" => "https://www.google.com"
            ],
            [
                "name" => "Project Hail Mary",
                "author" => "Andy Weir",
                "purchaseUrl" => "https://www.google.com"
            ]
        ];
    ?>

<ul>
    <?php foreach ($books as $book) : ?>
    <li>
        <a href=" <?= $book ['purchaseUrl']; ?>">
            <?= $book["name"]; ?>
        </a>
    </li>

        <?php endforeach; ?>
</ul>

</body>
</html>
