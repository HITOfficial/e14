<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weterynarz</title>
    <link rel="stylesheet" href="weterynarz.css">
</head>
<body>
    <div class="contanier">
        <div class="top">
            <h1>GABINET WETERYNARYJNY</h1>
        </div>
        <div class="middle">
            <div class="left">
                <h2>PSY</h2>
                <?php
                    $conn = mysqli_connect('localhost','root','','weterynarz') or die('blad podczas laczenia z baza');
                    $zapytanie2 = 'SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE rodzaj = 1';
                    $zapytanie2query = mysqli_query($conn,$zapytanie2);
                    if(mysqli_num_rows($zapytanie2query)>0){
                        while($wynik1 = mysqli_fetch_row($zapytanie2query)){
                            foreach($wynik1 as $wyniki1){
                                echo $wyniki1.' ';
                            }
                            echo "<br>";
                        }
                    }
                    mysqli_close($conn);
                ?>
                <h2>KOTY</h2>
                <?php
                     $conn = mysqli_connect('localhost','root','','weterynarz') or die('blad podczas laczenia z baza');
                    $zapytanie2kot = 'SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE rodzaj = 2';
                    $zapytanie2kotquery = mysqli_query($conn,$zapytanie2kot);
                    if(mysqli_num_rows($zapytanie2query)>0){
                        while($wynik1kot = mysqli_fetch_row($zapytanie2kotquery)){
                            foreach($wynik1kot as $wyniki1kot){
                                echo $wyniki1kot.' ';
                            }
                            echo "<br>";
                        }
                    }
                    mysqli_close($conn);
                ?>
                
            </div>
            <div class="mid">
                <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
                <?php
                    $conn = mysqli_connect('localhost','root','','weterynarz') or die('blad podczas laczenia z baza');
                    $zapytanie1 = 'select imie, telefon, szczepienie, opis from zwierzeta';
                    $zapytanie1query = mysqli_query($conn,$zapytanie1);
                    if(mysqli_num_rows($zapytanie2query)>0){
                        while($wynik = mysqli_fetch_row($zapytanie1query)){
                            echo 'Pacjent: '.$wynik[0];
                            echo '<br>';
                            echo 'Telefon właściciela: '.$wynik[1];
                            echo '<br>';
                            echo 'ostatnie szczepienie: '.$wynik[2];
                            echo '<br>';
                            echo 'informacje: '.$wynik[3];
                            echo '<hr>';
                        }
                    }
                    mysqli_close($conn);
                ?>
            </div>
            <div class="right">
                <h2>WETERYNARZ</h2>
                <div class="flex">
                    <a href="logo.jph"><img src="logo-mini.jpg" alt="logo"></a>            
                    <p>Krzysztof Nowakowski, lekarz weterynarii</p>
                </div>
                <h2>GODZINY PRZYJĘĆ</h2>
                <table>
                    <tr>
                        <td>Poniedziałek</td>
                        <td>15:00 - 19:00</td>
                    </tr>
                    <tr>
                        <td>Wtorek</td>
                        <td>15:00 - 19:00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>