<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['numero_voti'])){
            $_SESSION['numero_voti']=1;
        }else{
            $_SESSION['numero_voti']++;
        }
        if(!isset($_SESSION['voti'])){
            $_SESSION['voti']=array();
        }
        $_SESSION['ultima_data']=$_POST['data'];
        array_push($_SESSION['voti'], $_POST['voto']);
    ?>
    <a href="presentazione.html">torna al form</a>

</body>
</html>


<!-- Una volta arrivati nella pagina script.php, recuperare i dati della form e fare in modo di tenere traccia di tre cose:
- il numero di volte che l'utente invia la form (un intero)
- tutti i voti delle recensioni inviate (un array)
- l'ultima data inviata (una stringa)
Da questa pagina è possibile ritornare nella pagina presentazione.html, attraverso un link. -->
