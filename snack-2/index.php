<?php

     $messaggio = '';

    if(isset($_GET['email']) && isset($_GET['name']) && isset($_GET['age'])){
       $email = $_GET['email'];
       $name = $_GET['name'];
       $age = $_GET['age'];

       $check = true;
       
       $messaggio = 'Accesso Riuscito';

       
       //controllo che mail contenga almeno un punto ed una chiocciola 
       
       if (!(str_contains($email, '@') && str_contains($email, '.'))) {
           $messaggio = 'Accesso Negato';
        };
       
        //controllo che age sia un numero 

        if (!(is_numeric($age))){
            $messaggio = 'Accesso Negato';
        };
        
        //controllo che name abbia più di tre caratteri 

        if (!(strlen($name) > 2)){
            $messaggio = 'Accesso Negato';
        };


       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>SNACK-2</h1>

                <form action="" method="GET">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="text" class="form-control" id="email" name="email">
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="name" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="age" class="form-control" id="age" name="age">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <col-12>
                <h3>
                    <?php echo $messaggio; ?>
                </h3>
            </col-12>
        </div>
    </div>
</body>
</html>