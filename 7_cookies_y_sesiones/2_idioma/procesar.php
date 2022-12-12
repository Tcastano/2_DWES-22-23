<?php
// recibe datos formulario y redirige en función del idioma
var_dump($_POST);
$idioma=$_POST['idioma'];
if (!empty($idioma)) {
    switch ($idioma) {
        case 'spanish':
            header('Location:./html/es.html');
            break;
        case 'English':
            header('Location:./html/en.html');
                break;
        case 'French':
            header('Location:./html/fr.html');
            break;
        default:
    
            break;
}
}