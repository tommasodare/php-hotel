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

    <h1>PHP Hotel</h1>

    <div class="container d-flex justify-content-center mt-5">
        <form action="./index.php" method="get">

            <input type="checkbox" name="parcheggio" placeholder="Seleziona se vuoi parcheggio">
            <button type="submit">Cerca</button>

        </form>
    </div>

    <div class="container mt-4">

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

        echo "<table class='table table-striped'>";
        echo "<thead>
                <tr>
                    <th>Nome Hotel</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
              </thead>
              <tbody>";


        foreach ($hotels as $hotel) {

            echo "<tr>";
            echo "<td>" . $hotel['name'] . "</td>";
            echo "<td>" . $hotel['description'] . "</td>";
            echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
            echo "<td>" . $hotel['vote'] . "</td>";
            echo "<td>" . $hotel['distance_to_center'] . " km</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";

        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>