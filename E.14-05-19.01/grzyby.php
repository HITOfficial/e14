<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div class="container">
        <div class="top flex">
            <div class="image">
                <a href="borowik-miniatura.jpg"><img src="borowik-miniatura.jpg" alt="Grzyboboranie"></a>
                
            </div>
            <div class="title">
                <h1> Idziemy na grzyby!</h1>
            </div>
        </div>
        <div class="middle flex">
            <div class="left">
                <?php
                $conn = mysqli_connect('localhost','root','','dane2') or die('problem podczas laczenia z serwerem');
                $zapytanie3 = 'select nazwa_pliku, potoczna from grzyby';
                $zapytanie3query = mysqli_query($conn,$zapytanie3);
                if(mysqli_num_rows($zapytanie3query)>0){
                    while($wyniki1 = mysqli_fetch_row($zapytanie3query)){
                        echo '<img src="'.$wyniki1[0].'" title="'.$wyniki1[1].'">';
                    }
                }
                ?>
            </div>
            <div class="right">
                <h2>Grzyby jadalne</h2>
                <?php
                $conn = mysqli_connect('localhost','root','','dane2') or die('problem podczas laczenia z serwerem');
                $zapytanie2 = 'SELECT g.nazwa, g.potoczna, r.nazwa as "r.nazwa" from grzyby as g join rodzina as r on g.rodzina_id = r.id join potrawy as p on g.potrawy_id = p.id where p.nazwa ="sos"';
                $zapytanie2query = mysqli_query($conn,$zapytanie2);
                if(mysqli_num_rows($zapytanie2query)>0){
                    while($wyniki2 = mysqli_fetch_array($zapytanie2query)){
                        echo '<p>'.$wyniki2['nazwa'].' '.$wyniki2['r.nazwa'].'('.$wyniki2['potoczna'].')</p>';
                    }
                }
                ?>
                <h2>Polecamy do sosów</h2>
                <ol>
                <?php
                $conn = mysqli_connect('localhost','root','','dane2') or die('problem podczas laczenia z serwerem');
                $zapytanie2 = 'SELECT g.nazwa, g.potoczna, r.nazwa as "r.nazwa" from grzyby as g join rodzina as r on g.rodzina_id = r.id join potrawy as p on g.potrawy_id = p.id where p.nazwa ="sos"';
                $zapytanie2query = mysqli_query($conn,$zapytanie2);
                if(mysqli_num_rows($zapytanie2query)>0){
                    while($wyniki2 = mysqli_fetch_array($zapytanie2query)){
                        echo '<li>'.$wyniki2['nazwa'].' ('.$wyniki2['potoczna'].'), rodzina: '.$wyniki2['r.nazwa'].')</li>';
                    }
                }
                ?>
                </ol>
            </div>
        </div>
        <div class="bottom">
            <p>Autor 00000000000</p>
        </div>
    </div>
    
</body>
</html>