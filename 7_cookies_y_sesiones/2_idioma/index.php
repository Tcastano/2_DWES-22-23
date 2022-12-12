<?php 
//página para seleccionar el idioma (formulario)

//formulario con action= procesar.php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #Contenedor{
        display: flex;
        flex-direction: column;
        align-content: center;
        text-align: center;
        margin-top: 200px;
        background-color: #c9c9c9;
        width: 400px;
        margin-left: 250px;
        padding-bottom: 40px;
    }
    #boton{
        margin-top: 20px;
    }
</style>
<body>
    <div id="Contenedor">
        <h1>Selecione Idioma</h1>    
        <form action="./procesar.php" method="post">
            <select name="idioma" id="idioma">
                <optgroup label="Idioma" require>
                    <option selected="true" disabled>Selecione Idioma</option>
                    <option value="spanish">Español</option>
                    <option value="English">Inglés</option>
                    <option value="French">Francés</option>
                </optgroup>
            </select>
            <br>
            <input id="boton" type="submit" value="Idioma">
        </form>
    </div>
</body>
</html>