<?php

$day1 = [

    'match1' => [
        'home_team' => 'Milan',
        'away_team' => 'Inter',
        'home_goals' => '3',
        'away_goals' => '1'
    ],
    'match2' => [
        'home_team' => 'Fiorentina',
        'away_team' => 'Bologna',
        'home_goals' => '2',
        'away_goals' => '2'
    ],

    'match3' => [
        'home_team' => 'Roma',
        'away_team' => 'Lazio',
        'home_goals' => '1',
        'away_goals' => '4'
    ],

    'match4' => [
        'home_team' => 'Udinese',
        'away_team' => 'Palermo',
        'home_goals' => '2',
        'away_goals' => '5'
    ],

    'match5' => [
        'home_team' => 'Juventus',
        'away_team' => 'Torino',
        'home_goals' => '1',
        'away_goals' => '1'
    ]
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Matchs</title>
</head>

<body>

    <h1>Giornata 1 di serie A</h1>

    <ul>
        <?php foreach ($day1 as $match => $data) : ?>
            <li>
                <span><?= $data['home_team'] ?> - </span> <span><?= $data['away_team'] ?> | </span> <span><?= $data['home_goals'] ?> - </span> <span><?= $data['away_goals'] ?> </span>
            </li>
        <?php endforeach ?>
    </ul>


</body>

</html>