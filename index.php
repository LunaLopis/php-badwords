

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


  echo ('Benvenuto')
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <form action="test_script.php" class="mt-5" method="POST">
                            <input type="text" name="nome" placeholder="Nome">
                            <input name="cognome" placeholder="cognome">
                            <!-- <input type="text" name="Cognome" placeholder="Cognome"> -->
                            <input type="text" name="password" placeholder="password">
                            <input type="submit" value="Invia">                            
                    </form>
                </div>

            </div>
        </div>

    </div>
    
</body>
</html>