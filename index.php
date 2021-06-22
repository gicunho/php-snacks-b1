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
<h2>Snack 1</h2>
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
    //var_dump($giornata[0]['squadra_casa_nome']);
    ?>
    <?php for ($i=0; $i <count($giornata); $i++) {?> 
       <div> 
            <?php echo $giornata[$i]['squadra_casa_nome']; ?> - <?php echo $giornata[$i]['squadra_ospite_nome']; ?> | <?php echo $giornata[$i]['squadra_casa_punti']; ?> - <?php echo $giornata[$i]['squadra_ospite_punti']; ?>
       </div>
        <?php } ?>



<h2>Snack 2</h2>
<!-- Snack 2 -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<form action="" method="get">
<input type="text" name="name" id="name">
<input type="number" name="age" id="age">
<input type="email" name="email" id="email">
<button type="submit">Submit</button>
</form>
<?php 
    if(strlen($_GET['name']) > 3 && strpos($_GET['email'], '@') && strpos($_GET['email'], '.') && is_numeric($_GET['age'])) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
?>

<h2>Snack 3</h2>
<!-- Snack 3 -->
<!-- Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<?php 
for ($i=0; $i <count($posts); $i++) {
    
    //var_dump(array_keys($posts)[$i]);
    $key = array_keys($posts)[$i];
    //var_dump($posts[$key]);
    ?> 
    <h3> <?php echo array_keys($posts)[$i]; ?> </h3>

    <?php for ($y=0; $y < count($posts[$key]); $y++) {
        ?> 
        <h4> <?php echo $posts[$key][$y]['title']; ?> </h4>
        <div>Autore: <?php echo $posts[$key][$y]['author']; ?></div>
        <p> <?php echo $posts[$key][$y]['text']; ?> </p>
    <?php   
    }
}
?>

<h2>Snack 4</h2>
<!-- Snack 4 -->
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 
$numeri_random = [];
//var_dump($numero_random);
for ($i=0; $i < 15; $i++) {
    $numero_random = rand(1, 100);
 
    if(!in_array($numero_random, $numeri_random)) {
        $numeri_random[] = $numero_random;
    } else {
        $i--;
    }
}
var_dump($numeri_random)
?>

<h2>Snack 5</h2>
<!-- Snack 5 -->
<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php 
$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptatum minima corporis dolorem quibusdam nesciunt cum ipsum dolores similique qui quaerat. Fugiat veritatis magni, provident repellendus distinctio, labore id sapiente.'
?>
<p><?php echo str_replace('.', '. </p> <p>', $paragrafo) ?></p>  


<h2>Snack 6</h2>
<!-- Snack 6 -->
<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<div style="background-color: gray; width: 300px; height: 300px;">
    <?php echo $db['teachers'][0]['name']; ?>
    <?php echo $db['teachers'][0]['lastname']; ?>
    <?php echo $db['teachers'][1]['name']; ?>
    <?php echo $db['teachers'][1]['lastname']; ?>
</div>

<div style="background-color: green; width: 300px; height: 300px;">
    <?php echo $db['pm'][0]['name']; ?>
    <?php echo $db['pm'][0]['lastname']; ?>
    <?php echo $db['pm'][1]['name']; ?>
    <?php echo $db['pm'][1]['lastname']; ?>
</div>
</body>
</html>