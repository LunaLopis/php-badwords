<?php
  $nome = $_POST['nome'];
  $cognome = $_POST['cognome'];

  $password = $_POST['password'];


  

 
  


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
                <div class="content m-5 p-5"> 
                        <div class="card text-center">
                            <h1> testo originale:</h1> 
                            <span class="text-success">
                            <?php 
                                echo "Benvenuto " .$nome." ".$cognome."<br /> " .$password. " "  ;                               
                                $sumLength = strlen($nome . $cognome . $password);
                               
                            ?>                            
                            </span>
                            <h4>
                                <?php
                                 echo "(lunghezza: " . strlen($nome) . ", " . strlen($cognome) . ", " . strlen($password) . ")";
                                 echo "(somma lunghezze: " . $sumLength . ")";
                                ?>
                            </h4>
                        </div>

                        <div class="card text-center mt-4">
                            <h1>
                            testo con censura:
                            </h1>

                            <span class="text-success"> 
                                <?php echo "<br /> Benvenuto "  .$nome." ".$cognome."<br /> " .str_replace("$password","***", "$password"). " " ;                                 
                                $passwordCensored = str_replace($password, '***', $password);
                                $sumLength = strlen($nome . $cognome . $passwordCensored);                               
                                ?>
                            </span>
                                 <h4>
                                    <?php 
                                    echo "(lunghezza: " . strlen($nome) . ", " . strlen($cognome) . ", " . strlen($password) . ")";
                                    echo "(somma lunghezze: " . $sumLength . ")";
                                    ?>
                                </h4> 
                        </div>
                </div>
            </div>
        </div>
   </div>   
</body>
</html>


<style>
  .pass-color {
    background-color: grey;
  }
</style>