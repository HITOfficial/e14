<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia kumputerowa</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <div class="left">
                <ul>
                    <li>Producenci</li>
                    <ol>
                        <li>Intel</li>
                        <li>AMD</li>
                        <li>Motorola</li>
                        <li>Corsair</li>
                        <li>ADATA</li>
                        <li>WD</li>
                        <li>Kingstone</li>
                        <li>Patriot</li>
                        <li>Asus</li>
                    </ol>
                </ul>
            </div>
            <div class="mid">
                <h1>Dystrybucja sprzętu komputerowego</h1>
                <form action="hurtownia.php" method="POST">
                    <label>
                        Wybierz producenta
                        <input type="number" name="producent">
                        <input type="submit" name="submit" value=WYŚWIETL>
                    </label>
                </form>
            </div>
            <div class="right">
                <img src="sprzet.png" alt="Sprzedajemy komputery">
            </div>
        </div>
        <div class="middle">
            <h1>Podzespoły wybranego producenta</h1>
            <?php
                if(isset($_POST['submit'])){
                    $conn = mysqli_connect('localhost','root','','sklep2') or die ('blad podczas laczenia z serwerem');
                    $producent = $_POST['producent'];
                    switch($producent){
                        case 1:
                            $producent = 'Intel';
                            break;
                        case 2:
                            $producent = 'AMD';
                            break;    
                        case 5:
                            $producent = 'ADATA';
                            break;
                        case 6:
                            $producent = 'WD';
                            break;    
                        case 7:
                            $producent = 'Kingstone';
                            break;
                        case 8:
                            $producent = 'Patriot';
                            break;
                        case 9:
                            $producent = 'ASUS';
                            break;
                    }
                    $zapytanie1 = 'select p.nazwa, p.dostepnosc, p.cena from podzespoly as p join producenci as pr on p.producenci_id = pr.id where pr.nazwa = "'.$producent.'"';
                    $zapytanie1query = mysqli_query($conn,$zapytanie1);
                    if(mysqli_num_rows($zapytanie1query)){
                        while($wyniki1= mysqli_fetch_row($zapytanie1query)){
                            echo '<p>';
                            foreach($wyniki1 as $wynik1){
                                echo $wynik1;
                            }
                            echo '</p>';
                        }
                    }
                } else {
                    echo 'Wybierz producenta';
                }
                    
            ?>
        </div>
        <div class="bottom">
            <h3>Zapraszamy od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>30</sup></h3>
            <span>Strony partnerów: </span>
            <a href="http://adata.pl/" target="_blank">ADATA</a>
            <a href="http://patriot.pl/" target="_blank">Patriot</a>
            <a href="mailto: biuro@hurt.pl">biuro@hurt.pl</a>
            <p>Stronę wykonał 00000000000</p>
        </div>
    </div>
</body>
</html>