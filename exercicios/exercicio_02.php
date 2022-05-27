<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SW - Exercício 2</title>
</head>
<body>
    <main>
        <h1>Pirâmide de números</h1>

        <form action="" method="POST">
            <input type="number" name="number" placeholder="Número" autofocus>
            <button>Visualizar</button>
        </form>
          
            <?php
                $number = $_POST['number'];
                
                if(!empty($number)){

                    function makePyramid($number){
                        //Laço for: PRINCIPAL
                        for($i = 0; $i < $number; $i++){
                            for($counter = 1; $counter <= $i+1; $counter++){
                              echo "$counter ";
                            }
                            echo "<br>";
                        }
                    }

                    makePyramid($number);                    
                }
            ?>

        </div>

    </main>
</body>
</html>