<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>W naszym sklepie kupisz najtaniej</h1>
        </div>
        <div class="middle">
            <div class="left">
                <h3>Promocja 15% obejmuje artykuły:</h3>
                <ul>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "","sklep") or die("nie polaczono");
                    $zapytanie1 = 'SELECT nazwa from towary where promocja = 1';
                    $zapytanie1gotowe = mysqli_query($conn, $zapytanie1); 
                    if(mysqli_num_rows($zapytanie1gotowe)>0){
                        while($wyniki1 = mysqli_fetch_row($zapytanie1gotowe)){
                            echo '<li>';
                            echo $wyniki1[0];
                            echo '</li>';
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </ul>
            </div>
            <div class="mid">
                <h3>Cena wybranego artykułu w promocji</h3>
                <form actiom="index.php" method="POST">
                    <label>
                        <select name="opcje">
                            <option value="Gumka do mazania">Gumka do mazania</option>
                            <option value="Cienkopis">Cienkopis</option>
                            <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                            <option value="Markery 4 szt.">Markery 4 szt.</option>
                        </select>
                    </label>
                    <label>

                        <input type="submit" name="submit" value="Wybierz">
                    </label>
                    <?php
                        if(isset($_POST['submit'])){
                            $conn = mysqli_connect("localhost", "root", "","sklep") or die("nie polaczono");
                            $wybor = $_POST['opcje'];
                            $zapytanie = 'SELECT cena FROM `towary` where nazwa ="'.$wybor.'"';
                            $zapytaniequery = mysqli_query($conn,$zapytanie);
                            if(mysqli_num_rows($zapytaniequery)>0){
                               while( $cena = mysqli_fetch_row($zapytaniequery)){
                                 echo '<p>'.round($cena[0]*0.85,2).'<p>';
                               }
                            }
                            //echo $wybor;
                            // switch($wybor){
                            //     case 'Gumka do mazania':
                            //         $zapytanie = 'SELECT cena FROM `towary` where nazwa ="'.$wybor.'"';
                            //         echo $zapytanie;
                            //         $zapytaniedokonczone = mysqli_query($conn, $zapytanie);
                            //         if(mysqli_num_rows($zapytaniedokonczone)>0){
                            //           echo mysqli_num_rows($zapytaniedokonczone);  
                            //         }
                            //         break;
                            //     case 'Cienkopis':
                            //         $zapytanie = 'SELECT cena FROM `towary` where nazwa ="'.$wybor.'"';
                            //         echo $zapytanie;
                            //         break;
                            //     case 'Pisaki 60 szt':
                            //         $zapytanie = 'SELECT cena FROM `towary` where nazwa ="'.$wybor.'"';
                            //         echo $zapytanie;
                            //         break;                          
                            //     case 'Markery 4 szt.':
                            //         $zapytanie = 'SELECT cena FROM `towary` where nazwa ="'.$wybor.'"';
                            //         echo $zapytanie;
                            //         break; 
                            
                            //     }
                            mysqli_close($conn);
                        } 

                    ?>
                </form>
            </div>
            <div class="right">
                <h3>Kontakt</h3>
                <p>telefon 123123123 <br>e-mail: <a href="bok@sklep.pl">bok@sklep.pl</a></p>
                <img src="promocja2.png" alt="promocja">
            </div>
        </div>
        <div class="bottom">
            <h4>Autor strony 00000000000</h4>
        </div>
    </div>
</body>
</html>