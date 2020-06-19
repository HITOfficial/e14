<!DOCTYPE html>
    <html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <div class="left">
                <img src="zad1.png" alt="hurtownia komputerowa">
            </div>
            <div class="mid">
                <ul>
                    <li>Sprzęt</li>
                    <ol>
                        <li>Procesory</li>
                        <li>Pamięć RAM</li>
                        <li>Monitory</li>
                        <li>Obudowy</li>
                        <li>Karty graficzne</li>
                        <li>Dyski twarde</li>
                    </ol>
                    <li>Oprogramowanie</li>
                </ul>
            </div>
            <div class="right">
                <h2>Hurtownia komputerowa</h2>
                <form action="sklep.php" method="POST">
                    <label>
                        Wybierz kategorię sprzętu <input type="number" name='number'>
                    </label>
                    <label>
                        <input type="submit" name="submit" value="SPRAWDŹ">
                    </label>
                </form>
            </div>
        </div>
        <div class="middle">
            <h1>Podzespoły we wskazanej kategorii</h1>
            <?php
            if(isset($_POST['submit'])){
                $conn= mysqli_connect('localhost','root','','sklep1') or die ('nie polaczono z baza');
                $number = $_POST['number'];
                if($number == 1){
                    $zapytanie1 = 'select p.nazwa,p.opis,p.cena from podzespoly as p join producenci as pr on p.producenci_id = pr.id join typy as t on p.typy_id = t.id where t.kategoria = "Procesor"';
                    $zapytanie1query = mysqli_query($conn,$zapytanie1);
                    if(mysqli_num_rows($zapytanie1query)>0) {
                        while($wynik = mysqli_fetch_array($zapytanie1query)){
                            echo '<p>Nazwa: '.$wynik['nazwa'].' </p>';
                            echo '<p> '.$wynik['opis'].' </p>';
                            echo '<p>Cena: '.$wynik['cena'].' </p>';
                            
                        }
                    }
                } else if($number == 2) {
                    $zapytanie1 = 'select p.nazwa,p.opis,p.cena from podzespoly as p join producenci as pr on p.producenci_id = pr.id join typy as t on p.typy_id = t.id where t.kategoria = "RAM"';
                    $zapytanie1query = mysqli_query($conn,$zapytanie1);
                    if(mysqli_num_rows($zapytanie1query)>0) {
                        while($wynik = mysqli_fetch_array($zapytanie1query)){
                            echo '<p>Nazwa: '.$wynik['nazwa'].' </p>';
                            echo '<p> '.$wynik['opis'].' </p>';
                            echo '<p>Cena: '.$wynik['cena'].' </p>';
                            
                        }
                    }
                } else {
                    echo 'wybierz poprawną kategorię sprzętu';
                }
                mysqli_close($conn);
            }
            ?>
        </div>
        <div class="bottom">
            <h3>Hurtownia działa od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>00</sup></h3>
            <a href="mailto: bok@hurtownia.pl">Napisz do nas</a>
            <span>Partnerzy</span>
            <a href="http://intel.pl/" target="_blank">Intel</a>
            <a href="http://amd.pl/" target="_blank">AMD</a>
            <p>Stronę wykonał 0000000000</p>
        </div>
    </div>
</body>
</html>