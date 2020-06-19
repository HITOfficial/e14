<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div class="container">
        <div class="top flex">
            <div><img src="klaps.png" alt="Nasze filmy"></div>
            <div><h1>BAZA FILMÓW</h1></div>
            <div>
                <form action="index.php" method="POST">
                    <label>
                        <select name="list">
                            <option value="Sci-Fi">Sci-Fi</option>
                            <option value="animacja">animacja</option>
                            <option value="dramat">dramat</option>
                            <option value="horror">horror</option>
                            <option value="komedia">komedia</option>
                        </select>
                    </label>
                    <label>
                        <input type="submit" name="submit" value="Filmy">
                    </label>
                </form>
            </div>
            <div><img src="gwiezdneWojny.jpg" alt="szturmowcy"></div>
        </div>
        <div class="middle flex">
            <div class="left">
                <h2>Wybrano filmy:</h2>
                <?php
                    if(isset($_POST['submit'])){
                        $conn= mysqli_connect('localhost','root','','dane2') or die ('nie polaczono');
                        $list = $_POST['list'];
                        $zapytanie1 = 'select f.tytul, f.rok, f.ocena from filmy as f join gatunki as g on f.gatunki_id = g.id where g.nazwa = "'.$list.'"';
                        $zapytanie1query = mysqli_query($conn,$zapytanie1);
                        if(mysqli_num_rows($zapytanie1query)>0){
                            while($wynik1 = mysqli_fetch_array($zapytanie1query)){
                                echo '<p>Tytuł: '.$wynik1['tytul'].' Rok produkcji:'.$wynik1['rok'].' Ocena: '.$wynik1['ocena'].'</p>';
                            }
                        }
                        mysqli_close($conn);
                    }

                ?>
            </div>
            <div class="right">
                <h2>Wszystkie filmy</h2>
                <?php
                    if(isset($_POST['submit'])){
                        $conn= mysqli_connect('localhost','root','','dane2') or die ('nie polaczono');
                        $zapytanie2 = 'select f.id, f.tytul, r.imie, r.nazwisko from filmy as f join rezyserzy as r on f.rezyserzy_id = r.id';
                        $zapytanie2query = mysqli_query($conn,$zapytanie2);
                        if(mysqli_num_rows($zapytanie2query)>0){
                            while($wynik2 = mysqli_fetch_array($zapytanie2query)){
                                echo '<p>'.$wynik2['id'].' '.$wynik2['tytul'].' reżyseria: '.$wynik2['imie'].' '.$wynik2['nazwisko'].'</p>';
                            }
                        }
                        mysqli_close($conn);
                    }

                ?>
            </div>
        </div>
        <div class="bottom">
            <p>Autor: 00000000000</p>
            <p><a href="kwerendy.txt">Zapytania do bazy </a><a href="filmy.pl"> Przejdź do filmy.pl</a></p>

        </div>
    </div>
</body>
</html>