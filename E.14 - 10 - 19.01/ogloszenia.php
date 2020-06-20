<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <div class="container">
        <div class="top"><h1>Portal Ogłoszeniowy</h1></div>
        <div class="middle">
            <div class="content">
                <div class="left">
                    <h2>Kategorie ogłoszeń</h2>
                    <ol>
                        <li>Książki</li>
                        <li>Muzyka</li>
                        <li>Filmy</li>
                    </ol>
                    <img src="ksiazki.jpg" alt="Kupię/ sprzedam książkę">
                    <table>
                        <thead>
                            <tr>
                                <td>Liczba Ogłoszeń</td>
                                <td>Cena ogłoszenia</td>
                                <td>Bonus</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1-10</td>
                                <td>1 PLN</td>
                                <td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN  na ogłoszenie</td>
                            </tr>
                            <tr>
                                <td>11-50</td>
                                <td>0,80 PLN</td>
                            </tr>
                            <tr>
                                <td>51 i więcej</td>
                                <td>0,60 PLN</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="right">
                    <h2>Ogłoszenia kategorii książki</h2>
                    <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'ogloszenia') or die ('nie polaczono');
                        $zapytanie1 = 'select id, tytul, tresc from ogloszenie where kategoria = 1';
                        $zapytanie2 = 'SELECT o.id, o.tytul, o.tresc, u.telefon FROM uzytkownik as u join ogloszenie as o on u.id = o.uzytkownik_id';
                        $zapytaniequery = mysqli_query($conn,$zapytanie2);
                        if(mysqli_num_rows($zapytaniequery)>0){
                            while($wynik = mysqli_fetch_row($zapytaniequery)){
                                echo '<h3>'.$wynik[0].' '.$wynik[1].'</h3>';
                                echo '<p>'.$wynik[2].'</p>';
                                echo '<p>telefon kontaktowy: '.$wynik[3].' </p>';
                            }
                        }
                        mysqli_close($conn);
                    ?>
                </div>
            </div>
            
        </div>
        <div class="bottom">Portal ogłoszeniowy opracował 00000000000</div>
    </div>
</body>
</html>