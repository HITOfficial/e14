<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" href="auto.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>SAMOCHODY</h1>
        </div>
        <div class="middle">
            <div class="left">
                <h2>Wykaz samochodów</h2>
                <ul>
                    <?php
                        $conn = mysqli_connect('localhost','root','','komis') or die('nie polaczono');
                        $zapytanie1 = 'select id, marka, model from samochody';
                        $zapytanie1query = mysqli_query($conn,$zapytanie1);
                        if(mysqli_num_rows($zapytanie1query)>0){
                            while($wynik = mysqli_fetch_row($zapytanie1query)){
                                echo '<li>';
                                foreach($wynik as $wynikeach){ 
                                    echo $wynikeach.' ';
                                }
                                echo '</li>';
                            }
                        }
                        mysqli_close($conn)

                    ?>
                </ul>
                <h2>Zamówienia</h2>
                <ul>
                <?php
                        $conn = mysqli_connect('localhost','root','','komis') or die('nie polaczono');
                        $zapytanie2 = 'select `Samochody_id`, `Klient` from zamowienia';
                        $zapytanie2query = mysqli_query($conn,$zapytanie2);
                        if(mysqli_num_rows($zapytanie2query)>0){
                            while($wynik = mysqli_fetch_row($zapytanie2query)){
                                echo '<li>';
                                foreach($wynik as $wynikeach){ 
                                    echo $wynikeach.' ';
                                }
                                echo '</li>';
                            }
                        }
                        mysqli_close($conn)
                    ?>
                </ul>
            </div>
            <div class="right">
                <h2>Pełne dane: Fiat</h2>
                <?php
                    $conn = mysqli_connect('localhost','root','','komis') or die('nie polaczono');
                    $zapytanie3 = 'select * from samochody where marka ="Fiat"';
                    $zapytanie3query = mysqli_query($conn,$zapytanie3);
                    if(mysqli_num_rows($zapytanie3query)>0){
                        while($wynik = mysqli_fetch_row($zapytanie3query)){
                            foreach($wynik as $wynikeach){ 
                                echo $wynikeach.'/ ';
                            }
                            echo '<br>';
                        }
                    }
                    mysqli_close($conn)
                ?>
            </div>

        </div>
        <div class="bottom">
            <table>
                <tr>
                    <td><a href="kwerendy.txt">Kwerendy</a></td>
                    <td>Autor 00000000000</td>
                    <td><img src="auto.png"></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>