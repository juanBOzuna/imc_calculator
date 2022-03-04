<html lang="en">

<head>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/forms.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamo Web</title>
</head>

<body>
    
    <?php 

    $resultTitle = "INGRESE LOS DATOS";
    $msj ="";
    $img = "logo-after-calc.png";
    $width = 80;
    
    if(isset($_REQUEST['isResp'])){
        $result_final = $_REQUEST['result'];
        $resultTitle = "SEÑ@R ". $_REQUEST['name']. ' SU IMC ES: '. number_format($result_final,  2) ;

        if(floatval($result_final) <18.5  ){
            $msj = "Debes ir al medico por bajo peso"; 
            $img = "preocupacion.png";
        }

        if(floatval($result_final) >= 18.5 &&  floatval($result_final) <= 24.9 ){
            $msj = "Usted esta bien de peso"; 
            $img = "todook.png";
            $width = 45;
        }

        if(floatval($result_final) >= 25 &&  floatval($result_final) <= 30 ){
            $msj = "Usted esta GORDO HAGA EJERCICIO"; 
            $img ="imgiralgym.png";
            $width = 32;
        }

        if(floatval($result_final) >30  ){
            $msj = "Debes ir al medico por sobre peso"; 
            $img = "doctors.png";
            $width = 70;
        }
    }
    
    ?>


    <body>
        <center>
            <div class="row">

                <div class="form-student">
                    <form action="back.php" method="post">
                        <h4>DATOS DE LA PERSONA </h4>
                        
                        <input class="digit-calc" type="text" name="name" placeholder="Ingrese su nombre" required>

                        <input class="digit-calc" type="number" name="weight" placeholder="Digite su peso en kg" step="any"
                            required>
                        <br>
                        <input class="digit-calc" type="number" name="height" placeholder="digite su altura en metros" step="any"
                            required>

                        <p>Formulario hecho por <a href="https://github.com/juanBOzuna" target="_blank">Juan Barraza</a>
                        </p>
                        <input class="send-data" type="submit" name="" id="">
                    </form>
                </div>

                <div class="form-result">
                    <h4><?= $resultTitle ?> </h4>
                    <h3><?= $msj ?> </h3>

                    <img src= <?= "assets/". $img?> alt="" style="width:<?= $width?>%;object-fit= contain";" id="img-after-calc"  >
                </div>

            </div>
        </center>
    </body>
</body>

</html>