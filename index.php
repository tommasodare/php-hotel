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

$vote = isset($_GET['vote']) ? $_GET['vote'] : 0;
$parcheggio = isset($_GET['parcheggio']) ? $_GET['parcheggio'] : false;

var_dump($vote);
var_dump($parcheggio);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        form {
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
        }
    </style>
</head>

<body>

    <h1 class="p-3 text-center">PHP Hotel</h1>

    <div class="container d-flex justify-content-center mt-5">
        <form action="./index.php" method="get">

            <label for="park">Parcheggio</label>
            <input type="checkbox" name="parcheggio" placeholder="Seleziona se vuoi parcheggio">
            <label for="cars">Scegli un ranking</label>
            <select name="vote">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <button type="submit">Cerca</button>

        </form>
    </div>

    <div class="container mt-4">



        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Nome Hotel</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($hotels as $hotel) {

                    if ($hotel['vote'] >= $vote && $hotel['parking'] == $parcheggio) { // Controllo se il voto è maggiore o uguale a quello selezionato e se il parcheggio è richiesto
                        echo "<tr>";
                        echo "<td>" . $hotel['name'] . "</td>";
                        echo "<td>" . $hotel['description'] . "</td>";
                        echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                        echo "<td>" . $hotel['vote'] . "</td>";
                        echo "<td>" . $hotel['distance_to_center'] . " km</td>";
                        echo "</tr>";
                    }
                }

                ?>

            </tbody>
        </table>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>