<?php ?>
<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>
</head>

<body>
<h1>Snack PHP</h1>
<!-- Snack 1 -->
<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php 
$giornata = [
    [
        'squadra_casa_nome' => 'Olimpia Milano',
        'squadra_casa_punti' => 55,
        'squadra_ospite_nome' => 'Cantù',
        'squadra_ospite_punti' => 60,
    ],
    [
        'squadra_casa_nome' => 'Torino',
        'squadra_casa_punti' => 70,
        'squadra_ospite_nome' => 'Roma',
        'squadra_ospite_punti' => 60,
    ],
    [
        'squadra_casa_nome' => 'Conegliano',
        'squadra_casa_punti' => 53,
        'squadra_ospite_nome' => 'Roma',
        'squadra_ospite_punti' => 55,
    ]
    ];
    var_dump($giornata[0]['squadra_casa_nome']);
    ?>
    <?php for ($i=0; $i <count($giornata); $i++) {?> 
       <div> 
            <?php echo $giornata[$i]['squadra_casa_nome']; ?> - <?php echo $giornata[$i]['squadra_ospite_nome']; ?> | <?php echo $giornata[$i]['squadra_casa_punti']; ?> - <?php echo $giornata[$i]['squadra_ospite_punti']; ?>
       </div>
        <?php } ?>
    

</body>
</html>