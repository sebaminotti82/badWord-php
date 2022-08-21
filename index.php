<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>BadWord-php</h1>
        <?php 
          //  salvo un paragrafo in una variabile  dopo tramite il metodo get devo cambiare
          //  una parola selezionata con 3 ***
         
        //salvo il mio paragrafo in una variabile 
        $paragrafo = '
        A guidare l\'auto una militare statunitense in servizio alla Base Usaf di Aviano,  che ha perso il controllo della vettura.
        Secondo quanto deciso dalla procura di Pordenone sulla scorta degli accertamenti dei Carabinieri della locale Compagnia,
         la giovane di 20 anni è stata arrestata per omicidio stradale.
        ';
        // tramite get cerco la parola da sostituire  
        $parola = $_GET['parola'];

        //per sostituire la parola passata in get con i 3 *** utilizzo un metodo str_replace()
        //questo metodo permette di modificare una porzione di testo prescelto

        $paragrafo = str_replace($parola,'***',$paragrafo);

        echo $paragrafo;

        //conto i caratteri del mio paragrafo tramite il metodo strlen e li stampo a video
         
        ?>

        <h5>il mio articolo è lungo <?php echo strlen($paragrafo);  ?> caratteri</h5>
</body>
</html>