<?php

$paragraph = $_GET['paragraph'];

$paragraph_divided = explode('.', $paragraph);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Paragraph Divided</title>
</head>

<body>

    <div class="container">

        <h1>Paragrafo di partenza</h1>
        <p><?= $paragraph ?></p>

        <h1>Paragrafi divisi dal punto</h1>
        <ul>
            <?php foreach ($paragraph_divided as $para) : ?>
                <li>
                    <?= $para ?>
                </li>
            <?php endforeach ?>
        </ul>

    </div>
</body>

</html>