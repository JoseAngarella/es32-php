<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(!isset($_SESSION['numero_voti'])){
            echo "<h2>ancora nessun dato inviato</h2>";
        }else{
        
            $lista_voti="";
            for($i=0; $i<count($_SESSION['voti']);$i++){
                $lista_voti.= "<li>".$_SESSION['voti'][$i]."</li>";
            }
            $stampa="<table><tr><th>numero di invio della form</th><th>data dell'ultimo invio</th></tr><tr><td>".$_SESSION['numero_voti']."</td><td>".$_SESSION['ultima_data'].
            "</td></tr></table><br><br><h3>Lista voti</h3><ul>$lista_voti</ul><br>";
            echo $stampa;
        }
    ?>
    <a href="presentazione.html">torna al form</a><br>
    <a href="resetta_sessione.php">resetta la sessione e torna al form</a>
</body>
</html>

<!-- 
Infine nella pagina risultati.php mostrare:
- il numero di volte che l'utente fino ad ora ha inviato la form e l'ultima data inviata all'interno di una tabella (con una riga di intestazione).
- l'array dei voti delle recensioni inviate fino ad ora all'interno di una lista non ordinata <ul>
- la media attuale delle recensioni all'interno di un <h3>
Anche qui deve essere possibile ritornare nella pagina presentazione.html, attraverso un link. -->