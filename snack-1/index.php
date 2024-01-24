<?php
    $array_basket_games = [
        [
            'team_casa' => 'Boston Celtics',
            'team_ospite' => 'Brooklyn Nets',
            'punti_casa' => 60,
            'punti_ospite' => 70,
        ],
        [
            'team_casa' => 'Chicago Bulls',
            'team_ospite' => 'New York Knicks',
            'punti_casa' => 60,
            'punti_ospite' => 70,
        ],
        [
            'team_casa' => 'Indiana Pacers',
            'team_ospite' => 'Milwaukee Bucks',
            'punti_casa' => 60,
            'punti_ospite' => 70,
        ],
        [
            'team_casa' => 'Detroit Pistons',
            'team_ospite' => 'Philadelphia 76ers',
            'punti_casa' => 60,
            'punti_ospite' => 70,
        ],
        [
            'team_casa' => 'Toronto Raptors',
            'team_ospite' => 'Miami Heat',
            'punti_casa' => 60,
            'punti_ospite' => 70,
        ],
        [
            'team_casa' => 'Los Angeles Lakers',
            'team_ospite' => 'Orlando Magic',
            'punti_casa' => 60,
            'punti_ospite' => 70,
        ],

    ]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">SNACK 1 </h1>
                <div class="container">
                    <div class="row">

                        <?php foreach($array_basket_games as $game){?>
                           
                            <div class="col-6">
                                
                                <div class="card mt-2  text-center">
                                    <div class="card-body">
            
                                        <h2 class="card-title">
                                            <?php echo $game['team_casa'] ?>-<?php echo $game['team_ospite'] ?>
                                        </h2>
                                        
                                        <p class="card-text">
                                            <?php echo $game['punti_casa'] ?>-<?php echo $game['punti_ospite'] ?>
                                        </p>
                                            
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>