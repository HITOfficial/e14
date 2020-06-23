<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
        </div>
        <div class="middle">
            <div class="left">
                <h3>LISTA PACJENTÓW</h3>
                <?php
                    $conn = mysqli_connect('localhost','root','','przychodnia1') or die('blad podczas laczenia z serwerem');
                    $zapytanie1 = 'select id, imie, nazwisko from pacjenci';
                    $zapytanie1query = mysqli_query($conn,$zapytanie1);
                    if(mysqli_num_rows($zapytanie1query)>0){
                        while ($wyniki = mysqli_fetch_row($zapytanie1query)){
                            echo '<br>';
                            foreach($wyniki as $wynik){
                                echo $wynik.' ';
                            }
                        }
                    }
                    mysqli_close($conn)
                ?>
                <br>
                <br>
                <form action="pacjent.php" method="POST">
                    <label>Podaj id:</label>
                    <label>
                        <input type="number" name="id">
                        <input type="submit" name="submit" value="pokaż dane">
                    </label>
                </form>
                <h3>LEKARZE</h3>
                <ul>
                    <li>pn - śr</li>
                    <ol>
                        <li> Anna Kwiatkowska</li>
                        <li> Jan Kowalewski</li>
                    </ol>
                    <li>czw - pt</li>
                    <ol>
                        <li> Krzysztof Nowak</li>
                    </ol>
                </ul>
            </div>
            <div class="right">
                <h2>INFORMACJE SZEGÓŁOWE O PACJENCIE</h2>
                <span>Brak wybranego pacjenta</span>
            </div>
        </div>
        <div class="bottom">
            <p>utworzone przez: 00000000000</p>
            <a href="Pobierz plik z kwerendami">kwerendy.txt</a>
        </div>
    </div>
</body>
</html>