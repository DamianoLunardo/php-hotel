<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Bellissimo',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Incredibile',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Bha',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Visto di meglio',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Orribile',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];


    //provo ad aggiungere altre  caratteristiche alle info hotel sono random ogni volta
    foreach ($hotels as $key => $hotel) {
        $hotels[$key]['stars'] = rand(1, 5);
    }
    //var_dump($hotels);
    foreach ($hotels as $key => $hotel) {
        $hotels[$key]['pool'] = (rand(0, 1) == 1) ? 'Si' : 'No';
    }
    //var_dump($hotels);
    $hotels[0]['gym'] = 'Si';
    $hotels[1]['gym'] = 'No';
    $hotels[2]['gym'] = 'Si';
    $hotels[3]['gym'] = 'Si';
    $hotels[4]['gym'] = 'No';


?>
<!-- Prima parte stampare tutte le info -->
<!-- <?php foreach ($hotels as $hotel) { ?>
    <h3><?php echo $hotel['name']; ?></h3>
    <p><?php echo $hotel['description']; ?></p>
    <p>Parcheggio:<?php echo $hotel['parking'] ? 'Si' : 'No'; ?></p>
    <p>Voto: <?php echo $hotel['vote']; ?></p>
    <p>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?></p>
    <hr>
<?php } ?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
<div class="container">
        <h1>Filtra gli hotel con parcheggio</h1>
        <form action="" method="GET">
            <div>
                <label for="parcheggio">Filtra per parcheggio:</label>
                <select name="parcheggio" class="form-control">
                    <option value="">Tutti</option>
                    <option value="1">Con parcheggio</option>
                    <option value="0">Senza parcheggio</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtra</button>
        </form>

        <hr>

        <table class="table table-striped table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro (Km)</th>
                    <th>Stelle</th>
                    <th>Piscina</th>
                    <th>Palestra</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) {
                    if (!isset($_GET['parcheggio']) || $_GET['parcheggio'] == '' || $hotel['parking'] == $_GET['parcheggio']) { ?>
                    <tr>
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td><?php echo $hotel['parking'] ? 'Si' : 'No'; ?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                        <td><?php echo $hotel['distance_to_center']; ?></td>
                        <td><?php echo $hotel['stars']; ?></td>
                        <td><?php echo $hotel['pool']; ?></td>
                        <td><?php echo $hotel['gym']; ?></td>
                    </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
</body>
</html>