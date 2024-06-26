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

   /*  array che contiene tutte le keys della'array[0] (sono uguali per 
   tutti gli array) */
    $hotelKeys = array_keys($hotels[0]);

?>

<!-- Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--/ Bootstrap -->
    <title>PHP Hotel</title>
</head>
<body>
<table class="table table-hover table-striped">
    <thead>
        <tr>
        <!-- per ogni elemento dell'array $hotelKeys (contiene le keys del primo array)  -->
        <?php foreach ($hotelKeys as $key) { ?>
            <!-- stampo il valore dell'elemento -->
            <th><?php echo $key ?></th>
        <?php } ?>
        </tr>
    </thead>

    <tbody>
        <!-- per ogni array nell'insieme di arrays $hotels 
        stampa a pagina una row della tabella -->
        <?php foreach($hotels as $hotel) { ?>
            <tr>
                <!-- per ogni singolo array stampa la key specificata -->
                <td><?php echo $hotel['name'] ?></td>
                <td><?php echo $hotel['description'] ?></td>
                <!-- se il valore di $hotel['parking'] e' vero stampo Si,
                altrimenti stampo No  -->
                <td><?php echo $hotel['parking'] ? 'Si' : 'No' ?></td>
                <td><?php echo $hotel['vote'] ?></td>
                <td><?php echo $hotel['distance_to_center'] .' Km' ?></td>
            </tr>
        <?php } ?> 
    </tbody>  

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>