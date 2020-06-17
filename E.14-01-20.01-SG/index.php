<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>
    <link rel='stylesheet' href='styl8.css'>
</head>
<body>
    <div class="container">
        <div class="top">
            <ul >
                <a href="index.php"><li>Główna</li></a>    
                <a href="procesory.html"><li>Procesory</li></a>
                <a href="ram.html"><li>RAM</li></a>
                <a href="grafika.html"><li>Grafika</li></a>    
            </ul>
            <h2 >Podzespoły komputerowe</h2>
        </div>
        <div class="middle">
            <h1>Dzisiejsze promocje</h1>
            <table>
                <thead>
                    <tr>
                        <td>NUMER </td>
                        <td>NAZWA PODZESPOŁU</td>
                        <td>OPIS</td>
                        <td>CENA</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'sklep') or die('blad podczas laczenia');
                    $ask = 'select id, nazwa, opis, cena from podzespoly where cena <1000';
                    $zapytanie = mysqli_query($conn,$ask);
                    if(mysqli_num_rows($zapytanie)>0){ 
                        while($wyniki = mysqli_fetch_row($zapytanie)){
                            echo '<tr>';
                            foreach($wyniki as $wynik){
                                echo '<td>'.$wynik.'</td>';
                            }
                            echo '</tr>';
                            // echo '<tr><td>'.$wyniki[0].'</td><td>'.$wyniki[1].'</td><td>'.$wyniki[2].'</td><td>'.$wyniki[3].'</td></tr>';
                        }
                }
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
        <div class="bottom">
            <div><img src="scalak.jpg"></div>
            <div>
                <h4>Nasz Sklep Komputerowy</h4>
                <p>Współpracujemy z hurtownią <a href="http://www.edata.pl" target="_blank">edata</a></p>
            </div>
            <div><p>zadzwoń 601 602 603</p></div>
            <div>Stronę wykonał 00000000000</div>
        </div>
    </div>

</body>
</html>