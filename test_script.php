<?php
  $nome = $_POST['nome'];
  $cognome = $_POST['cognome'];

  $password = $_POST['password'];

  echo "Benvenuto" .$nome." ".$cognome."<br /> " .$password. " " ;
  

  echo "<br /> Benvenuto "  .$nome." ".$cognome."<br /> " .str_replace("$password","***", "$password"). " " ;
  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="content">

            </div>

        </div>

    </div>

   </div>
    
</body>
</html>