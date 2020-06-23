<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon pielęgnacji</title>
    <link rel="stylesheet" href="salon.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
        </div>
        <div class="middle">
            <div class="left">
                <h3> SALON ZAPRASZA W DNIACH</h3>
                <ul>
                    <li>Poniedziałek, 12:00 - 18:00</li>
                    <li>Wtorek, 12:00 - 18:00</li>
                </ul>
                <div class="flex">
                    <a href="pies.jpg"><img src="pies-mini.jpg" alt="pies-mini"></a>
                    <p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
                </div>
            </div>
            <div class="mid">
                <h3>PRZYPOMNIENIE O NATĘPNEJ WIZYCIE</h3>
                <?php
                    $conn = mysqli_connect('localhost','root','','salom') or die('blad podczas laczenia z serwerem');
                    $zapytanie2 = 'select imie, rodzaj, nastepna_wizyta, telefon from zwierzeta where nastepna_wizyta != 0';
                    $zapytanie2query = mysqli_query($conn,$zapytanie2);
                    if(mysqli_num_rows($zapytanie2query)>0){
                        while($wynik = mysqli_fetch_array($zapytanie2query)){
                            if($wynik['rodzaj'] == 1){
                                echo 'Pies: '. $wynik['imie'];
                            } else if($wynik['rodzaj' == 2]){
                                echo 'Kot: '. $wynik['imie'];
                            }
                            echo '<br> Data następnej wizyty: '. $wynik['nastepna_wizyta'].', telefon właściciela: '. $wynik['telefon'];
                            echo '<br>';
                        }
                    }
                ?>
            </div>
            <div class="right">
                <h3>USŁUGI</h3>
                <?php
                     $conn = mysqli_connect('localhost','root','','salom') or die('blad podczas laczenia z serwerem');
                     $zapytanie2 = 'select nazwa, cena from uslugi';
                     $zapytanie2query = mysqli_query($conn,$zapytanie2);
                     if(mysqli_num_rows($zapytanie2query)>0){
                         while($wynik = mysqli_fetch_array($zapytanie2query)){
                             echo '<br>' . $wynik['nazwa'].' '. $wynik['cena'];
                         }
                     }
                ?>
            </div>
        </div>
    </div>
</body>
</html>