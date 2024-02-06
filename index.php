<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    // var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>

    <div class="container">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">parking</th>
                <th scope="col">vote</th>
                <th scope="col">distance to center</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">
                        <ul>
                            <?php
                                foreach($hotels as $hotel) {
                                    echo '<li>'.$hotel['name'].'</li>';
                                }
                            ?>
                        </ul>
                    </th>
                    <td>
                        <ul>
                            <?php
                                foreach($hotels as $hotel) {
                                    echo '<li>'.$hotel['description'].'</li>';
                                }
                            ?>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <?php
                                foreach($hotels as $hotel) {
                                    echo '<li>'.$hotel['parking'].'</li>';
                                }
                            ?>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <?php
                                foreach($hotels as $hotel) {
                                    echo '<li>'.$hotel['vote'].'</li>';
                                }
                            ?>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <?php
                                foreach($hotels as $hotel) {
                                    echo '<li>'.$hotel['distance_to_center'].'</li>';
                                }
                            ?>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
        
</body>
</html>