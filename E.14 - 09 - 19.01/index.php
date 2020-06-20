<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dane o zwierzętach</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>ATLAS ZWIERZĄT</h1>
        </div>
        <div class="middle">
            <h2>Gromady</h2>
            <ol>
                <li>Ryby</li>
                <li>Płazy</li>
                <li>Gady</li>
                <li>Ptaki</li>
                <li>Sssaki</li>
            </ol>
            <form action="index.php" method="POST">
                <label>
                    Wybierz gromadę: 
                    <input type="number" name="id">
                    <input type="submit" name="submit" value="Wyświetl">
                </label>
            </form>
        </div>
        <div class="bottom">
            <div class="left">
                <img src="zwierzeta.jpg" alt ="dzikie zwierzęta">
            </div>
            <div class="mid">
                <ul>
                <?php
                    if(isset($_POST['submit']) && isset($_POST['id'])){
                        $conn = mysqli_connect('localhost','root','','baza1') or die('blad podczas laczenia z serwerem');
                        $id = $_POST['id'];
                        $id1 = $id;
                        switch($id){
                            case 1: 
                                $id = 'RYBY';
                                break;
                            case 2: 
                                $id = 'PŁAZY';
                                break;
                            case 3: 
                                $id = 'GADY';
                                break;    
                            case 4: 
                                $id = 'PTAKI';
                                break;
                            case 5: 
                                $id = 'SSAKI';
                                break;
                        }
                        $zapytanie1 = 'SELECT z.wystepowanie, z.gatunek FROM `zwierzeta` as z join gromady as g on z.Gromady_id = g.id where g.id ='.$id1;
                        $zapytanie1query = mysqli_query($conn,$zapytanie1);
                        echo '<h2>'.$id.'</h2>';
                        if(mysqli_num_rows($zapytanie1query)>0) {
                            while($wyniki1 = mysqli_fetch_array($zapytanie1query)){
                                echo '<li>'.$wyniki1[0].' '.$wyniki1[1].'</li>';
                            }
                        }
                        mysqli_close($conn);   
                    }
                ?>
                </ul>
            </div>
            <div class="right">
                <h2>Wszystkie zawierzęta w bazie</h2>
                <?php
                    $conn = mysqli_connect('localhost','root','','baza1') or die('blad podczas laczenia z serwerem');
                    $zapytanie2 = 'select z.id, z.gatunek, z.wystepowanie from zwierzeta as z join gromady as g on z.Gromady_id = g.id';
                    $zapytanie2query = mysqli_query($conn,$zapytanie2);
                    if(mysqli_num_rows($zapytanie2query)>0) {
                        while($wyniki2 = mysqli_fetch_array($zapytanie2query)){
                            echo '<li>'.$wyniki2[0].' '.$wyniki2[1].' '.$wyniki2[2].'</li>';
                        }
                    }
                    mysqli_close($conn);   
                ?>
            </div>
        </div>
        <div class="footer">
            <a href="atlas-zwierzat.pl" target="_blank">Poznaj inne strony o zwierzętach</a>
            autor Atlasu zwierząt: 00000000000
        </div>
    </div>
</body>
</html>