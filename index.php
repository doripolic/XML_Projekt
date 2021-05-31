<?php
    $xml=simplexml_load_file("filmovi.xml") or die("Neuspjesno ucitavanje XML datoteke.");
    $json = json_encode($xml);
    $niz = json_decode($json, TRUE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dorijan_Polić_XML_Projekt</title>
</head>
<body>
    <header>
        <div class="naslov">
            <h1>FILMOVI</h1>
        </div>
    </header>
    <div class="filmovi">
        <table>
        <tr class="prvired">
                <td>Ime Filma</td>
                <td colspan="2">Redatelj</td>
                <td>Zanr</td>
                <td>Godina</td>
        </tr>
        <?php 
            for($i=0; $i < count($niz["film"]); $i++){
                echo "<tr> 
                    <td>" . $niz['film'][$i]['ImeFilma'] . "</td>
                    <td>" . $niz['film'][$i]['Redatelj']['ImeRedatelja'] . "</td>
                    <td>" . $niz['film'][$i]['Redatelj']['PrezimeRedatelja'] . "</td>
                    <td>" . $niz['film'][$i]['Zanr'] . "</td>
                    <td>" . $niz['film'][$i]['Godina'] . "</td>
                </tr>";
            }
        ?>
        </table>

    </div>
    <footer>
        <div class="podnozje">
            <h3>Dorijan Polić</h3>
        </div>
    </footer>
</body>
</html>

