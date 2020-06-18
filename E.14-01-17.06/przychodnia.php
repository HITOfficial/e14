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
                $conn= mysqli_connect('localhost','root','','przychodnia') or die ('blad podczas laczenia z serwerem');
                $zapytanie1= 'select id, imie, nazwisko from pacjenci';
                $zapytanie1query = mysqli_query($conn,$zapytanie1);
                if(mysqli_num_rows($zapytanie1query)>0){
                    while($pacjenci= mysqli_fetch_row($zapytanie1query)){
                        echo '<br>';
                        foreach($pacjenci as $pacjenciforeach){
                            echo $pacjenciforeach.' ';
                        }
                    }
                }
                mysqli_close($conn);
                ?>
                <br>
                <br>
                <form action="pacjent.php" method="POST">
                    <label>
                        Podaj id:
                        <br>
                        <input type="number" name="id">
                        <input type="submit" name="submit" value="Pokaż dane">
                    </label>
                    <h3>LEKARZE</h3>
                    <ul>
                        <li>pn - śr</li>
                        <ol>
                            <li>Anna Kwiatkowska</li>
                            <li>Jan Kowalewski</li>
                        </ol>
                        <li>czw - pt</li>
                        <ol>
                            <li>Krzysztof Nowak</li>
                        </ol>
                    </ul>
                </form>
            </div>
            <div class="right">
                <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
                <p>Brak wybranego pacjenta</p>
            </div>
        </div>
        <div class="bottom">
            <p>utworzeone przez: 0000000000</p>
            <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
        </div>
    </div>
    
</body>
</html>