<?php
include 'connexio.php';
conn();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="llista.css">
    <title>Document</title>
</head>

<body>
<header>
        <h1 id="pelicula">Pelicules per veure</h1>
    </header>
    <main>
        <ul class="peli">
            <li><a href="xml/Pelicules.xml">Pelicules</a></li>
        </ul>
    </main>
    <div class="pelis">
        <div class="contenidor">
            <?php
            $sql = "SELECT * from Pelis";
            $result = conn()->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    $titol = $row["titol"];
                    $any = $row["any"];
                    $genere = $row["genere"];
                    echo " <div class='pelicules'>
                                        <div class='grid-container'>
                                            <div class='imatge'>
                                            <p>Nom de la pelicula: </b>$titol</b></p>
                                            </div>
                                            <div class='nom_act'>
                                                <p>Any d'estreno: </b>$any</b></p>
                                            </div>
                                            <div class='hora'>
                                                <p>Generes de la pelicula: </b>$genere</b></p>
                                            </div>                                  
                                                </div>
                                        </div>";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>