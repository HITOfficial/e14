<?php
    $conn = mysqli_connect('localhost','root','','baza3') or die('blad podczas laczenia z serwerem');
    $kategoria = $_POST['kategoria'];
    $podkategoria = $_POST['podkategoria'];
    $tytul = $_POST['tytul'];
    $opis = $_POST['opis'];
    $zapytanie = 'INSERT INTO `ogloszenie` (`uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES ("1","'.$kategoria.'","'.$podkategoria.'","'.$tytul.'","'.$opis.'")';
    if(mysqli_query($conn,$zapytanie)){
        echo 'dodano rekord pomyślnie';
    } else {
        echo 'blad';
    }
    mysqli_close($conn);
?>